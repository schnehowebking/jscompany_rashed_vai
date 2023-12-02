<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prospect extends Model
{
  use HasFactory;
  use Notifiable;
  protected $table = 'prospects';

  protected $guarded = [];

  // relationships with other models
  public function rd2Caller()
  {
    return $this->hasOne(Rd_2_Caller::class, 'prospect_id');
  }

  public function sales() {
    return $this->belongsTo(User::class, 'interlocutor_appointment');
  }

  public function landChargeInfo()
  {
    return $this->hasOne(LandChargeInfo::class);
  }

  public function householdResourceCapacity()
  {
    return $this->hasOne(HouseholdResourceCapacity::class);
  }

  public function householdDocument()
  {
    return $this->hasOne(HouseholdDuctment::class);
  }

  public function financingCondition()
  {
    return $this->hasOne(FinancingCondition::class);
  }

  public function projectFinancing()
  {
    return $this->hasOne(ProjectFinancing::class);
  }
}
