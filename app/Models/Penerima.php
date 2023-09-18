<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function scopeFilter($query, array $Filters)
    {
        $query->when($Filters['search'] ?? false, function ($query, $search) {
            return $query->where('DaerahIrigasi', 'LIKE', '%' . strtolower($search) . '%');
        });
    }
    public function progres()
    {
        return $this->hasMany(Progres::class);
    }
    public function daerahIrigasi()
    {
        return $this->belongsTo(DaerahIrigasi::class);
    }
}
