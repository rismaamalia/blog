<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cus = Customer::all();
        return view('customer.index',Compact('cus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cus = new Customer;
      
        $cus->nm_customer = $request->nm_customer;
        $cus->alamat_customer = $request->alamat_customer;
        $cus->kota = $request->kota;
        $cus->no_tlp = $request->no_tlp;
        $cus->email = $request->email;
        $cus->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" =>"Berhasil menyimpan Customer <b>$cus->nm_customer</b>"
            ]);
            return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cus = Customer::findOrFail($id);
        return view('customer.show',compact('cus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cus = Customer::findOrFail($id);
        return view('customer.edit',compact('cus'));
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
        $cus = Customer::findorFail($id);
       
        $cus->nm_customer = $request->nm_customer;
        $cus->alamat_customer = $request->alamat_customer;
        $cus->kota = $request->kota;
        $cus->no_tlp = $request->no_tlp;
        $cus->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" =>"Berhasil mengedit customer <b>$cus->nama</b>"
        ]);
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cus = Customer::findorFail($id)->delete();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" =>"DATA BERHASIL DI HAPUS"
        ]);
        return redirect()->route('customer.index');
    }
}
