<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Tag;
use App\Artikel;
use Session;
use Auth;
use File;
class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::orderBy('created_at','desc')->get();
        // dd($artikel);
        return view('admin.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('admin.artikel.create', compact('kategori','tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //   $request->validate([
      //       'judul' => 'required|unique:artikels',
      //       'konten' => 'required|min:50',
      //       'foto' => 'required|mimes:jpeg,jpg,png.gif|required|max:2048',
      //       'kategori_id' => 'required',
        //     'tag_id' => 'required'
         // ]);

        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul, '-');
        $artikel->konten = $request->konten;
        $artikel->user_id = Auth::user()->id;
        $artikel->kategori_id = $request->kategori_id;
       
        //foto
        if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $path = public_path().
                            '/assets/img/artikel/';
            $filename = str_random(6).'_'
                        .$file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $artikel->foto = $filename;
        }
            $artikel->save();
            $artikel->tag()->attach($request->tag_id);
            Session::flash("flash_notification",[
            "level" => "danger",
            "message" => "Berhasil Menyimpan"
            ]);
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.show',compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        $tag = Tag::all();
        $select = $artikel->tag->pluck('id')->toArray();
        return view('admin.artikel.edit', compact('artikel','select','kategori','tag'));
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
        // $request->validate([
        //     'judul' => 'required|unique:artikels',
        //     'konten' => 'required|min:50',
        //     'kategori_id' => 'required',
        //     'tag_id' => 'required'
        // ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul, '-');
        $artikel->konten = $request->konten;
        $artikel->user_id = Auth::user()->id;
        $artikel->kategori_id = $request->kategori_id;
       
         # Foto
         if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/artikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            if($artikel->foto){
                $old_foto = $artikel->foto;
                $filepath = public_path().'/assets/img/artikel/'.$artikel->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $artikel->foto = $filename;
        }
        $artikel->save();
        $artikel->tag()->sync($request->tag_id);
        Session::flash("flash_notification",[
        "level" => "danger",
        "message" => "Berhasil Menyimpan"
        ]);
        return redirect()->route('artikel.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = artikel::findOrFail($id);
        if ($artikel->foto) {
            $old_foto = $artikel->foto;
            $filepath = public_path() 
            . '/assets/img/artikel' . $artikel->foto;
            try {
                File::delete($filepath);
            }
             catch (FileNotFoundException $e){
                 // File sudah dihapus/tidak ada
             }
            }
            $artikel->tag()->detach($artikel->id);
            $artikel->delete();
            Session::flash("flash_notification",[
            "level" => "succes",
            "message" => "Berhasil Menghapus data"
            ]);
            return redirect()->route('artikel.index');
        }
            
}
