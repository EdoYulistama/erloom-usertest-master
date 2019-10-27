<?php

namespace App\Http\Controllers;
use App\UserTest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct(usertest $usertests)
    {
        $this -> usertests =  $usertests;
    }
    public function index()
    {
        $data = $this->usertests->data();
        return view('index',
        [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        //LOGIC HERE

        $request->validate([
            'name'=>'required',
        ]);
        return $this->usertests->tambahdata($request->all());
    }

}
