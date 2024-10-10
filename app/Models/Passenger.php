<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    use HasFactory;

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
    

}
