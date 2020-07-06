<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\Model\admin\admin','admin_roles');
    }
}
