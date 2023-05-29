<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarketResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->guest() || auth()->user()->name !== 'Admin') {
            abort(403);
        }
        return view('admin.index_market', [
            'title' => 'Admin',
            'market' => Market::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('upload_product', [
            'title' => 'Upload'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product' => 'required|max:255',
            'slug' => 'required|unique:markets',
            'price' => 'required|max:255',
            'no_telp' => 'required',
            'information' => 'required',
            'img' => 'image|file|max:10240'
        ]);

        if ($request->file('img')) {
            $validatedData['img'] = $request->file('img')->store('post-image');
        }

        $validatedData['user_id'] = auth()->user()->id;
        
        Market::create($validatedData);

        return redirect('/market/upload')->with('success', 'Your Product has been successfully uploaded');
    }

    /**
     * Display the specified resource.
     */
    public function show(Market $market)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Market $upload)
    {
        return view('edit_post', [
            'title' => 'Update',
            'market' => $upload
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Market $upload)
    {
        $rules = [
            'product' => 'required|max:255',
            'price' => 'required|max:255',
            'no_telp' => 'required',
            'information' => 'required',
            'img' => 'image|file|max:10240'
        ];

        if($request->slug != $upload->slug){
            $rules['slug'] = 'required|unique:markets';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('img')) {
            if($request->oldImg) {
                Storage::delete($request->oldImg); 
            }
            $validatedData['img'] = $request->file('img')->store('post-image');
        }

        $validatedData['user_id'] = auth()->user()->id;
        
        Market::where('id', $upload->id)->update($validatedData);

        return redirect('/mypost')->with('success', 'Your Product has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Market $upload)
    {
        if($upload->img){
            Storage::delete($upload->img);
        }

        Market::destroy($upload->id);

        return redirect('/mypost')->with('success', 'Your Product has been successfully deleted');
    }
}
