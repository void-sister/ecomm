<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{    
    /**
     * Get the models for the item.
     */
    public function models()
    {
        return $this->hasMany('App\ItemModel');
    }

    /**
     * Get the category of the item.
     */
    public function user()
    {
        return $this->belongsTo('App\Category')->withDefault();
    }
}
