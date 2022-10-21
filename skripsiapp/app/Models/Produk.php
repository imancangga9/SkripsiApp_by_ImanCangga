<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'id_produk';

    // protected $table ='produks';
    protected $guarded = ['id_produk'];

    protected $table = "produks";
    protected $fillable = ["id_produk", "nama_produk", "slug",  "netto_produk", "status_produk", "id_brand", "updated_at", "`created_at"];
   
    public function brands()
    {
        return $this->belongsTo('App\Models\Brand', 'id_brand');
    }

    public function briefs()
    {
        return $this->hasOne('App\Models\Brief');
    }

    public function packagings()
    {
        return $this->hasOne('App\Models\Packaging');
    }
}
