<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Question;
use App\Profile;

class PertanyaanController extends Controller
{
    public function create() {
        $profile = Profile::all();

        return view('content.questions.create', compact('profile'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:100',
            'body' => 'required|max:255',
            'profile_id' => 'required'
        ]);

        /*
        INSERT WITH QUERY BUILDER
        $query = DB::table('questions')->insert([
            "title" => $request['title'],
            "body" => $request['body']
        ]);
        */

        // INSERT WITH ELOQUENT MASS ASSIGNMENT
        $questions = Question::create([
            'title' => $request['title'],
            'body' => $request['body'],
            'profiles_id' => $request['profile_id']
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil ditambahkan!');
    }

    public function index() {
        /*
        COLLECTIONS DATA WITH QUERY BUILDER
        $questions = DB::table('questions')->get();
        */

        // COLLECTIONS DATA WITH ELOQUENT
        $questions = Question::all();

        return view('content.questions.index', compact('questions'));
    }

    public function show($id) {
        /*
        PICK A DATA WITH QUERY BULIDER (SELECT WITH CONDITIONAL->SELECT WHERE)
        $questions = DB::table('questions')->where('id', $id)->first();
        */

        // PICK A DATA WITH ELOQUENT
        $questions = Question::find($id);

        return view('content.questions.show', compact('questions'));
    }

    public function edit($id) {
        /*
        PICK A DATA WITH QUERY BULIDER (SELECT WITH CONDITIONAL->SELECT WHERE)
        $questions = DB::table('questions')->where('id', $id)->first();
        */

        // PICK A DATA WITH ELOQUENT
        $questions = Question::find($id);
        $profiles = Profile::all();

        return view('content.questions.edit', compact('questions', 'profiles'));
    }

    public function update($id, Request $request) {
        /*
        UPDATA DATA WITH QUERY BUILDER
        $questions = DB::table('questions')
                        ->where('id', $id)
                        ->update([
                            'title' => $request['title'],
                            'body' => $request['body']
                        ]);
        */

        // UPDATE DATA WITH ELOQUENT
        $questions = Question::where('id', $id)->update([
            'title' => $request['title'],
            'body' => $request['body'],
            'profiles_id' => $request['profile_id']
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil diedit!');
    }

    public function destroy($id) {
        /*
        DELETE DATA WITH QUERY BUILDER
        $questions = DB::table('questions')->where('id', $id)->delete();
        */

        // DELETE DATA WITH ELOQUENT
        $questions = Question::destroy($id);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil dihapus!');
    }

}
