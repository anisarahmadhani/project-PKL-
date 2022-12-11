<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function project()
    {

        //untuk data one to one
        return $this->belongsTo(Project::class) ;
    }
}
