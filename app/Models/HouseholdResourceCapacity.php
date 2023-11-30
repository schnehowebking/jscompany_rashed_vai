<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseholdResourceCapacity extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function prospect()
    {
        return $this->belongsTo(Prospect::class);
    }
}
