<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anak extends Model
{
    //
    protected $table = 'anaks';
    protected $fiillable = ['nama','orangtua_id','umur_ibu','umur_ayah','alamat'];
    protected $visible = ['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    public $timestamps = 'true';

    public function anak()
    {
    	return $this->hasMany('App\anak','orangtua_id');
    }
}
