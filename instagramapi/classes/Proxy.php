<?php 

namespace Lucianoclemente\Instagramapi\Classes;

use October\Rain\Network\Http;
use Illuminate\Http\JsonResponse;

class Proxy {
	
	protected $api_url = 'https://api.instagram.com/v1';
	
	protected $client = null;
	
	protected $access_token = null;
    protected $client_id = null;
	
    public function __construct( $access_token = null, $client_id = null) {
		$this->client = new Http;
		
        $this->access_token = $access_token;
        $this->client_id = $client_id;
    }
	
	public function get_users_self() {
		
		$response = $this->apiCall(
            'get',
            sprintf( '%s/users/self/?access_token=%s', $this->api_url, $this->access_token ) 
        );
		
        return $response;
		
	}
	
	public function get_users_self_media_recent() {
		
		$response = $this->apiCall(
            'get',
            sprintf( '%s/users/self/media/recent/?access_token=%s', $this->api_url, $this->access_token ) 
        );
		
        return $response;
		
	}
	
	public function get_tags_media_recent($tagname) {
		
		$response = $this->apiCall(
            'get',
            sprintf( '%s/tags/' . $tagname . '/media/recent/?access_token=%s', $this->api_url, $this->access_token ) 
        );
		
        return $response;		
		
	}

    private function apiCall( $method, $url, array $params = null, $throw_exception = true ){
		
		$response = $this->client->$method(
		  $url,
		 array(
                'access_token'  => $this->access_token,
                'client_id'     => $this->client_id
            ) + (array) $params
		
		
		);
		
		$object = json_decode($response, true);
		
		return $object["data"];
		
    }
	
	
}