<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "comments";

    protected $fillable = [
        'comment',
        'help_id',
        'user_id',
    ];

    public function help()
    {
        return $this->belongsTo(Help::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
