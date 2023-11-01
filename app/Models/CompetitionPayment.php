<?php

namespace App\Models;

use App\Models\PaymentProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompetitionPayment extends Model
{
    use HasFactory;
    protected $table = 'competition_payments';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function paymentProvider(){
        return $this->hasOne(PaymentProvider::class,'id','payment_provider_id');
    }
}
