<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    protected $table = 'imunisasi';
    
    protected $fillable = [
        'no_pemeriksaan_imunisasi',
		'tgl_imunisasi',
		'id_vaksinasi',
		'id_anak'
		];

	public function vaksinasi(){
        return $this->belongsTo('App\Puskesmas', 'id_vaksinasi');
    }
    
    public function anak(){
        return $this->belongsTo('App\Anak', 'id_anak');
    }
}
