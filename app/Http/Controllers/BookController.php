<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $libro = Libro::all();
            return $libro;
        } catch (Exception $e) {
            //throw $th;
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $libro = new Libro();

            $libro->title = $request->title;
            $libro->author = $request->author;
            $libro->author_id = $request->author_id;
            $libro->release_year = $request->release_year;
            $libro->isbn = $request->isbn;
            $libro->save();
        } catch (Exception $e) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Libro::find($id);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $libro = Libro::findOrFail($request->id);

            $libro->title = $request->title;
            $libro->author = $request->author;
            $libro->author_id = $request->author_id;
            $libro->release_year = $request->release_year;
            $libro->isbn = $request->isbn;

            $libro->save();

            return $libro;
        } catch (Exception $e) {
            //throw $th;
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $libro = Libro::destroy($request->id);
        return $libro;
        } catch (Exception $e) {
            //throw $th;
        }
    }
}
