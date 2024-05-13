<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelJourney extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location'
    ];

    protected $hidden = [

    ];

    public function galleries(){
        return $this->hasMany( Gallery::class, 'travel_journey_id', 'id' );
    }

}
