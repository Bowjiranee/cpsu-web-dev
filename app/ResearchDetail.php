<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchDetail extends Model
{
    protected $table = 'research_details';
    public $primaryKey = 'id';
    public $tiamstamps = true;

    // public function user() {
    //     // return $this->belongsToMany('App\ResearchOwner', 'research_owner', 'research_id', 'teacher_id');
    //     return $this->belongsToMany('App\User');
    // }
}
