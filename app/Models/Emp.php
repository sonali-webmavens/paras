<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;
    // use Illuminate\Foundation\Auth\User as Authenticatable;
    // use Illuminate\Notifications\Notifiable;
    protected $guard = 'emp';
    protected $table='emps';
    protected $fillable=['fname','lname','company','email','phone'];
}
