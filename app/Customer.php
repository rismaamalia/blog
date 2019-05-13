<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
  protected $table = 'customer';
	protected $fillable = array('nm_customer','alamat_customer','kota','no_tlp','email');
        
  
}
