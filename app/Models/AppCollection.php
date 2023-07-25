<?php

namespace App\Models;
use Raulr\GooglePlayScraper\Scraper;

use CodeIgniter\Model;

class AppCollection extends Model
{
    protected $table='';
    protected $db='';
    
	public function __construct(){
        $this->db = \Config\Database::connect();
		$this->table = 	$this->db->table('collection')->where('deleted', '0');
		// $this->table = 	$this->db->table('app')->where('deleted', '0')->where('id', $id);
	}

    public function fetch(){
        return $this->table->get()->getResult();
    }
    public function select_collection($id){
        $this->table2 = 	$this->db->table('collection')->where('deleted', '0')->where('id', $id);
        return $this->table2->get()->getResult();
    }

    public function fetch_collection($id){
        $this->table23 = 	$this->db->table('collection')->where('deleted', '0')->where('slug', $id)->orderBy('title', 'RANDOM');
        return $this->table23->get()->getRow();
    }

    public function fetch_featured(){
        $this->table223 = 	$this->db->table('collection')->where('deleted', '0')->where('featured', '1')->limit(4)->orderBy('title', 'RANDOM');
        return $this->table223->get()->getResult();
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

    public function setFeatured($id, $data)
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

    // public function game_data(){
    //     $this->table5 = $this->db->table('collection')->where('deleted', '0')->where('type', 'Game');
    //     return $this->table5->get()->getResult();
    // }
    // public function app_data(){
    //     $this->table6 = $this->db->table('collection')->where('deleted', '0')->where('type', 'App');
    //     return $this->table6->get()->getResult();
    // }
    
}

