<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'Ds_Date',
        'Ds_Hour',
        'Ds_SecurePayment',
        'Ds_Amount',
        'Ds_Currency',
        'Ds_Order',
        'Ds_MerchantCode',
        'Ds_Terminal',
        'Ds_Response',
        'Ds_TransactionType',
        'Ds_MerchantData',
        'Ds_AuthorisationCode',
        'Ds_ConsumerLanguage',
        'Ds_Card_Country',
        'Ds_Card_Brand',
        'Ds_ProcessedPayMethod'
    ];

    protected $hidden = [];

}
