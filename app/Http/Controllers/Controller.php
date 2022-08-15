<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    public function successWithData($data) {
        return response([
            'msg' => 'Berhasil memuat permintaan',
            'status' => true,
            'code' => 200,
            'result' => $data
        ]);
    }
}