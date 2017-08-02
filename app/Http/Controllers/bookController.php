<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use App\author;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $book = book::all();
         return view('book.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $author = author::all();
        return view('book.create', compact('author'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $book = new book;
        $book->title = $request->a;
        $book->author_id = $request->b;
        $book->amount = $request->c;
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path().DIRECTORY_SEPARATOR.'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $book->cover = $filename;
         }
        $book->save();
        return redirect('book');

         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         $book = book::findOrFail($id);
         return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $book = book::findOrFail($id);
         $author = author::all();
         return view('book.edit', compact('book','author'));
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
        //
        $book = book::findOrFail($id);
        $book->title = $request->a;
        $book->author_id = $request->b;
        $book->amount = $request->c;
        $book->cover = $request->d;
        $book->save();
        return redirect('book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $book = book::findOrFail($id);
        $book->delete();
        return redirect('book');
    }
}
