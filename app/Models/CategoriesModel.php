<?php

namespace App\Models;
// use Raulr\GooglePlayScraper\Scraper;
use App\Models\Googlescraper;
use CodeIgniter\Model;

class CategoriesModel extends Model
{

    protected $table='';
    protected $db='';
	public function __construct()

	{
        $this->db = \Config\Database::connect();
        $this->table = 	$this->db->table('categories')->where('deleted', '0');
        $this->table2 = $this->db->table('categories')->where('deleted', '0')->where('type', 'Game');
        $this->table3 = $this->db->table('categories')->where('deleted', '0')->where('type', 'App');
	}

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

    public function fetch(){

        $googlescraper= new Googlescraper();
        $categoriesAPI = $googlescraper->fetch();
       
        $results = $this->get_data();
        $allready=array();
        foreach ($results as $row) {
            $allready[]=$row->cat_name;
        }

        foreach($categoriesAPI as $cat){
                if(!in_array($cat,$allready)){
                    $this->set_data(array('cat_name'=>$cat));
                    // echo 'inserted';
                }
        }
        return $results;
    }
    public function select_cat($id)
    {
        $this->table4 = $this->db->table('categories')->where('deleted', '0')->where('id', $id);
        return $this->table4->get()->getResult();
    }

    public function select_catname($name)
    {
        $this->table44 = $this->db->table('categories')->where('deleted', '0')->where('cat_name', $name);
        return $this->table44->get()->getResult();
    }


    public function get_data()
    {
       return $this->table->get()->getResult();
    }
    public function get_data20()
    {
        $this->table44 = $this->db->table('categories')->where('deleted', '0');
       return $this->table44->get()->getResult();
    }
    public function get_game()
    {
       return $this->table2->get()->getResult();
    }
    public function get_apps()
    {
       return $this->table3->get()->getResult();
    }
    public function set_data($data)
    {
        $this->table->insert($data);
        return $this->db->insertID();
    }

    public function update_data($id,$data)
    {
        $this->table->where('id ', $id);;
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

