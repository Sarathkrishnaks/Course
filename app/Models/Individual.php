<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    use HasFactory;

    public function id_card()
    {
        return $this->hasOne(id_cards::class);
    }
public function gear()
{
    return $this->belongsTo(Gear::class);
}
public function sport()
{
    return $this->belongsToMany(Sport::class);
}
}
