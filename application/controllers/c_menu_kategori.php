<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_menu_kategori extends CI_Controller
{

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
	public function ManualBrew()
	{
		$data['title'] = "Menu Kategori Manual Brew";
		$this->load->view('v_manualbrew', $data);
	}
	public function EspressoBased()
	{
		$data['title'] = "Menu Kategori Espresso Based";


		$this->load->view('v_espressobased', $data);
	}
	public function CoffeeFlavour()
	{
		$data['title'] = "Menu Kategori Coffee Flavour";

		$this->load->view('v_coffeeflavour', $data);
	}
	public function DimsumKukus()
	{
		$data['title'] = "Menu Kategori Dimsum Kukus";

		$this->load->view('v_dimsumkukus', $data);
	}

	public function meal()
	{
		$data['title'] = "Menu Kategori Meal";

		$this->load->view('v_meal', $data);
	}

	public function MilkBased()
	{
		$data['title'] = "Menu Kategori Milk Base";

		$this->load->view('v_milkbase', $data);
	}
}
