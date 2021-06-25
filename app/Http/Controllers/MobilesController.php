<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Mobile; // including Model to send the data into view using this model Mobile

class MobilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobiles = Mobile::paginate(5);

        return view('mobiles.index', [
            'mobiles' => $mobiles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobiles.create');
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
            'brand' => 'required',
            'model' => 'required',
            'processor' => 'required',
            'ram' => 'required | integer',
            'rom' => 'required | integer',
            'gpu' => 'required',
            'display' => 'required',
            'price' => 'required | integer' 
        ]);


        $mobile = Mobile::create([
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'processor' => $request->input('processor'),
            'ram' => $request->input('ram'),
            'rom' => $request->input('rom'),
            'gpu' => $request->input('gpu'),
            'display' => $request->input('display'),
            'price' => $request->input('price')
        ]);

        return redirect('/mobiles');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobile = Mobile::find($id)->first(); // the find method will return the collection of datas, but we need individual data to be sent, so we use first() to only send one specific data and don't need to use loop
        return view('mobiles.edit')->with('mobile', $mobile); // we don't want to pass it as an array, so we use with method
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
        $mobile = Mobile::where('id', $id)
            ->update([
                'brand' => $request->input('brand'),
                'model' => $request->input('model'),
                'processor' => $request->input('processor'),
                'ram' => $request->input('ram'),
                'rom' => $request->input('rom'),
                'gpu' => $request->input('gpu'),
                'display' => $request->input('display'),
                'price' => $request->input('price')
        ]);
        
        return redirect('/mobiles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobile = Mobile::find($id)->first();
        $mobile->delete();
        
        return redirect('/mobiles');
    }
}
