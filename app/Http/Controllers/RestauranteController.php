<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Service;

class RestauranteController extends Controller {
    
    public function oi() {
    	$service = new Service;
    	return $service->consultarCoordenatasNoGooglePlace("Rua+amancio+bezerra+250+Iraja");
    }
}
