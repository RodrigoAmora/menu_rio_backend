<?php
namespace App\Http\Services;

class Service {

	public function consultarCoordenatasNoGooglePlace($endereco) {
		$googlePlaceAPI = "https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=rua dos invalidos 198&inputtype=textquery&fields=formatted_address,name,geometry&key=".env("GOOGLE_API_KEY");

		return $googlePlaceAPI;
	}
}

