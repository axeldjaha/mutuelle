<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function storeDefault($model)
    {
        $model->update([
            "active" => 1,
            "version" => 1,
            "creation_date" => Carbon::now(),
            "creation_hostname" => substr(exec('getmac'), 0, 17),
            //todo "creation_username" => Auth::user()->name,
            //todo "utilisateur_creation_id" => Auth::user()->id,
        ]);
    }

    public static function updateDefault($model)
    {
        $model->update([
            "version" => $model->version + 1,
            "modification_date" => Carbon::now(),
            "modification_hostname" => substr(exec('getmac'), 0, 17),
            //todo "modification_username" => Auth::user()->name,
            //todo "utilisateur_modification_id" => Auth::user()->id,
        ]);
    }
}
