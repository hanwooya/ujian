<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tes_wawancara extends  Member_Controller
{

	function __construct()
	{
		parent::__construct();
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


	public function index()
	{
		$this->load->helper('form');
		$data['title'] = "Wawancara";

		$data['topik'] = $this->db->get('user_wawancara')->result_array();
		$data['user_grup'] = $this->db->get('cbt_user_grup')->result_array();

		if ($this->input->post('batch') == 1) {
			if ($this->input->post('pilih-group')) {
				$query = "SELECT a.user_firstname, a.user_id, sum(b.tessoal_nilai) as nilai FROM `cbt_tes_soal` b join cbt_user a on b.tessoal_tesuser_id = a.user_id where a.user_grup_id = " . $this->input->post('pilih-group') . " group by b.tessoal_tesuser_id HAVING SUM(b.tessoal_nilai) >= 70";
				$data['user']	= $this->db->query($query)->result_array();
				$data['batch'] = $this->db->get_where('cbt_user_grup', ['grup_id' => $this->input->post('pilih-group')])->row_array();
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">SIlahkan pilih grup terlebih dahulu!</div>');
			}
		} elseif ($this->input->post('batch') == 2) {

			$this->form_validation->set_rules('is_pass_1', 'Opsi Pertama', 'required');
			$this->form_validation->set_rules('is_pass_2', 'Opsi Kedua', 'required');
			$this->form_validation->set_rules('is_pass_3', 'Opsi Ketiga', 'required');
			$this->form_validation->set_rules('pilih-user', 'User', 'required');

			$a = $this->input->post('is_pass_1');
			$b = $this->input->post('is_pass_2');
			$c = $this->input->post('is_pass_3');

			if ($a == 1 && $b == 1) {
				$lulus = 'lulus';
			} elseif ($b == 1 && $c == 1) {
				$lulus = 'lulus';
			} elseif ($a == 1 && $c == 1) {
				$lulus = 'lulus';
			} else {
				$lulus = 'Tidak Lulus';
			}

			if ($this->form_validation->run() == true) {
				$insert = [
					'status_1' => $this->input->post('is_pass_1'),
					'status_2' => $this->input->post('is_pass_2'),
					'status_3' => $this->input->post('is_pass_3'),
					'cbt_user_id'	 => $this->input->post('pilih-user'),
					'lulus' => $lulus
				];
				$this->db->insert('cbt_wawancara', $insert);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tersimpan</div>');
			} else {
				if ($this->input->post('pilih-groups')) {
					$query = "SELECT a.user_firstname, a.user_id, sum(b.tessoal_nilai) as nilai FROM `cbt_tes_soal` b join cbt_user a on b.tessoal_tesuser_id = a.user_id where a.user_grup_id = " . $this->input->post('pilih-groups') . " group by b.tessoal_tesuser_id HAVING SUM(b.tessoal_nilai) >= 70";
					$data['user']	= $this->db->query($query)->result_array();
					$data['batch'] = $this->db->get_where('cbt_user_grup', ['grup_id' => $this->input->post('pilih-groups')])->row_array();
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">SIlahkan pilih grup terlebih dahulu!</div>');
				}
			}
		}
		$this->template->display_admin('tes/tes_wawancara_view', 'Wawancara', $data);
	}
}
