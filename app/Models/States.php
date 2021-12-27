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
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'abbreviation'
    ];

    /**
     * Get the user that owns the phone.
     */
    public function cities()
    {
        return $this->hasMany(Cities::class, 'state_id', 'id');
    }
}
