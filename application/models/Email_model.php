<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "email";

    public $nip_pemohon;
    public $usulan_akun;
    public $tgl_transaksi;
    public $st_transaksi = "waiting user";

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nip_pemohon" => $nip_pemohon])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nip_pemohon = $post["nip_pemohon"];
        $this->usulan_akun = $post["usulan_akun"];
        $this->tgl_transaksi = $post["tgl_transaksi"];
        $this->st_transaksi = $st_transaksi;
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nip_pemohon = $post["nip_pemohon"];
        $this->usulan_akun = $post["usulan_akun"];
        $this->tgl_transaksi = $post["tgl_transaksi"];
        $this->st_transaksi = $st_transaksi;
        $this->db->update($this->_table, $this, array('nip_pemohon' => $post['nip_pemohon']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nip_pemohon" => $nip_pemohon));
    }
}