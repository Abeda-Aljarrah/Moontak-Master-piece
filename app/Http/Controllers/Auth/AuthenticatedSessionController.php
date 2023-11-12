<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Cart;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        Cart::where('user_id', auth()->user()->id)->delete();

        $sessionCart = session('cart');

        if ($sessionCart <> null) {
        foreach ($sessionCart as $item){
            Cart::create([
            'user_id' => auth()->user()->id,
            'product_id' => $item['product_id'],
            'Qty' => $item['Qty'],
            'unit_price' => $item['unit_price'],
        ]);
        session()->forget('cart');
        }
    }
        // return redirect()->intended(RouteServiceProvider::HOME);
        return redirect()->back();

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
