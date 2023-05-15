<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;

class NewsResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('upload_news', [
            'title' => 'Upload'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsModel $newsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsModel $newsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsModel $newsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsModel $newsModel)
    {
        //
    }
}
