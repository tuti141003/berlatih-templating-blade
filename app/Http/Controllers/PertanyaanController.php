<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required',
        ]);
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);
        return redirect('/pertanyaan/create');
    }

    public function index()
    {
        $post = DB::table('pertanyaan')->get();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function show($id)
    {
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id)
    {
        $post = DB::table('post')->where('id', $id)->first();
        return view('post.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'isi' => 'required|unique:pertanyaan',
            'judul' => 'required',
        ]);

        $query = DB::table('pertanyaan')
            ->where('id', $id)
            ->update([
                'judul' => $request["judul"],
                'isi' => $request["isi"]
            ]);
        return redirect('/posts');
    }

    public function destroy($id)
    {
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan');
    }

}
