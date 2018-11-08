<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class HuyController extends Controller
{
    public function index(){
        return 'Đây là trang chủ';
    }
    public function detail(){
        // return redirect()->route('user.detail');
        return 'Detail';
    }
    public function getviews(){
        $a=123;
        return view('test',compact('a'));
    }
    public function getdata(){
        $news = new News();
        $data =$news->getall();
        return view('test',compact('data'));
    }
    public function getLogin(){
        return view('auth.login');
    }
}
