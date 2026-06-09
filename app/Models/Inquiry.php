<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Inquiry Model
 *
 * Stores contact form submissions from the website.
 *
 * @property int    $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string|null $service
 * @property string $message
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'service',
        'message',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
