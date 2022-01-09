<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Checkout extends Model
{
    use HasFactory;

    // non midtrans
    // protected $fillable = ['user_id', 'camp_id', 'card_number', 'expired', 'cvc', 'is_paid'];

    // use midtrans
    protected $fillable = ['user_id', 'camp_id', 'payment_status', 'midtrans_url', 'midtrans_booking_code'];

    // non midtrans
    // public function setExpiredAttribute($value)
    // {
    //     $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    // }


    /**
     * Get the Camp that owns the Checkout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Camp(): BelongsTo
    {
        return $this->belongsTo(Camp::class);
    }


    /**
     * Get the User that owns the Checkout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
