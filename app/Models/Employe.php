<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $table= 'employes';
    protected $fillable=['id','firstname','lastname','company_id','email','phone'];

    //many to many
    public function company()
    {
            return $this->belongsToMany(App\Company::class);
    }
}
