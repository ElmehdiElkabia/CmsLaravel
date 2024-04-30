<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'title', 'description', 'user_id'];

    /**
     * Get the user that owns the home.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
