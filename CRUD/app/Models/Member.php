<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Fields that can be mass-assigned
    protected $fillable = ['city_id', 'name', 'position_id'];

    /**
     * Define the relationship with the City model.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Define the relationship with the Position model.
     */
    public function position()
    {
        return $this->belongsTo(\App\Models\Position::class);
    }

}
