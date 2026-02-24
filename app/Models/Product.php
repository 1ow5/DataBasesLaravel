<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['title','price','discription','category_id','path_img'];//что разрешено заполнять

    //public $guarded = ['']; что запрещено заполнять
}
