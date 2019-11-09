<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {

	public function Getpppk($where= "") {
		$data = $this->db->query('select * from tb_pppk '.$where);
		return $data;
	}

	public function GetBagian($where= "") {
		$data = $this->db->query('select * from tb_bagian '.$where);
		return $data;
	}	

	public function Simpan($table, $data){
		return $this->db->insert($table, $data);
	}

	public function Update($table,$data,$where){
		return $this->db->update($table,$data,$where);
	}

	function detail(){		
		$query= "SELECT * FROM tb_bagian";
		return $this->db->query($query);
	}

	public function Hapus($table,$where){
		return $this->db->delete($table,$where);
	}

	function UpdatePppk($data){
        $this->db->where('no',$data['no']);
        $this->db->update('tb_pppk',$data);
    }

    function GetUser($where = ''){
		return $this->db->query("select * from tb_login $where;");
	}
	/*
	//USer
	public function ajaxBagian($params = array())
	{

		$this->db->select('id_bagian, bagian');
		$this->db->from('tb_bagian');
		$ret = $this->db->get();
		return $ret->result_array();
	}

	public function ajaxDivisi($params = array())
	{
		if (isset($params['bagian_id'])) {
			$this->db->where('bagian_id', $params['bagian_id']);
		}

		$this->db->select('id_divisi, bagian_id, divisi');
		$this->db->from('tb_divisi');
		$ret = $this->db->get();
		return $ret->result_array();
	}
	*/

	public function ajaxBagian($params = array())
	{

		$this->db->select('id_bagian, bagian');
		$this->db->from('tb_bagian');
		$ret = $this->db->get();
		return $ret->result_array();
	}

	public function ajaxDivisi($params)
	{
		// if (isset($params['bagian'])) {
		// 	$this->db->where('bagian', $params['bagian']);
		// }


		$this->db->select('id_divisi, bagian_id, divisi, tb_bagian.bagian as bagian');
		$this->db->where('bagian', $params);
		$this->db->from('tb_divisi');
		$this->db->join('tb_bagian', 'tb_bagian.id_bagian = tb_divisi.bagian_id');
		$ret = $this->db->get();

		echo $this->db->last_query();
		return $ret->result_array();
	}

	function idppppk(){
		$q = $this->db->query("select MAX(RIGHT(no,3)) as kd_max from tb_pppk");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "KD-".$kd;
	}
	// Batas User

	public function GetIden($where= "") {
		$data = $this->db->query('select * from tb_iden '.$where);
		return $data;
	}

}