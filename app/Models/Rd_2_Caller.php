<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rd_2_Caller extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function prospect()
  {
    return $this->belongsTo(Prospect::class, 'prospect_id');
  }
  public function rd2brower()
  {
    return $this->hasOne(Rd_2_brower::class);
  }
}
