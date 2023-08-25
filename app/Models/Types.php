<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//importo la tabella ( che nel db si chiama portfolios)
use App\App\Models\Portfolio;

class Types extends Model
{
    use HasFactory;
    protected $fillable = ['category','mobile','tablet','pc','smart_tv','android','ios','windows','mac','linux','age_protection'];

    //Types ha relazione uno a molti con Portfolio
    public function portfolios(){
        return $this->hasMany(Portfolio::class);
    }
}
