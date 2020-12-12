<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Person;

class HelloController extends Controller
{
    public function index()
    {
        $sample_msg = config('sample.message');
        $sample_data = config('sample.data');
        $data = [
            'msg' => $sample_msg,
            'data' => $sample_data,
        ];
        return view('hello.index', $data);
    }
    function __construct()
    {
        config(['sample.message'=>'新しいメッセージ!']);
    }
}