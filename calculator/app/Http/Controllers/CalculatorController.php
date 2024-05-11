<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function  index(Request $request){
        $firstnumber = $request->input('firstnumber');
        $secondnumber = $request->input('secondnumber');
        $operator = $request->input('operator');

        //
        $res = 0;
        if($operator == '+'){
            $res = $firstnumber + $secondnumber;
        }elseif ($operator == '-'){
            $res = $firstnumber - $secondnumber;
        }elseif ($operator == '*'){
            $res = $firstnumber * $secondnumber;
        }elseif ($operator == '/'){
            $res = $firstnumber / $secondnumber;
        }elseif ($operator == '/'){
            $res = $firstnumber % $secondnumber;
        }
        //echo $res;
        return redirect('/')->with('message','your ansver is:' .$res);
    }
}
