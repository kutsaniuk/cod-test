<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$ip = $this->input->get('ip');

		$resp = null;

		if ($ip) {
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => 'http://ip-api.com/json/' . $ip
			));
			$resp = curl_exec($curl);
			curl_close($curl);
		}

		$this->load->view('country', array(
			'resp' => json_decode($resp),
			'ip' => $ip
		));
	}
}
