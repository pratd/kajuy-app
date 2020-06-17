<?php
namespace App\Util;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
class Api{

    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function all($method, $endpoint, $token){
        return $this->endpointRequest($method, $endpoint, null, $token);
    }

    public function findBy($method, $endpoint, $request, $token )
    {
        return $this->endpointRequest($method, $endpoint, $request, $token);
    }
    public function endpointRequest($method, $url, $request, $token)
    {
        try{
            switch ($method)
            {
                case "GET":
                    $response = Http::get($this->client.$url, $request);
                break;
                case "POST":
                    $response = Http::withToken($token)->post($this->client.$url, $request);
                break;
                case "PUT":
                    $response = Http::withToken($token)->put($this->client.$url, $request);
                break;
                case "DELETE":
                    $response = Http::withToken($token)->delete($this->client.$url, $request);
                break;

            }
        } catch(\Exception $e){
            return $e;
        }
        return ['status'=>$this->response_handler($response),'response'=>$response->json()];
    }

    public function response_handler($response)
    {
        if($response){
            return $response->successful();
        }
        return [];
    }
}
?>
