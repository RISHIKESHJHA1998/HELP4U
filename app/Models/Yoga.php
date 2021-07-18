<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yoga extends Model
{
    use HasFactory;

    protected $table = "yogas";

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'url',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
