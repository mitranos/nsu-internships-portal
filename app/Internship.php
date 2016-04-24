<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'term', 'major', 'agency', 'agency_address', 'agency_website', 'supervisor', 
        'supervisor_phone', 'supervisor_email', 'offer_letter', 'job_description',
    ];

    public function student()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function internship_status()
    {
        return $this->hasOne('App\Status', 'id', 'status');
    }
}
