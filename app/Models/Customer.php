<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function application() {
      return $this->belongsTo(Application::class);
    }

    public function user() {
      return $this->belongsTo(User::class);
    }

    public function signer() {
      return $this->hasOne(Customer::class, 'signer_id');
    }

    public function signerCustomer() {
      return $this->belongsTo(Customer::class, 'signer_id');
    }

}
