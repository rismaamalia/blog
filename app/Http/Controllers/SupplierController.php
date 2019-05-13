<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Session;
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sup = Supplier::all();
        return view('supplier.index',compact('sup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sup = new Supplier;
        $sup->nm_supplier = $request->nm_supplier;
        $sup->kota_supplier = $request->kota_supplier;
        $sup->alamat_supplier = $request->alamat_supplier;
        $sup->no_tlp_supplier = $request->no_tlp_supplier;
        $sup->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" =>"Berhasil menyimpan <b>$sup->nama</b>"
        ]);
        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sup = Supplier::findOrFail($id);
        return view('supplier.show',compact('sup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sup = Supplier::findOrFail($id);
        return view('supplier.edit',compact('sup'));
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
        $sup = Supplier::findorFail($id);
        $sup->nm_supplier = $request->nm_supplier;
        $sup->kota_supplier = $request->kota_supplier;
        $sup->alamat_supplier = $request->alamat_supplier;
        $sup->no_tlp_supplier = $request->no_tlp_supplier;
        $sup->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" =>"Berhasil mengedit <b>$sup->nama</b>"
        ]);
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sup = Supplier::findorFail($id)->delete();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" =>"DATA BERHASIL DI"
        ]);
        return redirect()->route('supplier.index');
    }
}
