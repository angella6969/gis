<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class map_gis extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function penerima()
    {
        return $this->belongsTo(penerima::class);
    }
}
