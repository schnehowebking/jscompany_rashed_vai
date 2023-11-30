<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
  use HasFactory;

  protected $table = 'prospects';

  protected $fillable = [
    'name',
    'first_name',
    'genre',
    'telephone_prospect_1',
    'desired_work',
    'desired_house_type',
    'has_land',
    'land_municipality',
    'land_document_requested',
    'desired_municipality',
    'desired_surface',
    'financial_simulation',
    'simulation_amount',
    'simulation_bank',
    'simulation_broker',
    'desired_rd1_date',
    'desired_rd1_time',
    'how_know_company',
    'how_know_company_details',
    'interlocutor_appointment',
    'exchange_validated_by',
    'assignment_prospect_rd1_validation',
  ];
}
