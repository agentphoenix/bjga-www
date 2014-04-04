<?php

class BombBombService {

	protected $apiKey;
	protected $endpoint = 'https://app.bombbomb.com/app/api/api.php';
	protected $verify_ssl = false;

	public function __construct()
	{
		$this->apiKey	= '9f718574-6a67-356f-c0d0-0997a8a94210';
	}

	public function addContact(array $data)
	{
		return $this->makeRequest('AddContact', $data);
	}

	public function getListContacts($listId)
	{
		return $this->makeRequest('GetListContacts', array('list_id' => $listId));
	}

	public function isValidLogin()
	{
		return $this->makeRequest('IsValidLogin');
	}

	public function lists()
	{
		return $this->makeRequest('GetLists');
	}

	protected function makeRequest($method, array $args = array())
	{
		// Grab the API key
		$args['api_key'] = $this->apiKey;

		// Start building the URL
		$url = $this->endpoint.'?method='.$method;

		// Loop through the arguments and build the output
		foreach ($args as $key => $value)
		{
			$output[] = "{$key}={$value}";
		}

		// Finish building the URL
		$url.= '&'.implode('&', $output);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');       
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->verify_ssl);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($args));

		$result = curl_exec($ch);
		curl_close($ch);

		return $result ? json_decode($result, true) : false;
	}

}