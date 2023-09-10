<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['model', 'color', 'age', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}