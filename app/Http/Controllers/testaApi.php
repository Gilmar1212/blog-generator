<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;

class testaApi extends Controller
{
    public function consomeApi(){
        $apiUrl = "http://127.0.0.1:8000/api-dados";
            $client = new Client();
            $response = $client->get( $apiUrl);
            $data = json_decode($response->getBody(), true);
            try {
                $response = $request->send();
                // Se você deseja cancelar a requisição depois de obtê-la, use $response->cancel()
            } catch (RequestException $e) {
                // Se ocorrer um erro na requisição, você pode verificar se a requisição foi cancelada
                if ($e->getRequest()->isCanceled()) {
                    echo "Requisição cancelada!";
                } else {
                    echo "Erro na requisição: " . $e->getMessage();
                }
            }
            return view("user-area", ["data" => $data]);
    }
}
