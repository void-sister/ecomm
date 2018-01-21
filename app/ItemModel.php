<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemModel extends Model
{
    protected $table = 'models';
    public $timestamps = false;

    /**
     * Get the item of the item_model.
     */
    public function item()
    {
        return $this->belongsTo('App\Item')->withDefault();
    }
}
