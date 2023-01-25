<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authors;

class AuthorController extends Controller
{
    public function index()
    {
        try {
            $author = Authors::all();
            return $author;
        } catch (Exception $e) {
            //throw $th;
        }
        
    }

    public function store(Request $request)
    {
        try {
            $author = new Authors();

            $author->author = $request->author;

            $author->save();
        } catch (Exception $e) {
            //throw $th;
        }
    }

    public function show($id)
    {
        return Authors::find($id);
    }
}
