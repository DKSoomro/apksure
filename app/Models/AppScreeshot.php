<?php

namespace App\Models;

use CodeIgniter\Model;

class AppScreeshot extends Model
{
    protected $table='';
    protected $db='';
	public function __construct()

	{
        $this->db = \Config\Database::connect();
		$this->table = 	$this->db->table('screenshots')->where('deleted', '0');
	}

    public function fetch(){
        return $this->table->get()->getResult();
    }
    public function select_screenshot($id){
        $this->table2 = 	$this->db->table('screenshots')->where('app_id', $id)->where('deleted', '0');
        return $this->table2->get()->getResult();
    }
    public function add_data($data)
    {
        $this->table->insert($data);
        return $this->db->insertID();
    }

    public function update_data($id,$data)
    {
        $this->table->where('id', $id);
        $this->table->set($data);
        $this->table->update();
        return;
    }
}

