<?php

namespace App\Models;
use App\Models\Car;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'surname', 'email', 'password'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}