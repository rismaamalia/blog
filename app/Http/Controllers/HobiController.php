<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobi;
use Session;
class HobiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobi = Hobi::all();
        return view('hobi.index',Compact('hobi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hobi = new Hobi;
      
        $hobi->hobi = $request->hobi;
        $hobi->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" =>"Berhasil menyimpan Hobi <b>$hobi->hobi</b>"
            ]);
            return redirect()->route('hobi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hobi = Hobi::findOrFail($id);
        return view('hobi.show',compact('hobi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hobi = Hobi::findOrFail($id);
        return view('hobi.edit',compact('hobi'));
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
        $hobi = Hobi::findorFail($id);
       
        $hobi->hobi = $request->hobi;
        $hobi->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" =>"Berhasil mengedit hobi <b>$hobi->nama</b>"
        ]);
        return redirect()->route('hobi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = Hobi::findorFail($id)->delete();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" =>"DATA BERHASIL DI HAPUS"
        ]);
        return redirect()->route('hobi.index');
    }
}
