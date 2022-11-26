<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\test2Request;

use App\Models\test2;

class test2Controller extends Controller
{
    public function daxilet2(test2Request $post)
    {
        $con = new test2();

        $con->ish = $post->ish;

        $con->save();

        return redirect()->route('test2')->with('mesaj', 'Qeydiyyat ugurla bazaya elave olundu!');
    }

    public function siyahi2()
    {
        $tsay2 = test2::count();
        
        return view('test2', [
            'data'=>test2::orderBy('id', 'desc')->get(),
            'tsay2'=>$tsay2
    ]);
    }
}
