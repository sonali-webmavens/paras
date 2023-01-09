<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Company extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = 'companies';
    protected $fillable = ['id','cnm','email','logo','website'];

    public function employe()
    {
            return $this->belongsToMany(App\Employe::class);
    }
}

