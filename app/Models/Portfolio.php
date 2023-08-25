<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Types;

use App\Models\Technology;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'link','description','back_ender', 'front_ender','ux','ui','illustrator','type_id','technology_id'];

    public function type(){
        return $this->belongsTo(Types::class);
    }

    //Definisco il tipo di relazione tra tabella portfolio e technologies
    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }


}

