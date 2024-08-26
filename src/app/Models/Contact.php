<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tell',
        'address',
        'detail'
    ];

    static $genders = [
		'男', '女', 'その他'
	];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
