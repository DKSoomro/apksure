<?php 
namespace App\Controllers;
use Raulr\GooglePlayScraper\Scraper;
use App\Models\CategoriesModel;
use App\Models\PagesModel;
use App\Models\AppBanner;
use App\Models\AppModel;
use App\Models\AppVersion;
use App\Models\AppScreeshot;
use App\Models\AppSetting;
use App\Models\AppCollection;

// https://apps.evozi.com/apk-downloader/?id=com.tencent.ig
// http://apk-downloaders.com/
class Home extends BaseController
{
	public function __construct()
    {
		define('UPLOAD_PATH','./assets/uploads/appsimages');
		define('UPLOAD_PATH_SETTING','./assets/uploads/settingimges');
		
		helper('general');
	}

	public function index()
	{	
		// $scraper = new Scraper();
		// // print_r($scraper);
		// $app = $scraper->getApp('com.tencent.ig');
		// return print_r($app);

		$model = new AppBanner();
		// $data= $scraper->fetch_collections();
		// return print_r($data);
		// $data = ;

		$model2 = new CategoriesModel();
		$model3 = new AppModel();
		$colle = new AppCollection();
		
		$app66 = $model->fetchApps();
		// return print_r($app66);
		// foreach($app66 as $row){
			 	$game1 = $app66->app_id_1;
			$game2 = $app66->app_id_2;
			$game3 = $app66->app_id_3;
		// }

		$game4 =  $model3->select_data($game1);
		
		// return print_r($game4);
		$game5 =  $model3->select_data($game2);
		$game6 =  $model3->select_data($game3);

		$data = array(
			'data2'=> $model->fetchHome(),
			'data3'=> $model2->get_data(),
			'data4'=> $model3->discover(),
			'data5'=> $model3->trending_games(),
			'data6'=> array($app66),
			'getapp1' => $game4,
			'getapp2' => $game5,
			'getapp3' => $game6,
			'rand' => $model3->random_app(),
			'featured' => $colle->fetch_featured(),

		);

		// die(print_r($data['data4']));

		return view('Pages/home', array('data' => $data));
		
		
	}
	// public function aboutus()
	// {	
	// 	$slug=$this->request->uri->getSegment(1);
	// 	$pages = new PagesModel();
	// 	$data = $pages->select_slug($slug);
	// 	if(count($data) == 0){
	// 		$this->load->view('not_found');
	// 	}
	// 	// return print_r($data);
	// 	return view('Pages/about-us', array('data' => $data));
	// }

	public function topic($id)
	{	
		// $slug=$this->request->uri->getSegment(1);

		$collection = new AppCollection();

		$app = $collection->fetch_collection($id);
		$id2 = $app->id;
		$id = $app->collection_name;

		// return $app->id;


		$model = new AppModel();
		$data = $model->topics($id2);
		
		// return print_r($data);
		return view('Pages/topics/topics', array('data' => $data, 'slug' => $id));
	}

	public function pages($slug)
	{	
		
		$pages = new PagesModel();
		$data = $pages->select_slug($slug);
		// if(count($data) == 0){
		// 	return view('home');
		// }
		return view('Pages/about-us', array('data' => $data));
	}
	
	public function contactus()
	{	
		$model = new AppModel();
		$data = array(
			'data2' =>  $model->popular(),
		);
		
		return view('Pages/contact-us', array('data' => $data));
	}

	public function ContactusSubmit()
	{
		// return "DK";
		if ($this->request->getMethod()=='post') {
			$formdata=array();
			$formdata['name'] = $this->request->getPost('name');
			$formdata['email'] = $this->request->getPost('email');
			$formdata['subject'] = $this->request->getPost('subject');
			$formdata['reason'] = $this->request->getPost('reason');
			$formdata['message'] = $this->request->getPost('message');
			

			// return print_r($formdata);
			
			$app = new AppSetting();
			$get_lastID = $app->add_contact_us($formdata);
			//  return print_r($get_lastID);

			if (empty($get_lastID)) {
				session()->setFlashdata('Success', 'homepage has been Added');
			}else{
				session()->setFlashdata('Error', 'homepage addpagesdata Error 001');
			}			
			return redirect()->to(base_url());
		}
		
	}

	public function reportabuse()
	{	
		$model = new AppModel();
		$data = array(
			'data2' =>  $model->popular(),
		);
	
		return view('Pages/report-abuse', array('data' => $data));
	}

	public function ReportabuseSubmit()
	{
		// return "DK";
		if ($this->request->getMethod()=='post') {
			$formdata=array();
			$formdata['url'] = $this->request->getPost('url');
			$formdata['name'] = $this->request->getPost('name');
			$formdata['email'] = $this->request->getPost('email');
			$formdata['reason'] = $this->request->getPost('reason');
			$formdata['comments'] = $this->request->getPost('comments');
			

			// return print_r($formdata);
			
			$app = new AppSetting();
			$get_lastID = $app->add_report_abuse($formdata);
			//  return print_r($get_lastID);

			if (empty($get_lastID)) {
				session()->setFlashdata('Success', 'homepage has been Added');
			}else{
				session()->setFlashdata('Error', 'homepage addpagesdata Error 001');
			}			
			return redirect()->to(base_url());
		}
		
	}

	public function submitapk()
	{	
		return view('Pages/submit-apk');
	}

	public function SubmitapkSubmit()
	{
		// return "DK";
		if ($this->request->getMethod()=='post') {
			$formdata=array();
			$formdata['package_name'] = $this->request->getPost('package_name');
			$formdata['whatsnew'] = $this->request->getPost('whatsnew');
			$formdata['name'] = $this->request->getPost('name');
			$formdata['email'] = $this->request->getPost('email');
			$imgupload = $this->request->getFile('file');
			$formdata['file'] = $this->uploadimg($imgupload);
			
			

			// return print_r($formdata);
			
			$app = new AppSetting();
			$get_lastID = $app->add_apk($formdata);
			//  return print_r($get_lastID);

			if (empty($get_lastID)) {
				session()->setFlashdata('Success', 'homepage has been Added');
			}else{
				session()->setFlashdata('Error', 'homepage addpagesdata Error 001');
			}			
			return redirect()->to(base_url());
		}
		
	}

	public function uploadimg($file)
	{
		 $newName='';
		 
		 $data = $this->validate([
		    'uploaimg' => 'uploaded[uploaimg]|max_size[uploaimg,200]'
		]);

		 if ($data = 1) {
		 	if ($file->isValid() && ! $file->hasMoved())
	      {
	           $newName = $file->getRandomName();
	           $file->move(UPLOAD_PATH, $newName);

	      }
	       return $newName;
		 }
		 else{
		 	echo "error";
		 }
	}

	public function uploadimgsetting($file)
	{
		 $newName='';
		 
		 $data = $this->validate([
		    'uploaimg' => 'uploaded[uploaimg]|max_size[uploaimg,200]'
		]);
		$isupload=false;
		 if ($data = 1) {
		 	if ($file->isValid() && ! $file->hasMoved())
	    	  {
	           $newName = $file->getRandomName();
	           $file->move(UPLOAD_PATH_SETTING, $newName);
			}
	       return $newName;
		 }
		 else{
				echo 'error' ;
		 }
		
	}
	
	// For Apps

	public function apps()
	{	
		$model = new CategoriesModel();
		$model2 = new AppModel();
		$results = array(
			'datagame' => $model->get_game(), 
			'dataapp'=> $model->get_apps(),
			'dataAll' => $model2->app_data15()
		);
		
		return view('Pages/apps/apps', array('results' => $results));
		
	}

	public function games()
	{	
		$model = new CategoriesModel();
		$model2 = new AppModel();
		$results = array(
			'datagame' => $model->get_game(), 
			'dataapp'=> $model->get_apps(),
			'dataAll' => $model2->game_data15()
		);
		
		return view('Pages/games/games', array('results' => $results));
		
	}

	public function read_more(){
		$output = array();  
// $video_id = '';  
// sleep(1);  
		$offet = $this->request->getPost('offset');
		$appmodel = new AppModel();
		$results   = $appmodel->game_data_offset($offet);
		$counter=0;
		$html='';
		foreach($results as $raw) {
		// print_r($results);
		// die();
			$word = "https";
			$html .= '			
			<div class="col-sm-3 span8">
			<div class=" spancenter span7">
			<div class="img-align ">
			';
			if(strpos($raw->image, $word) !== false){
			$html .=  '<img src="'.$raw->image.'" style="margin-left: 0;" height = "100" width="100">';
			} else { 
				$html .= '<img src="'.base_url().'/assets/uploads/appsimages/'.$raw->image.'" style="margin-left: 0;" height = "100" width="100">'; } 
			$html .= '</div>
			<div class="content-heading cont-align">
				<p>'.$raw->title.'</p>
				<label class="startss">
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
				</label>
				'.round($raw->rating, 1).'
				<a href="'.base_url().'/game/'.$raw->app_name.'"><button class="btn for-btn">Download XAPK</button></a>
			</div>
		</div>
		</div>';
		$counter++;
		}  
		  $output['data']=$html;
		  $output['offset']=$counter;

     echo json_encode($output,true);  
	}

	public function read_more2(){
		$output = '';  
		$video_id = '';  
		sleep(1);  
		$formdata['last_id'] = $this->request->getPost('last_id');
		// die();
		$db = \Config\Database::connect();
				$query = $db->query('SELECT * FROM app WHERE  id >'.$formdata['last_id'].' and type = "App" LIMIT 12');
				$results = $query->getResult(); foreach($results as $raw) {
		// print_r($results);
		// die();
		$word = "https";
		$output .= '			
		<div class="col-sm-3 span8">
		<div class=" spancenter span7">
			<div class="img-align ">
			';
			if(strpos($raw->image, $word) !== false){
			$output .=  '
				<img src="'.$raw->image.'" style="margin-left: 0;" height = "100" width="100">
			';
		} else { 
			$output .= '
				<img src="'.base_url().'/assets/uploads/appsimages/'.$raw->image.'" style="margin-left: 0;" height = "100" width="100">
			'; } 
			$output .= '
			
			</div>
			<div class="content-heading cont-align">
				<p>'.$raw->title.'</p>
				<label class="startss">
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
				</label>
				'.round($raw->rating,1).'
				<a href="'.base_url().'/game/'.$raw->app_name.'"><button class="btn for-btn">Download XAPK</button></a>
			</div>
		</div>
		</div>
		';

     	}  
  
     echo $output;  
	}

	//	For Search

	public function search()
	{	
		
		// exit();
		if ($this->request->getMethod()=='get') {
			
			
			$term= $this->request->getGet('term');
			$datafrom=array();
			$datafrom['term']=$term;


		

			$model = new AppModel();
			$results = array(
				'dataAll'=> $model->search_data($term),
				);
		
				// return print_r($results);
		return view('Pages/search', array('results' => $results));
		
		}
		
		
	}
	

	//	For Category

	public function category($name)
	{	
		$output = strtolower(str_replace('_', ' ', $name));
		$output2 = strtolower(str_replace('game', ' ', $output));
		$cat_name = ucwords($output2);
		// echo $cat_name; 

		// return $cat_name;
		$model = new CategoriesModel();
		$res = $model->select_catname($name);
		$cate = '';
		foreach($res as $re){ $cate = $re->id; }
		// echo $cate;
		// die();

		$model2 = new AppModel();
		$results = array(
			'datagame' => $model->get_game(), 
			'dataapp'=> $model->get_apps(),
			'dataAll' => $model2->select_app_by_category($cate),
			'category' => $cat_name
		);
		
		return view('Pages/category', array('results' => $results));
		
	}


	//	For Topics

	public function discovertopics()
	{	
		$model3 = new AppModel();
		$model2 = new CategoriesModel();
		$data = array(
			'data2' => $model3->discovery(),
			// 'data3'=> $model2->select_cat()
		);
		// return print_r($data);
		return view('Pages/topics/discover-topics', array('data' => $data));
	}


	public function editorschoicetopics()
	{	
		$model3 = new AppModel();
		$model2 = new CategoriesModel();
		$data = array(
			'data2' => $model3->editorschoice(),
			// 'data3'=> $model2->select_cat()
		);
		return view('Pages/topics/editors-choice-topics', array('data' => $data));
	}

	public function preregister()
	{	
		$model = new AppBanner();
		$results = array(
			'data2'=> $model->fetchRegister()
		);
		return view('Pages/topics/pre-register', array('results' => $results));
	}

	public function gamesales()
	{	
		$model3 = new AppModel();
		$data = array(
			'data2' => $model3->paid_apps(),
			'data3'=> $model3->free_apps()
		);
		return view('Pages/topics/game-sales' , array('data' => $data));
	}

	public function moretopics()
	{	
		$model3 = new AppCollection();
		
		$data = array(
			'data2' => $model3->fetch(),
			// 'data3'=> $model2->select_cat()
		);
		return view('Pages/topics/more-topics', array('data' => $data));
	}

	public function singlegame($slug)
	{	
		$model = new AppModel();


		$gplay = new \Nelexa\GPlay\GPlayApps($defaultLocale = 'en_US', $defaultCountry = 'us');
		

		$dati = $model->select_app($slug); $roow = '';
		foreach($dati as $row){ $roow = $row->id; $raw= $row->cat_id; $ver = $row->version_id; }

		$app = $slug;
		

		$modelver = new AppVersion();
		
		// $dtaa = $modelver->select_the_version($roow);
		// return print_r($dtaa);


		$modelscr = new AppScreeshot();
		$cat = new CategoriesModel();
		$cata = $cat->select_cat($raw);
		foreach($cata as $r54ow){ $cato= $r54ow->cat_name; }
		$popular = $gplay->getTopApps(
			$category = \Nelexa\GPlay\Enum\CategoryEnum::GAME(),
			$ageLimit = \Nelexa\GPlay\Enum\AgeEnum::SIX_EIGHT(),
			$limit = 6
		);

// return		print_r($model->similar_apps($raw));
		// return $cato;
		$data = array(
			'data2' => $model->select_app($slug),
			'data3' => $modelver->select_the_version($roow),
			'data4' => $modelver->select_all_version($roow),
			'data5' => $modelscr->select_screenshot($roow),
			'data6' => $cat->select_cat($raw),
			'data7' => $model->similar_apps($raw),
			'data8' =>  $model->popular(),

		);
		// print_r($data);
		
		return view('Pages/games/single-game', array('data' => $data));
	}
	public function gamesdownload()
	{	
		return view('Pages/games/games-download');
	}
	public function singleapp()
	{	
		return view('Pages/apps/single-app');
	}
	public function appdownload()
	{	
		return view('Pages/apps/app-download');
	}
}
