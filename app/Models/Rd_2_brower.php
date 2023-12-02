<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rd_2_brower extends Model
{
  use HasFactory;
  protected $guarded = [];

  public function rd2Caller()
  {
    return $this->belongsTo(Rd_2_Caller::class, 'rd_2_caller_id');
  }
}
