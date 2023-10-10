<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subscriptions = Subscription::get();
        $user = User::all();
        $periods = Period::all();

        return view('dashboard.subscriptions.index', compact('subscriptions','user','periods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $subscriptions = Subscription::get();
        $user = User::all();
        $periods = Period::all();


        // $categories= $donations->category->name;
        return view('dashboard.subscriptions.create', compact('subscriptions','user','periods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'main_price' => [
        //         'required',
        //         'regex:/^\d{1,3}(\.\d{1,2})?$/',
        //     ],
        // ]);


        Subscription::create([
            'user_id' => $request->input('user_id'),
            'period_id' => $request->input('period_id'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'is_active' => $request->input('is_active'),
        ]);

        return redirect()->route('subscriptions.index')->with('success', 'Subscription created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $subscriptions = Subscription::findOrFail($id);
        $user = User::get();
        $periods = Period::all();


        return view('dashboard.subscriptions.edit', compact('subscriptions','user','periods'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     // 'image' => 'required',
        //     'main_price' => 'required',
        //     'description' => 'required',
        // ]);
        $data = $request->except(['_token', '_method']);

        Subscription::where('id', $id)->update($data);


        return redirect()->route('subscriptions.index')->with('success', 'Subscription updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //

    }
}
