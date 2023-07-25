<?php

namespace App\Models;
use Raulr\GooglePlayScraper\Scraper;
use CodeIgniter\Model;

class Googlescraper extends Model
{

    protected $table='';
    protected $db='';
	public function __construct()

	{
        $this->db = \Config\Database::connect();

		// $this->table = 	$this->db->table('categories');
	}

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

    public function fetch(){
        $scraper = new Scraper();
        $categoriesAPI = $scraper->getCategories();
        return dd($categoriesAPI);
        // $word = 'GAME_';
        
        // $results = $this->get_data();
        // $allready=array();
        // foreach ($results as $row) {
        //     $allready[]=$row->cat_name;
        // }

        // foreach($categoriesAPI as $cat){
        //     // if (strpos($cat, $word) !== false OR $cat == 'FAMILY') {

        //         if(!in_array($cat,$allready)){
        //             $this->set_data(array('cat_name'=>$cat));
        //             // echo 'inserted';
        //         }
        //     // }
        // }
        // return $results;
    }
    public function fetch_collections(){
        $scraper = new Scraper();
        $collections = $scraper->getCollections();
        
        return $collections;
    }
    public function read_data($collection, $category){
        $scraper = new Scraper();
        $apps = $scraper->getList($collection, $category);
        return $apps;
    }



   
    
}

