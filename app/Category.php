<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';



    /**
     * Get the items of the category.
     */
    public function items()
    {
        return $this->hasMany('App\Item');
    }

    /**
     * Get the sizes of each category.
     */
    public function sizes()
    {
        return $this->hasMany('App\Size');
    }
}
