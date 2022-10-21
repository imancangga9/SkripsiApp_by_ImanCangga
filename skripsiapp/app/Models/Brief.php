<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'id_brief';    

    protected $table = 'briefs';
    protected $guarded = ['id_brief'];
    protected $fillable = ['id_brief', 'detail_brief', 'slug',  'file_brief', 'banchmark', 'status_brief', 'id_produk', 'updated_at', 'created_at'];
   

    public function produks()
    {
        return $this->belongsTo('App\Models\Produk');
    }
}
