<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['item_name', 'item_price', 'category_id'];



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
    public function category()
    {
        return $this->belongsTo('App\Category')->withDefault();
    }
}
