<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;


class Invoice extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'amount', 'status', 'invoice_number', 'customer_email'
    ];

    public const DRAFT = 'draft';
    public const OUTSTANDING = 'outstanding';
    public const PAID = 'paid';
    public const PAST_DUE = 'past-due';

    public const STATUS = [
        self::DRAFT,
        self::OUTSTANDING,
        self::PAID,
        self::PAST_DUE,
    ];

    protected function amountWithCurrency(): Attribute
    {
        return Attribute::make(
            get: fn () => "$" . $this->amount . " USD",
        );
    }

    public function users(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

}
