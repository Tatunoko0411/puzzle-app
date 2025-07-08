<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{

    public function cells()
    {
        return $this->belongsToMany(ObjectType::class,
            'stage_cells',
            'stage_id',
            'object_id')->withPivot('x', 'y', 'id');
        //  return $this->hasMany(StageCell::class);
    }
}
