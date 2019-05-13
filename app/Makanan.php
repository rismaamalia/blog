<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $table = 'makanan';
    protected $fillable = array('id_supplier','nm_makanan','harga_makanan','stok_makanan');
    public function supplier(){
        return $this->belongsTo('App\Supplier','id_supplier');
}
}