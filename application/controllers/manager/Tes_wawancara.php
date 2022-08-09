<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tes_wawancara extends  Member_Controller{

    function __construct(){
		parent:: __construct();
		$this->load->model('cbt_user_model');
		$this->load->model('cbt_user_grup_model');
		$this->load->model('cbt_tes_model');
		$this->load->model('cbt_tes_token_model');
		$this->load->model('cbt_tes_topik_set_model');
		$this->load->model('cbt_tes_user_model');
		$this->load->model('cbt_tesgrup_model');
		$this->load->model('cbt_soal_model');
		$this->load->model('cbt_jawaban_model');
		$this->load->model('cbt_tes_soal_model');
		$this->load->model('cbt_tes_soal_jawaban_model');
		$this->load->model('cbt_tes_wawancara_model');
	}


    public function index(){
        $this->load->helper('form');
		$data['title'] = "Wawancara";

		$data['topik'] = $this->db->get('user_wawancara')->result_array();
		$data['user']	= $this->db->get('cbt_user')->result_array();
		$data['user_grup'] = $this->db->get('cbt_user_grup')->result_array();

        $this->template->display_admin('tes/tes_wawancara_view', 'Wawancara', $data);
        
    }
}