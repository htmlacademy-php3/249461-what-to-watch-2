<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Add a newly created resource in storage.
     */
    public function add(Request $request)
    {
        //
    }

    /**
     * Delete the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
    }
}
