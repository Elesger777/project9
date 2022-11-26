<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\testRequest;

use App\Models\test;

class testController extends Controller
{
    public function daxilet(testRequest $post)
    {
        $con = new test();

        $con->ad = $post->ad;
        $con->soyad = $post->soyad;

        $con->save();

        return redirect()->route('test')->with('mesaj', 'Ad ve soyad ugurla bazaya elave edildi!');
    }

    public function siyahi()
    {
        $tsay = test::count();

        return view('test', [
            'data'=>test::orderBy('id', 'desc')->get(),
            'tsay'=>$tsay
        ]);
    }

    public function sil($id)
    {
        $tsay = test::count();

        return view('test', [
            'data'=>test::orderBy('id', 'desc')->get(),
            'tsay'=>$tsay,
            'sil_id'=>$id
        ]);
    }

    public function delete($id)
    {
        test::find($id)->delete();

        return redirect()->route('test')->with('mesaj', 'Ad ve soyad ugurla silindi!');
    }

}
