<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = [
        'user_id',
        'phone',
        'email',
        'info'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }
}
