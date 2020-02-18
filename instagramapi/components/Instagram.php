<?php 

namespace Lucianoclemente\Instagramapi\Components;

use Cms\Classes\ComponentBase;
use Lucianoclemente\Instagramapi\Models\Settings;

use Lucianoclemente\Instagramapi\Classes;

class Instagram extends ComponentBase
{
	public $settings;	
	public $proxy;

	public function init() {
		
		$this->settings = Settings::instance();
	}
	
    public function componentDetails()
    {
        return [
            'name'        => 'Instagram',
            'description' => 'Instagram API class.'
        ];
    }	
	
	public function get_users_self() {
		
		$this->proxy = new Classes\Proxy($this->settings->access_token, $this->settings->client_id);
		
		$response = $this->proxy->get_users_self();
		
		return $response;
		
	}

	public function get_users_self_media_recent() {
		
		$this->proxy = new Classes\Proxy($this->settings->access_token, $this->settings->client_id);
		
		$response = $this->proxy->get_users_self_media_recent();
		
		return $response;
		
	}	
	
	public function get_tags_media_recent($tagname) {
		
		$this->proxy = new Classes\Proxy($this->settings->access_token, $this->settings->client_id);
		
		$response = $this->proxy->get_tags_media_recent($tagname);
		
		return $response;
		
	}

	
}