<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->_cek_login();
	}
	private function _cek_login()
	{
		if(!$this->session->userdata('user')){            
            redirect(base_url().'home');
        }
	}

	public function index()
	{
		$this->load->view('user/index');
	}

	/*Login  */
	function proses(){		
		if($_POST){
			$user = addslashes($_POST['user']);
			$pass = addslashes($_POST['pass']);			
			$temp = $this->model->GetUser("where user = '$user' and pass = '$pass'")->result_array();
			if($temp != NULL){
				$data = array(
					'user' => $temp[0]['user'],
					'pass' => $temp[0]['pass']
				);
				$this->session->set_userdata('loging',$data);
				session_start();
				$_SESSION['kcfinder_mati'] = false;				
				header('location:'.base_url().'user/');
			}else{
				header('location:'.base_url().'user/login/0');
			}
		}else{
			echo "salah pak";
		}
	}
	/*Batas login */

	function bagian($pes = -1){
		
		$data = array(
			'session' => $this->session->userdata('login'),
			'status' => 'baru',
			'bagian' => '',
			'id_bagian' => '',
			'pesan' => $pes,
			'label' => $this->model->Getbagian("order by id_bagian desc")->result_array(),
			'tampil' => $this->model->detail()
			);

		$this->load->view('user/bagian', $data);
	}

	function editbagian($kode = 0){
		
		
		$tampung = $this->model->Getbagian("where id_bagian = '$kode'")->result_array();
		$data = array(
			'status' => 'lama',
			'bagian' => $tampung[0]['bagian'],
			'id_bagian' => $tampung[0]['id_bagian'],
			'pesan' => "",
			'label' => $this->model->Getbagian("where id_bagian != '$kode' order by id_bagian desc")->result_array()
			);
		$this->load->view('user/bagian', $data);
	}

	function simpanbagian(){
		
		if($_POST){
			$status = $_POST['status'];
			$id_bagian = $_POST['id_bagian'];
			$bagian = $_POST['bagian'];
			if($status == "baru"){
				$data = array(
					'id_bagian' => $id_bagian,
					'bagian' => $bagian
					);
				$result = $this->model->Simpan('tb_bagian', $data);
				if($result == 1){
					header('location:'.base_url().'user/bagian/2');
				}else{
					header('location:'.base_url().'user/bagian/0');
				}
			}else{
				$data = array(
					'bagian' => $bagian
					);
				$result = $this->model->Update('tb_bagian', $data, array('id_bagian' => $id_bagian));
				if($result == 1){
					header('location:'.base_url().'user/bagian/3');
				}else{
					header('location:'.base_url().'user/bagian/0');
				}
			}
		}else{
			echo('Salah!!!');
		}
	}

	function hapusbagian($kode = 1){
		
		$result = $this->model->Hapus('tb_bagian', array('id_bagian' => $kode));
		if($result == 1){
			header('location:'.base_url().'user/bagian/1');
		}else{
			header('location:'.base_url().'user/bagian/0');
		}
	}

	public function pppk()
	{
		$data = array(
			'bagians' => $this->model->ajaxBagian(),
			'bagian' => $this->model->Getbagian()->result_array(),
			'id_pppk' => $this->model->idppppk(),
		);
		$this->load->view('user/pppk', $data);
	}

	public function getDivisi()
	{
		$bagian_id = $this->input->post('key');
		// print_r($bagian_id);exit();
		$kab = $this->model->ajaxDivisi($bagian_id);

		echo '<select name=""';
		echo '<option value="">--Pilih Divisi--</option>';
		foreach ($kab as $row)
		{
			echo '<option value="'.$row['divisi'].'">'.$row['divisi'].'</option>';
		}
		echo '</select>';
	}

	public function datapppk()
	{
		$data = array(
			'pppk' => $this->model->Getpppk('order by no desc')->result_array(),
		);
		$this->load->view('user/datapppk', $data);
	}

	public function teridentifikasi()
	{
		$data = array(
			'identifikasi' => $this->model->GetIden('order by no desc')->result_array(),
		);
		$this->load->view('user/identifikasi', $data);
	}

	function simpanpppk(){
		
		$no = $_POST['no'];
		$dari = $_POST['dari'];
		$bagian = $_POST['bagian'];
		$divisi = $_POST['divisi'];		
		$kepada = $_POST['kepada'];
		$alasan = $_POST['alasan'];
		$tanggal = $_POST['tanggal'];

		$data = array(	
			'no'=> $no,
			'dari' => $dari,
			'bagian' => $bagian,
			'divisi' => $divisi,
			'kepada' => $kepada,
			'alasan' => $alasan,
			'tanggal' => $tanggal,
			);

		$this->model->Simpan('tb_pppk', $data);

		redirect('user/datapppk');
	}

	function editpppk($kode = 0){
		
		$data_rum = $this->model->Getpppk("where no = '$kode'")->result_array();

		$data = array(
			'session' => $this->session->userdata('login'),
			'no' => $data_rum[0]['no'],
			'dari' => $data_rum[0]['dari'],
			'bagian' => $this->model->GetBagian()->result_array(),
			'tanggal' => $data_rum[0]['tanggal'],
			'kepada' => $data_rum[0]['kepada'],
			'alasan' => $data_rum[0]['alasan'],
			);
			
		$this->load->view('user/editpppk', $data);
	}

	function updatepppk(){
		

		$data = array(
			'no' => $this->input->post('no'),
			'judul' => $this->input->post('judul'),
			'bagian' => $this->input->post('bagian'),
			'tanggal' => $this->input->post('tanggal'),			
			        
			);

		$res = $this->model->Updatepppk($data);
		if($res>=1){
			header('location:'.base_url().'user/datapppk/3');
		}else{
			header('location:'.base_url().'user/datapppk/0');
		}
	}

	function hapuspppk($kode = 0){
		
		$this->model->Hapus('tb_pppk',array('no' => $kode));
		$result = $this->model->Hapus('tb_pppk',array('no' => $kode));
		if($result == 1){
			header('location:'.base_url().'user/datapppk');
		}else{
			header('location:'.base_url().'user/datapppk/0');
		}
	}

	public function update(){
		

		$data = array(
			'id_set' => $this->input->post('id_set'),
			'tentang' => $this->input->post('tentang'),
			'cara' => $this->input->post('cara'),	        
			);

		$res = $this->model->UpdateSet($data);
		if($res>=1){
			header('location:'.base_url().'user/tentang/3');
		}else{
			header('location:'.base_url().'user/tentang/1');
		}
	}
	public function updatepes(){
		

		$data = array(
			'id_set' => $this->input->post('id_set'),
			'tentang' => $this->input->post('tentang'),
			'cara' => $this->input->post('cara'),	        
			);

		$res = $this->model->UpdateSet($data);
		if($res>=1){
			header('location:'.base_url().'user/carapesan/0');
		}else{
			header('location:'.base_url().'user/carapesan/1');
		}
	}
}
