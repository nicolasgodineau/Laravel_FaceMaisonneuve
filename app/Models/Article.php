<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = "articles";

    protected $primaryKey = 'id';

    protected $hidden = [
        'created_at', 'updated_at',
        ];


    protected $fillable = ['id','title','body','user_id'];
}
