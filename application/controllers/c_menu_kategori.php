<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_menu_kategori extends CI_Controller {

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
		$data['title'] = "Menu Kategori Manual Brew";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/navigation');

		$this->load->view('v_manualbrew');
	}
	public function indexEB()
	{
		$data['title'] = "Menu Kategori Espresso Based";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/navigation');

		$this->load->view('v_espressobased');
	}
	public function indexCF()
	{
		$data['title'] = "Menu Kategori Coffee Flavour";
		$this->load->view('parts/header', $data);
		$this->load->view('parts/navigation');

		$this->load->view('v_coffeeflavour');
	}
}
