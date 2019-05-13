<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';
    protected $fillable = array('id_supplier','nm_supplier','kota_supplier','alamat_supplier','no_tlp_supplier');

    public function minuman() {
		return $this->hasMany('App\Minuman', 'id_supplier');
}
public function makanan() {
    return $this->hasMany('App\Makanan', 'id_supplier');
}
}