<?php

namespace App\Http\Controllers\API;

use DB;
use App\Anak;
use DateTime;
use App\Vaksinasi;
use App\Imunisasi;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImunisasiApiController extends Controller
{
    public function getAll(){
        $datas = Imunisasi::with('vaksinasi', 'anak')->get();
        return response()->json($datas);
    }

    public function create(Request $request){
        $now          = date('Y-m-d');
        $countId      = Imunisasi::where('tgl_imunisasi', $now)->count();
        $increment    = $countId + 1;
        $id_imunisasi = 'I'.date('Ymd').'0000'.$increment;

        $data = [
            'no_pemeriksaan_imunisasi' => $id_imunisasi,
            'tgl_imunisasi'            => $now,
            'id_vaksinasi'             => $request->id_vaksinasi,
            'id_anak'                  => $request->id_anak
        ];
        
        $create = Imunisasi::create($data);

        if($create){
            return response()->json([
                'error'   => 0, 
                'message' => 'Data berhasil disimpan'
            ]);
        }else{
            return response()->json([
                'error'   => 1, 
                'message' => 'Data gagal disimpan'
            ]);
        }
    }

    public function show($id){
        $data = Imunisasi::with('vaksinasi', 'anak')
                    ->where('no_pemeriksaan_imunisasi', $id)
                    ->get();
        return response()->json($data);
    }

    public function update(Request $request, $id){
        $data = $request->only('id_vaksinasi', 'id_anak');
        $update = Imunisasi::where('no_pemeriksaan_imunisasi', $id)
                    ->update($data); 
        if($update){
            return response()->json([
                'error'   => 0, 
                'message' => 'Data berhasil diubah'
            ]);
        }else{
            return response()->json([
                'error'   => 1, 
                'message' => 'Data gagal diubah'
            ]);
        }
    }
}
