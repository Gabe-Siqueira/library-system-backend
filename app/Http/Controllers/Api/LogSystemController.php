<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LibraryController;
use App\Models\LogErros;
use Exception;
use Illuminate\Http\Request;

class LogSystemController extends Controller
{

    public function recorderror(Request $request)
    {
        $me = auth('api')->user();
        $request->merge([
            'id_user' => $me->id
        ]);
        $logErros = new LogErros();
        $logErros->fill($request->all());
        $logErros->save();
    }
}
