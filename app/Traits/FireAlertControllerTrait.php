<?php

namespace App\Traits;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

trait FireAlertControllerTrait {

    public function alert() {
    	return $this->data();
    }

}
