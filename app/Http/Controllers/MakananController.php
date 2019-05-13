<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
use App\Supplier;
use Session;
class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mak = Makanan::with('supplier')->get();
        return view('makanan.index',compact('mak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sup = Supplier::All();
        return view('makanan.create',compact('sup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mak = new Makanan;
        $mak->nm_makanan = $request->nm_makanan;
        $mak->id_supplier = $request->id_supplier;
        $mak->harga_makanan = $request->harga_makanan;
        $mak->stok_makanan = $request->stok_makanan;
        $mak->save();
        Session::flash("flash_notificacation",[
        "level" => "danger",
        "message" => "Berhasil Menyimpan <b>$mak->nm_makanan</b>"
        ]);
        return redirect()->route('makanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mak = Makanan::findOrFail($id);
        return view('makanan.show',compact('mak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mak = Makanan::findOrFail($id);
        $sup = Supplier::all();
        return view('makanan.edit',compact('sup','mak'));

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
        $mak = Makanan::findOrFail($id);
        $mak->nm_makanan = $request->nm_makanan;
        $mak->id_supplier = $request->id_supplier;
        $mak->harga_makanan = $request->harga_makanan;
        $mak->stok_makanan = $request->stok_makanan;
        $mak->save();
        Session::flash("flash_notificacation",[
        "level" => "danger",
        "message" => "Berhasil Menyimpan <b>$mak->nm_makanan</b>"
        ]);
        return redirect()->route('makanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $mak = Makanan::findOrFail($id)->delete();
        Session::flash("flash_notificacation",[
        "level" => "danger",
        "message" => "Berhasil Menghapus data"
        ]);
        return redirect()->route('makanan.index');
    }
}
