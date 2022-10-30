<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    protected $primaryKey = 'id_brand';

    use SoftDeletes;

    protected $guarded = ['id_brand'];

    protected $table = 'brands';
    
    protected $fillable = ['id_brand', 'nama_brand', 'slug', 'updated_at', 'created_at'];


    public function produks()
    {
        return $this->hasMany('App\Models\Produk', 'id_produk');
    }
}
