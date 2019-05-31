<?php
namespace App\Services;

class Service {

	public function consultarCoordenatasNoGooglePlace($endereco) {
		$googlePlaceAPI = "https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=".$endereco."&inputtype=textquery&fields=formatted_address,name,geometry&key=".env("GOOGLE_API_KEY");

		$ch = curl_init();
		curl_setopt_array($ch,
			[CURLOPT_URL => $googlePlaceAPI,
			CURLOPT_POST => false]);
		$p = curl_exec($ch);
		$json = json_decode($p);
		curl_close($ch);

		
		return $json->candidates->formatted_address;//->geometry->location->lat;
	}
}

