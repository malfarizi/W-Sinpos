<?php

namespace App\Http\Controllers\API;

use App\Anak;
use App\Keluarga;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnakApiController extends Controller
{
    public function getAll(){
        $datas = Anak::all();
        return response()->json($datas);
    }

    public function create(Request $request){
        $data_anak = [ 
            'nik'         => $request->nik,
            'nama_anak'   => $request->nama_anak,
            'tgl_lahir'   => $request->tgl_lahir,
            'jk'          => $request->jk,
            'anak_ke'     => $request->anak_ke, 
            'bb_lahir'    => $request->bb_lahir ,
            'pb_lahir'    => $request->pb_lahir,
            'kia'         => $request->kia,
            'imd'         => $request->imd,
            'no_kk'       => $request->no_kk,
            'id_posyandu' => $request->id_posyandu
        ];

        $data_keluarga = [ 
            'no_kk'          => $request->no_kk,
            'nik_ayah'       => $request->nik_ayah,
            'nik_ibu'        => $request->nik_ibu,
            'nama_ayah'      => $request->nama_ayah,
            'nama_ibu'       => $request->nama_ibu,
            'no_telp'        => $request->no_telp,
            'status_ekonomi' => $request->status_ekonomi,
            'alamat'         => $request->alamat,
            'id_desa'        => $request->id_desa
        ];
        
        $create_keluarga = Keluarga::create($data_keluarga);
        $create_anak     = Anak::create($data_anak);
        
        if($create_anak && $create_keluarga){
            return response()->json([
                $data_anak, 
                $data_keluarga
            ]);
        }
    }

    public function update(Request $request, $id){
        $data_anak = [ 
            'nik'         => $request->nik,
            'nama_anak'   => $request->nama_anak,
            'tgl_lahir'   => $request->tgl_lahir,
            'jk'          => $request->jk,
            'anak_ke'     => $request->anak_ke, 
            'bb_lahir'    => $request->bb_lahir ,
            'pp_lahir'    => $request->pb_lahir,
            'kia'         => $request->kia,
            'imd'         => $request->imd,
            'no_kk'       => $request->no_kk,
            'id_posyandu' => $request->id_posyandu
        ];

        $data_keluarga = [ 
            'no_kk'          => $request->no_kk,
            'nik_ayah'       => $request->nik_ayah,
            'nik_ibu'        => $request->nik_ibu,
            'nama_ayah'      => $request->nama_ayah,
            'nama_ibu'       => $request->nama_ibu,
            'no_telp'        => $request->no_telp,
            'status_ekonomi' => $request->status_ekonomi,
            'alamat'         => $request->alamat,
            'id_desa'        => $request->id_desa
        ];
        
        $update_anak     = Anak::create($data);
        $update_keluarga = Keluarga::create($data);
        
        if($update_anak && $update_keluarga){
            return response()->json([
                'error'   => 0, 
                'message' => 'Data berhasil diubah'
            ]);
        }
    }
}