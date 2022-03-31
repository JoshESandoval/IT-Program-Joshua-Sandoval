<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fName' => 'required',
            'lName' => 'required',
            'cEmail' => 'required',
            'cNumber' => 'required',
        ]);

        $customer = Customer::create([
            'fName'=> $request->fName,
            'lName'=> $request->lName,
            'cEmail' => $request->cEmail,
            'cNumber' => $request->cNumber,
        ]);
        
        $customers = Customer::all();
        return view('customers', compact('customers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer= Customer::find($id);
        return view('customers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'fName' => 'required',
            'lName' => 'required',
            'cEmail' => 'required',
            'cNumber' => 'required',
        ]);

        $customer = Customer::find($id);

        $customer->fName = $request->fName;
        $customer->lName = $request->lName;
        $customer->cEmail = $request->cEmail;
        $customer->cNumber = $request->cNumber;
        $customer->update();

        return view('customers.show', compact('customer'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
