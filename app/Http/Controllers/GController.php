<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

//
class GController extends Controller {
	//
	public function Gteste() {
		$client = new Client(); //GuzzleHttp\Client
		$result = $client->post('your-request-uri', [
			'form_params' => [
				'sample-form-data' => 'value',
			],
		]);
	}

	public function Guzzle() {
		$client = new Client();
		$results = $client->get('http://scorehmws.guep.com.br/guepsoap/autenticar/autenticacao.php?wsdl');

		$options = [
			'ativarTokenRequest' => [
				'loginUser' => '',
				'senhaUser' => '@',
				'codigoUser' => '',
			],
		];
		print_r($options);

		$retornoAuth = $results->call('GuepWs.ativarToken', $options);

		print_r($retornoAuth);

		dd($results->getBody());
		dd($response);

		return view('hello');
	}
}
