<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Minuman;
use App\Supplier;
use Session;
class MinumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $min = Minuman::with('supplier')->get();
        return view('minuman.index',compact('min'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sup = Supplier::All();
        return view('minuman.create',compact('sup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $min = new Minuman;
        $min->nm_minuman = $request->nm_minuman;
        $min->id_supplier = $request->id_supplier;
        $min->harga_minuman = $request->harga_minuman;
        $min->stok_minuman = $request->stok_minuman;
        $min->save();
        Session::flash("flash_notificacation",[
        "level" => "danger",
        "message" => "Berhasil Menyimpan <b>$min->nm_minuman</b>"
        ]);
        return redirect()->route('minuman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $min = Minuman::findOrFail($id);
        return view('minuman.show',compact('min'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $min = Minuman::findOrFail($id);
        $sup = Supplier::all();
        return view('minuman.edit',compact('sup','min'));

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
        $min = Minuman::findOrFail($id);
        $min->nm_minuman = $request->nm_minuman;
        $min->id_supplier = $request->id_supplier;
        $min->harga_minuman = $request->harga_minuman;
        $min->stok_minuman = $request->stok_minuman;
        $min->save();
        Session::flash("flash_notificacation",[
        "level" => "danger",
        "message" => "Berhasil Menyimpan <b>$min->nama</b>"
        ]);
        return redirect()->route('minuman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $min = Minuman::findOrFail($id)->delete();
        Session::flash("flash_notificacation",[
        "level" => "danger",
        "message" => "Berhasil Menghapus data"
        ]);
        return redirect()->route('minuman.index');
    }
}
