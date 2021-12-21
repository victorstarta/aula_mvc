<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;

    /**
     * Database table name
     *
     */
    protected $table = 'cities';

    /**
     * Get the user that owns the phone.
     */
    public function state()
    {
        return $this->hasOne(States::class, 'id', 'state_id');
    }
}