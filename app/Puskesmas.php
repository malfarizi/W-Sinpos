<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puskesmas extends Model
{
	protected $table = 'puskesmas';
	
	protected $primaryKey = 'id_puskesmas';

    protected $fillable = [
        'id_puskesmas',
		'nama_puskesmas',
		'alamat'
	];
}
