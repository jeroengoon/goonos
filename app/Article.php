<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filters\ProductFilter;
use Illuminate\Database\Eloquent\Builder;

class Article extends Model
{
        // table name
    

        //voor als je database een andere naam heeft dan je model
        protected $table = 'articles';
    
        //primary key
        public $primaryKey = 'id';
        //Timestamps
        public $timestamps = true;

        protected $fillable = [
            'user_id','title', 'description', 
         ];

         public function articles()
         {
             return $this->belongsToMany(Article::class, 'article_categories');
         }


}
