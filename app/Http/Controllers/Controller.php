<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function  validateAccessRole($module){
    	$this->middleware("can:index-${module}", ['only' => ['index']]);
        $this->middleware("can:create-${module}", ['only' => ['create', 'store']]);
        $this->middleware("can:edit-${module}", ['only' => ['update', 'edit']]);
        $this->middleware("can:delete-${module}", ['only' => ['delete']]);
    }
}
