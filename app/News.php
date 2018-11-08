<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    public function getall(){
        $news = News::all(); //Thực hiện câu lệnh sql lấy toàn bộ dữ liệu.
        return $news;
    }

    public $timestamps = false;
}
