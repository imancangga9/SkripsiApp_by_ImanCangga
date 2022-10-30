<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Packaging extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'id_packaging';    

    protected $table = 'packagings';
    protected $guarded = ['id_packaging'];
    protected $fillable = ['id_packaging', 'jenis_packaging', 'slug',  'warna_packaging', 'status_packaging','foto_packaging', 'id_produk', 'updated_at', 'created_at'];
   
   
    public function produks()
    {
        return $this->belongsTo('App\Models\Produk', 'id_produk');
    }
}
