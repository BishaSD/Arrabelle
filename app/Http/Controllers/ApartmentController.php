<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
  public function index()
    {
        return Apartments::all();
    }

    public function show($id)
    {
        return Apartments::find($id);
    }

    public function store(Request $request)
    {
        return Apartments::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Apartments::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Apartments::findOrFail($id);
        $article->delete();

        return 204;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Apartments::latest()->paginate(5);

        return view('apartments.index',compact('apartment'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('apartments.create');
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
        $request->validate([
            'title' => 'required',
            'region' => 'required',
            'location' => 'required',
            'room' => 'required',
            'guest' => 'required',
            'price' => 'required',
            'details' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('apartments.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartments  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartments  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apartments  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartments $apartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartments  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartments $apartment)
    {
        //
    }
}
