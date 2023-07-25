<?php

namespace App\Models;
use Raulr\GooglePlayScraper\Scraper;

use CodeIgniter\Model;

class AppModel extends Model
{
    protected $table='';
    protected $db='';
    
	public function __construct(){
        $this->db = \Config\Database::connect();
		$this->table = 	$this->db->table('app')->where('deleted', '0');
		// $this->table = 	$this->db->table('app')->where('deleted', '0')->where('id', $id);
	}

    public function fetch(){
        return $this->table->get()->getResult();
    }

    public function random_app(){
        $this->table33 = 	$this->db->table('app')->where('deleted', '0')->limit(1)->orderBy('title', 'RANDOM');
        return $this->table33->get()->getResult();
    }
    public function select_data($id){
        $this->table2 = 	$this->db->table('app')->where('deleted', '0')->where('id', $id);
        return $this->table2->get()->getResult();
    }

    public function search_data($name){
        $this->table24 = 	$this->db->table('app')->where('deleted', '0')->like('title', $name,'after');
        return $this->table24->get()->getResult();
    }

    public function search_app($name){
        $this->table214 = 	$this->db->table('app')->where('deleted', '0')->like('app_name', $name);
        return $this->table214->get()->getResult();
    }

    public function paid_apps(){
        $this->table25 = 	$this->db->table('app')->where('deleted', '0')->where('cost', 'Paid')->orderBy('title', 'RANDOM');
        return $this->table25->get()->getResult();
    }

    public function free_apps(){
        $this->table28 = 	$this->db->table('app')->where('deleted', '0')->where('cost', 'Free')->limit(10)->orderBy('title', 'RANDOM');
        return $this->table28->get()->getResult();
    }

    public function select_app($slug){
        $this->table2 = 	$this->db->table('app')->where('deleted', '0')->where('app_name', $slug);
        return $this->table2->get()->getResult();
    }

    public function select_app_by_category($cat_id){
        $this->table32 = 	$this->db->table('app')->where('deleted', '0')->where('cat_id', $cat_id);
        return $this->table32->get()->getResult();
    }

    public function similar_apps($id)
    {
        $this->table424 = $this->db->table('app')->where('deleted', '0')->where('cat_id', $id)->limit(6)->orderBy('title', 'RANDOM');
        return $this->table424->get()->getResult();
    }

    public function popular()
    {
        $this->table4224 = $this->db->table('app')->where('deleted', '0')->limit(6)->orderBy('title', 'RANDOM');
        return $this->table4224->get()->getResult();
    }

    public function moretopics()
    {
        $this->table46 = $this->db->table('app')->where('deleted', '0')->limit(100)->orderBy('title', 'RANDOM');
        return $this->table46->get()->getResult();
    }

    public function game_data(){
        $this->table5 = $this->db->table('app')->where('deleted', '0')->where('type', 'Game')->orderBy('title', 'RANDOM');
        return $this->table5->get()->getResult();
    }
    public function game_data_offset($offset,$limit=12){
        $table = $this->db->table('app')->where('deleted', '0')->where('type', 'Game')->limit($limit,$offset);   
        return $table->get()->getResult();
    }
    public function game_data15(){
        $this->table25 = $this->db->table('app')->where('deleted', '0')->where('type', 'Game')->limit(12)->orderBy('title', 'RANDOM');
        return $this->table25->get()->getResult();
    }

    public function app_data15(){
        $this->table23 = $this->db->table('app')->where('deleted', '0')->where('type', 'App')->limit(12)->orderBy('title', 'RANDOM');
        return $this->table23->get()->getResult();
    }

    public function topics($id){
        $this->table53 = $this->db->table('app')->where('deleted', '0')->like('collection_id', $id)->orderBy('title', 'RANDOM');
        return $this->table53->get()->getResult();
    }
    
    public function discover(){
        $this->table5 = $this->db->table('app')->where('deleted', '0')->where('collection_id', '1')->limit(12)->orderBy('title', 'RANDOM');
        return $this->table5->get()->getResult();
    }
    public function discovery(){
        $this->table25 = $this->db->table('app')->where('deleted', '0')->where('collection_id', '1')->limit(150)->orderBy('title', 'RANDOM');
        return $this->table25->get()->getResult();
    }
    public function editorschoice(){
        $this->table26 = $this->db->table('app')->where('deleted', '0')->where('editorschoice', '1')->orderBy('title', 'RANDOM');
        return $this->table26->get()->getResult();
    }
    
    public function trending_games(){
        $this->table66 = $this->db->table('app')->where('deleted', '0')->where('collection_id', '2')->limit(9)->orderBy('title', 'RANDOM');
        return $this->table66->get()->getResult();
    }
    public function app_data(){
        $this->table6 = $this->db->table('app')->where('deleted', '0')->where('type', 'App')->orderBy('title', 'RANDOM');
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

