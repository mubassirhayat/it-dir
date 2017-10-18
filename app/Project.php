<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'adp_no', 'description', 'start_date', 'end_date', 'cost', 'hr_cost',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
    ];

    // Project::where('user_id', $userId)->get();
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
