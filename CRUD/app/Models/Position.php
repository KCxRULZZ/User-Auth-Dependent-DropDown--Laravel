<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    // Fields that can be mass-assigned
    protected $fillable = ['name'];

    /**
     * Define the relationship with the Member model.
     */
    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
