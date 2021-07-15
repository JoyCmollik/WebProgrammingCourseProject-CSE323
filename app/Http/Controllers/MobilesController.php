<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Mobile; // including Model to send the data into view using this model Mobile

class MobilesController extends Controller
{
   
    public function index()
    {
        $mobiles = Mobile::latest()->paginate(5);

        return view('mobiles.index', [
            'mobiles' => $mobiles
        ]);
    }

    public function create()
    {
        return view('mobiles.create');
    }


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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $mobile = Mobile::find($id); // the find method will return the collection of data, but we need individual data to be sent, so we use first() to only send one specific data and don't need to use loop
        return view('mobiles.edit')->with('mobile', $mobile); // we don't want to pass it as an array, so we use with method
    }

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

    public function destroy(Mobile $mobile)
    {
        $mobile->delete();
        
        return redirect('/mobiles');
    }
}
