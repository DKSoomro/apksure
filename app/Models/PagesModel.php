<?php

namespace App\Models;
use Raulr\GooglePlayScraper\Scraper;

use CodeIgniter\Model;

class PagesModel extends Model
{
    protected $table='';
    protected $db='';
    
	public function __construct(){
        $this->db = \Config\Database::connect();
		$this->table = 	$this->db->table('pages')->where('deleted', '0');
		// $this->table = 	$this->db->table('app')->where('deleted', '0')->where('id', $id);
	}

    public function fetch(){
        return $this->table->get()->getResult();
    }
    public function select_data($id){
        $this->table2 = 	$this->db->table('pages')->where('deleted', '0')->where('id', $id);
        return $this->table2->get()->getResult();
    }
    public function select_slug($slug){
        $this->table6 = $this->db->table('pages')->where('deleted', '0')->where('slug', $slug);
        return $this->table6->get()->getResult();
    }
    public function add_data($data)
    {
        $this->table->insert($data);
        $this->db->insertID();
    }

    public function update_data($id, $data)
    {
        $this->table->where('id', $id);;
        $this->table->set($data);
        $this->table->update();
        return;
    }

    public function delete_data($id, $data)
    {
        $this->table->where('id', $id);;
        $this->table->set($data);
        $this->table->update();
        
        return;
    }


    
}

