<?php

namespace App\Models;

use CodeIgniter\Model;

class AppBanner extends Model
{
    protected $table='';
    protected $db='';
	public function __construct()
    {
        $this->db = \Config\Database::connect();
		$this->table = 	$this->db->table('banner')->where('deleted', '0');
	}

    public function fetch(){
        return $this->table->get()->getResult();
    }
    public function fetchHome(){
        $this->table22 = 	$this->db->table('banner')->where('deleted', '0')->where('location','home');
        return $this->table22->get()->getResult();
    }
    public function fetchRegister(){
        $this->table221 = 	$this->db->table('banner')->where('deleted', '0')->where('location','pre-register');
        return $this->table221->get()->getResult();
    }
    public function select_banner($id){
        $this->table = 	$this->db->table('banner')->where('id', $id)->where('deleted', '0');
        return $this->table->get()->getResult();
    }
    public function add_data($data)
    {
        $this->table->insert($data);
        return $this->db->insertID();
    }

    public function update_data($id,$data)
    {
        $this->table->where('id', $id);;
        $this->table->set($data);
        $this->table->update();
        return;
    }

    public function fetchApps(){
        $this->table223 = 	$this->db->table('homepage');
        return $this->table223->get()->getRow();
    }

    public function homepageApps($data)
    {
        $this->table25 = 	$this->db->table('homepage');
        $this->table25->where('id', 1);;
        $this->table25->set($data);
        $this->table25->update();
        return;
    }

}

