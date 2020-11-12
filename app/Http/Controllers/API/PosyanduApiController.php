<?php

namespace App\Http\Controllers\API;

use App\Posyandu;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PosyanduApiController extends Controller
{
    public function getAll(){
        $datas = Posyandu::all();
        return response()->json($datas);
    }

    public function create(Request $request){
        $data   = $request->only('nama_posyandu', 'id_desa', 'id_puskesmas');
        $create = Posyandu::create($data);

        if($create){
            return response()->json([
                'error'   => 0, 
                'message' => 'Data berhasil disimpan'
            ]);
        }
    }

    public function update(Request $request, $id){
        $data   = $request->only('nama_posyandu', 'id_desa', 'id_puskesmas');
        $update = Posyandu::where('id_posyandu', $id)->update($data);
        
        if($update){
            return response()->json([
                'error'   => 0, 
                'message' => 'Data berhasil diubah'
            ]);
        }
    }
}