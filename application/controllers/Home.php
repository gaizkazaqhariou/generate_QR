<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_m');
	}

	// public function index()
	// {
	// 	$data['property'] = $this->home_m->getDataProperty();

	// 	$this->load->view('template/header', $data);
	// 	$this->load->view('mainViews/homeListView');
	// 	$this->load->view('template/footer');
	// }

	public function index()
	{
		$data['data'] = $this->home_m->getData();
		$this->load->view('mainViews/FormQR', $data);	
	}

	public function tambah()
	{
		$this->form_validation->set_rules('name', 'name', array('required', 'min_length[1]', 'max_length[100]'));
		$this->form_validation->set_rules('cmember', 'cmember', 'required');

		// $path_to_file = './assets/image/'.$image_name;

        // if (file_exists($path_to_file)) {
        //     echo 'The file ' . $path_to_file . ' exists';
        // } else {
        //     echo 'The file ' . $path_to_file . ' does not exist';
        // }

		if ($this->form_validation->run() == FALSE) {
			$data['data'] = $this->home_m->getData();
			$this->load->view('mainViews/FormQR', $data);
		} else {
			$nama=$this->input->post('name');
	        $kode=$this->input->post('cmember');       
	 
	        $config['cacheable']    = true; //boolean, the default is true
	        $config['cachedir']     = './assets/'; //string, the default is application/cache/
	        $config['errorlog']     = './assets/'; //string, the default is application/logs/
	        $config['imagedir']     = './assets/images/'; //direktori penyimpanan qr code
	        $config['quality']      = true; //boolean, the default is true
	        $config['size']         = '1024'; //interger, the default is 1024
	        // $config['black']        = array(224,255,255); // array, default is array(255,255,255)
	        // $config['white']        = array(70,130,180); // array, default is array(0,0,0)
	        $this->ciqrcode->initialize($config);
	 
	        $image_name=$nama.'.png'; //buat name dari qr code sesuai dengan nim
	 
	        $params['data'] = $kode; //data yang akan di jadikan QR CODE
	        $params['level'] = 'H'; //H=High
	        $params['size'] = 10;
	        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
	        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
	 
	        $cek = $this->home_m->cekkode($kode);
	        if ($cek) {
	        	redirect('Home/index');
	        } else {
	        	$this->home_m->inputQR($nama, $kode, $image_name); //simpan ke database
	        	redirect('Home/index', 'refresh'); //redirect ke mahasiswa usai simpan data
	        }
		}		
	}

	public function lihatKartu($id)
	{
		$data['data'] = $this->home_m->getDatabyID($id);
		$this->load->view('mainViews/membercard', $data);	
	}

	public function print($id)
	{
		$data['data'] = $this->home_m->getDatabyID($id);
		// $mpdf = new \Mpdf\Mpdf();
		$mpdf = new \Mpdf\Mpdf(['format' => [450, 734]]);
		// $mpdf = new \Mpdf\Mpdf('utf-8', array(734,450));
		$html = $this->load->view('mainViews/membercard', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}

	public function coba()
	{
		$this->load->view('printTermal');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */