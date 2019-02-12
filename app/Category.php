<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
                //voor als je database een andere naam heeft dan je model
                protected $table = 'categories';
    
                //primary key
                public $primaryKey = 'id';
                //Timestamps
                public $timestamps = true;
    
    
    
    
                public function categories()
                {
                    return $this->belongsToMany(Categories::class, 'article_categories');
                }
    
    
}
