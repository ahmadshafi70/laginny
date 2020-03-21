<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable=['product_id',
    		'product_title',
    		'product_price',
    		'customer_name',
    		'cutomer_email',
    		'customer_phone',
    		'customer_address',
    		'customer_country',
    		'customer_message',
    		'status',
            'qty',
            'total_price',
];
}