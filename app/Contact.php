<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
                    //voor als je database een andere naam heeft dan je model
                    protected $table = 'contacts';
    
                    //primary key
                    public $primaryKey = 'contact_id';
                    //Timestamps
                    public $timestamps = true;
        
        
        
        

}
