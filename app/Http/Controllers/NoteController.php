<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

use function Laravel\Prompts\note;

class NoteController extends Controller
{
    public function index(){
        //lay du lieu tu database va tra ve view
        return view('notes.index');
    }
    public function create(){
        return view('notes.create');
    }
    public function store(Request $request){
        // Note::create([
        //     'title'=>$request->title,
        //     'content'=>$request->content,
        // ]);
        Note::create($request->only('title','content'));
        return redirect()->route('notes.index');
    }
}
