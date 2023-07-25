<?php

namespace App\Models;

use CodeIgniter\Model;

class AppVersion extends Model
{
    protected $table='';
    protected $db='';
	public function __construct()

	{
        $this->db = \Config\Database::connect();
		$this->table = 	$this->db->table('versions');
	}

    public function fetch(){
        return $this->table->get()->getResult();
    }
    public function select_version($id){
        $this->table2 = 	$this->db->table('versions')->where('id', $id);
        return $this->table2->get()->getResult();
    }

    public function select_all_version($id){
        $this->table2 = 	$this->db->table('versions')->where('app_id', $id);
        return $this->table2->get()->getResult();
    }

    public function select_the_version($id){
        $this->table3 = 	$this->db->table('versions')->where('app_id', $id)->limit(1);
        return $this->table3->get()->getResult();
    }

    public function add_data($data)
    {
        $this->table->insert($data);
        $this->db->insertID();
    }
    public function update_data($id,$data)
    {
        $this->table->where('id ', $id);;
        $this->table->set($data);
        $this->table->update();
        return;
    }
}