<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Haversine;

class HomeController extends Controller
{
    public function index (){
        return view('home1');
    }

    public function haversine (){
        $haversine =  Haversine::where('id', 1)
                        ->first();

        return view('haversine', compact('haversine'));
    }

        public function updatehaversine(Request $request)
    {

        $data = Haversine::where('id', 1);
        $data->update(['latitude' => $request->latitude,'longitude' => $request->longitude,'distance' => $request->distance]);
       
        return redirect('home')->with('toast_success', 'Data Berhasil Tersimpan');

    }
}
