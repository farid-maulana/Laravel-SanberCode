<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function create() {
        return view('content.questions.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:100',
            'body' => 'required'
        ]);

        $query = DB::table('questions')->insert([
            "title" => $request['title'],
            "body" => $request['body']
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil ditambahkan!');
    }

    public function index() {
        $questions = DB::table('questions')->get();

        return view('content.questions.index', compact('questions'));
    }

    public function show($id) {
        $questions = DB::table('questions')->where('id', $id)->first();

        return view('content.questions.show', compact('questions'));
    }

    public function edit($id) {
        $questions = DB::table('questions')->where('id', $id)->first();

        return view('content.questions.edit', compact('questions'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'title' => 'required|max:100',
            'body' => 'required'
        ]);

        $questions = DB::table('questions')
                        ->where('id', $id)
                        ->update([
                            'title' => $request['title'],
                            'body' => $request['body']
                        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil diedit!');
    }

    public function destroy($id) {
        $questions = DB::table('questions')->where('id', $id)->delete();

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil dihapus!');
    }

}
