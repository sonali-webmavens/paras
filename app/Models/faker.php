<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faker extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = 'companies';
    protected $fillable = ['id','cnm','email','logo','website'];
}
