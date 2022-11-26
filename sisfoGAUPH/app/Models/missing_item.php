<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class missing_item extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'missing_items';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['item_code', 'title', 'category_id', 'location_id', 'description', 'missing_item_status', 'img_url', 'taken_at', 'taken_by'];

    
}
