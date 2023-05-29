<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->guest() || auth()->user()->name !== 'Admin') {
            abort(403);
        }
        
        return view('admin.index', [
            'title' => 'Admin',
            'news' => News::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('upload_news', [
            'title' => 'Upload'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:news',
            'information' => 'required',
            'img' => 'image|file|max:10240'
        ]);

        if ($request->file('img')) {
            $validatedData['img'] = $request->file('img')->store('post-image');
        }

        $validatedData['user_id'] = auth()->user()->id;
        
        News::create($validatedData);

        return redirect('/')->with('success', 'Your Info has been successfully uploaded');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $upload)
    {
        if($upload->img){
            Storage::delete($upload->img);
        }

        News::destroy($upload->id);

        return redirect('/news/upload')->with('success', 'Your Product has been successfully deleted');
    }
}
