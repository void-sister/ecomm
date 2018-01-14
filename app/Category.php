<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the items for the category.
     */
    public function items()
    {
        return $this->hasMany('App\Item');
    }

    /**
     * Get the sizes for the category.
     */
    public function sizes()
    {
        return $this->hasMany('App\Size');
    }
}