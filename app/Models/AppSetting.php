<?php
namespace App\Models;

use CodeIgniter\Model;

class AppSetting extends Model
{
    protected $table='';
    protected $db='';

	public function __construct(){
        $this->db = \Config\Database::connect();
		$this->table = 	$this->db->table('site_details')->limit(1);
	}

    public function fetch(){
        return $this->table->get()->getResult();
    }

    public function updateSetting($id, $data)
    {
        $this->table->where('id', $id);;
        $this->table->set($data);
        $this->table->update();
        return;
    }
    
    public function add_contact_us($data)
    {
        $this->table2 = $this->db->table('contact-us');
        $this->table2->insert($data);
        $this->db->insertID();
    }

    public function show_contact_us()
    {
        $this->table22 = 	$this->db->table('contact-us')->where('deleted', '0');
        return $this->table22->get()->getResult();
    }

    public function show_contact_us_by_id($id)
    {
        $this->table22 = 	$this->db->table('contact-us')->where('deleted', '0')->where('id', $id);
        return $this->table22->get()->getResult();
    }

    public function delete_contact_us($id, $data)
    {
        $this->table5 = 	$this->db->table('contact-us');
        $this->table5->where('id', $id);
        $this->table5->set($data);
        $this->table5->update();
        return;
    }

    public function add_report_abuse($data)
    {
        $this->table3 = $this->db->table('report-abuse');
        $this->table3->insert($data);
        $this->db->insertID();
    }

    public function show_report_abuse()
    {
        $this->table32 = 	$this->db->table('report-abuse')->where('deleted', '0');
        return $this->table32->get()->getResult();
    }
    
    public function show_reportabuse_by_id($id)
    {
        $this->table3 = 	$this->db->table('report-abuse')->where('deleted', '0')->where('id', $id);
        return $this->table3->get()->getResult();
    }


    public function deletereportabuse($id, $data)
    {
        $this->table52 = 	$this->db->table('report-abuse');
        $this->table52->where('id', $id);
        $this->table52->set($data);
        $this->table52->update();
        return;
    }

    public function add_apk($data)
    {
        $this->table32 = $this->db->table('submit-apk');
        $this->table32->insert($data);
        $this->db->insertID();
    }

    public function show_submitapk()
    {
        $this->table323 = 	$this->db->table('submit-apk')->where('deleted', '0');
        return $this->table323->get()->getResult();
    }
    
    public function show_submitapk_by_id($id)
    {
        $this->table53 = 	$this->db->table('submit-apk')->where('deleted', '0')->where('id', $id);
        return $this->table53->get()->getResult();
    }


    public function deletesubmitapk($id, $data)
    {
        $this->table52 = 	$this->db->table('submit-apk');
        $this->table52->where('id', $id);
        $this->table52->set($data);
        $this->table52->update();
        return;
    }
}

