<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;

    /**
     * Database table name
     *
     */
    protected $table = 'states';

    /**
     * Get the user that owns the phone.
     */
    public function cities()
    {
        return $this->hasMany(Cities::class, 'state_id', 'id');
    }
}
