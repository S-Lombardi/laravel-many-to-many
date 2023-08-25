<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = ['tech_name'];
    
    public function portfolios(){
        return $this->belongsToMany(Portfolio::class);
    }
}
