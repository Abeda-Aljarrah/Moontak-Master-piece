<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $periods = Period::get();
        $plan = Plan::all();

        return view('dashboard.periods.index', compact('periods', 'plan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $planNames = Plan::get();

        return view('dashboard.periods.create', compact('planNames'));
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
        Period::create([
            'plan_id' => $request->input('plan'),
            'title' => $request->input('title'),
            'price' => $request->input('price'),
        ]);

        return redirect()->route('periods.index')->with('success', 'Period created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $userId, $periodId)
{
    $user = User::find($userId);
    $selectedPeriod = Period::find($periodId);

    // Retrieve the available periods
    $periods = Period::all();
    $plans = Plan::all(); // Add this line to retrieve the plans
    // Retrieve the selected plan ID from the form data
    $periodId = $request->input('period');

    // Retrieve the selected start day from the form data
    $startDay = $request->input('start');
// dd($startDay);
    // Save the user's selection to the database
    Subscription::create([
        'user_id' => $userId,
        'is_active'=>true,
        'period_id' => $periodId,
        'start_date' => $startDay,
        'end_date' => date("Y-m-d", strtotime($startDay . " + 30 days")),
    ]);

    return view('pages.checkout-3', compact('userId', 'plans', 'periods', 'selectedPeriod'));
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $periods = Period::findOrFail($id);
        $plans = Plan::get();

        return view('dashboard.periods.edit', compact('plans', 'periods'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'price' => 'required',
            'title' => 'required',
        ]);

        // Get the data to update, excluding '_token' and '_method'
        $data = $request->except(['_token', '_method']);

        // Update the Period model by ID with the correct column name 'plan_id'
        Period::where('id', $id)->update($data);

        // Redirect with a success message
        return redirect()->route('periods.index')->with('success', 'Period updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Period::destroy($id);
        return back()->with('success', 'Period deleted successfully.');
    }
}
