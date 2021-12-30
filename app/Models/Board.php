<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $table = 'boards';

    //BoardController에서 store메소드 방법(2)(3)처럼 사용하려면 줘야 함.
    protected $fillable = ['title', 'ctnt', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
