<?php

namespace App\Http\Controllers;
use App\Models\Ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ebooks = Ebook::all();
        return view ('ebooks.index')->with('ebooks', $ebooks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ebooks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_title'=>'required',
            'author'=>'required',
            'description'=>'required'
        ]);

        $input = $request->all();
        Ebook::create($input);
        return redirect('ebook')->with('flash_message', 'Ebook Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ebook = Ebook::find($id);
        return view('ebooks.show')->with('ebooks', $ebook);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ebook = Ebook::find($id);
        return view('ebooks.edit')->with('ebooks', $ebook);
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
        $ebook = Ebook::find($id);
        $input = $request->all();
        $ebook->update($input);
        return redirect('ebook')->with('flash_message', 'Ebook Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ebook::destroy($id);
        return redirect('ebook')->with('flash_message', 'Student deleted!');  
    }
}
