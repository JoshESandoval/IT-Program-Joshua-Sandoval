<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equiptment;
use App\Models\Manufacture;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Spec;


class EquiptmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $customers = Customer::all();
        $equiptments = Equiptment::all();
        $manufactures = Manufacture::all();
        return view('equiptments', compact('equiptments'), compact('customers'), compact('manufactures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $customers = Customer::all();
        $manufactures = Manufacture::all();
        return view('equiptments.create', compact('manufactures') ,compact('customers'));
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
            'manufactureId'=>'required',
            'userId'=>'required',
            'catagory'=>'required',
            'memory'=>'required',
            'display'=>'required',
            'misc'=>'required',
            'location'=>'required',
            'price'=>'required',
            'date'=>'purchaseDate',
        ]);

        $equiptment = Equiptment::create([
            'manufactureId'=> $request->manufactureId,
            'userId'=> $request->userId,
            'catagory'=>$request->catagory,
        ]);
        
        $invoice = Invoice::create([
            'equiptmentId'=>$equiptment->id,
            'location'=>$request->location,
            'price'=>$request->price,
            'purchaseDate'=>$request->purchaseDate,
        ]);

        $spec = Spec::create([
            'equiptmentId'=>$equiptment->id,
            'ram'=>$request->ram,
            'memory'=>$request->memory,
            'display'=>$request->display,
            'processor'=>$request->processor,
            'graphics'=>$request->graphics,
            'misc'=>$request->misc,
        ]);

        $equiptments = Equiptment::all();
        $customers = Customer::all();
        $manufactures = Manufacture::all();

        return view('equiptments', compact('equiptments'),compact('manufactures') ,compact('customers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equiptment= Equiptment::find($id);
        $equiptments = Equiptment::all();
        $customers = Customer::all();
        return view('equiptments.show',compact('equiptment'), compact('manufactures') ,compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
