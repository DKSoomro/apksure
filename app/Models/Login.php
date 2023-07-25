<?php namespace App\Models;

use CodeIgniter\Model;

class Login extends Model
{
	protected $table='';
	public function __construct()

	{
		$db = \Config\Database::connect();
		$this->table = $db->table('user_admin');
	}

	public function getWhere($user,$pass)
	{
		$result=$this->table->getWhere(['username' => $user,'password' => $pass])->getResult();
		return $result;
	}

}