<?php

class SchedulerService {

	protected $endpoint = 'http://booknow.brianjacobsgolf.com/api/';
	protected $verify_ssl = false;

	public function __construct()
	{
		if (Request::env() == 'local')
		{
			$this->endpoint = 'http://localhost/bjga/scheduler/public/api/';
		}
	}

	public function getServicesByCategory($name)
	{
		return $this->makeRequest('services/category/'.$name);
	}

	public function getServicesByName($name)
	{
		return $this->makeRequest('services/name/'.$name);
	}

	public function getServices()
	{
		return $this->makeRequest('services');
	}

	protected function makeRequest($method, array $args = array())
	{
		// Start building the URL
		$url = $this->endpoint.$method;

		//dd($url);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Accept: application/vnd.example.v1+json'
		));
		curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');       
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		//curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->verify_ssl);
		//curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($args));

		$result = curl_exec($ch);
		curl_close($ch);

		return $result ? json_decode($result, true) : false;
	}

}