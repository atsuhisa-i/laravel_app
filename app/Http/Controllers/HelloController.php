<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use App\Models\Person;
use Illuminate\Support\Facades\Storage;
use App\MyClasses\MyService;

class HelloController extends Controller
{
    private $fname;

    public function __construct()
    {
        $this->fname = 'hello.txt';
    }

    public function index(int $id = -1)
    {
        $myservice = app()->makeWith('App\MyClasses\MyService',
            ['id' => $id]);
        $data = [
            'msg' => $myservice->say($id),
            'data' => $myservice->alldata()
        ];
        return view('hello.index', $data);
    }

    public function other()
    {
        $data = [
            'name' => 'Taro',
            'mail' => 'taro@yamada',
            'tel' => '090-999-999',
        ];
        $query_str = http_build_query($data);
        $data['msg'] = $query_str;
        return redirect()->route('hello', $data);
    }
}