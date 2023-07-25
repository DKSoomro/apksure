<?php namespace App\Controllers;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\Vendors;
use App\Models\Products;
use App\Models\Login;
use App\Models\Pages;
use App\Models\Settings;
use App\Libraries\Parsecsv;

use App\Models\CategoriesModel;
use App\Models\AppModel;
use App\Models\AppScreeshot;
use App\Models\AppVersion;
use App\Models\Googlescraper;
use App\Models\PagesModel;
use App\Models\AppBanner;
use App\Models\AppCollection;
use App\Models\AppSetting;


use Raulr\GooglePlayScraper\Scraper;

class Admin extends BaseController
{
	protected $session; 
	public function __construct()
    {
		define('UPLOAD_PATH','./assets/uploads/appsimages');
		define('UPLOAD_PATH_SETTING','./assets/uploads/settingimges');
		$this->session = session();
		helper('general');
	}
	
	public function contactus()
	{	
		if(empty($this->session->get('logged_in'))) return  redirect('admin/login');;
		$setting = new AppSetting();

		$data = array(
			'data2' => $setting->show_contact_us(),
		);
		
		$this->adminRender('contactus',$data,'','contactus');
	}

	public function contactusview($id)
	{	
		if(empty($this->session->get('logged_in'))) return  redirect('admin/login');;
		
		// return $id;
		$setting = new AppSetting();

		$data = array(
			'data2' => $setting->show_contact_us_by_id($id),
		);
		
		$this->adminRender('viewcontactus',$data,'','viewcontactus');
	}

	public function deletecontactus($id){		
		$delete = '1';
		$date = date_create()->format('Y-m-d H:i:s');
		$datafrom=array();
		$datafrom['deleted']= $delete;
		$datafrom['deleted_at']= $date;			
		$app = new AppSetting();
		$yeah = $app->delete_contact_us($id, $datafrom);

		if (empty($yeah)) {
			session()->setFlashdata('Success', 'Deleted');
		}else{
			session()->setFlashdata('Error', 'Deleting Error');
		}
		return redirect()->to(base_url().'/admin/contactus');
	}

	public function reportabuse()
	{	
		if(empty($this->session->get('logged_in'))) return  redirect('admin/login');;
		$setting = new AppSetting();
		

		$data = array(
			'data2' => $setting->show_report_abuse(),
		);
		// return print_r($data);
		$this->adminRender('reportabuse',$data,'','reportabuse');
	}

	public function deletereportabuse($id){		
		$delete = '1';
		$date = date_create()->format('Y-m-d H:i:s');
		$datafrom=array();
		$datafrom['deleted']= $delete;
		$datafrom['deleted_at']= $date;			
		$app = new AppSetting();
		$yeah = $app->deletereportabuse($id, $datafrom);

		if (empty($yeah)) {
			session()->setFlashdata('Success', 'Deleted');
		}else{
			session()->setFlashdata('Error', 'Deleting Error');
		}
		return redirect()->to(base_url().'/admin/reportabuse');
	}

	public function reportabuseview($id)
	{	
		if(empty($this->session->get('logged_in'))) return  redirect('admin/login');;
		
		// return $id;
		$setting = new AppSetting();

		$data = array(
			'data2' => $setting->show_reportabuse_by_id($id),
		);
		// return print_r($data);
		$this->adminRender('viewreportabuse',$data,'','viewreportabuse');
	}

	public function submitapk()
	{	
		if(empty($this->session->get('logged_in'))) return  redirect('admin/login');;
		$setting = new AppSetting();
		

		$data = array(
			'data2' => $setting->show_submitapk(),
		);
		// return print_r($data);
		$this->adminRender('submitapk',$data,'','submitapk');
	}

	public function deletesubmitapk($id){		
		$delete = '1';
		$date = date_create()->format('Y-m-d H:i:s');
		$datafrom=array();
		$datafrom['deleted']= $delete;
		$datafrom['deleted_at']= $date;			
		$app = new AppSetting();
		$yeah = $app->deletesubmitapk($id, $datafrom);

		if (empty($yeah)) {
			session()->setFlashdata('Success', 'Deleted');
		}else{
			session()->setFlashdata('Error', 'Deleting Error');
		}
		return redirect()->to(base_url().'/admin/submitapk');
	}

	public function submitapkview($id)
	{	
		if(empty($this->session->get('logged_in'))) return  redirect('admin/login');;
		
		// return $id;
		$setting = new AppSetting();

		$data = array(
			'data2' => $setting->show_submitapk_by_id($id),
		);
		// return print_r($data);
		$this->adminRender('viewsubmitapk',$data,'','viewsubmitapk');
	}
	
	public function dashborad()
	{
		if(empty($this->session->get('logged_in'))) return  redirect('admin/login');;
		$model2 = new AppModel();
		$data = array();
		// $data = $model2->fetch();
		$model = new CategoriesModel();
		// $data = $model->fetch();
		
		$data = array(
			'data2' => $model2->fetch(),
			'data3' => $model->get_data20(),
			'data4' => $model2->game_data(),
			'data5' => $model2->app_data(),
			'data6' => $model->get_data(),
		);

		// print_r($results);
		// $products = new Products();
		// $get = $products->get();
		// $this->adminRender('view_products','','','','viewproduct');
		$this->adminRender('dashboard',$data,'','dashboard');
	}

	public function homepage()
	{
		
		if(empty($this->session->get('logged_in'))) return  redirect()->to('admin/login');;
		// $scraper = new Googlescraper();
		$model2 = new AppModel();
		$model3 = new AppBanner();
		// $data= $scraper->fetch_collections();
		// return print_r($data);
		$data = array(
			
			'data2' => $model2->fetch(),
			'data3' => $model3->fetchApps()

		);
		// return print_r($data);

		$this->adminRender('homepage',$data,'','homepage');
	}

	public function addHomepage()
	{
		if ($this->request->getMethod()=='post') {
			$formdata=array();
			$formdata['app_id_1'] = $this->request->getPost('app_id_1');
			$imgupload1 = $this->request->getFile('app_image_1');
			$formdata['app_image_1'] = $this->uploadimg($imgupload1);
			
			$formdata['app_id_2'] = $this->request->getPost('app_id_2');
			$imgupload2 = $this->request->getFile('app_image_2');
			$formdata['app_image_2'] = $this->uploadimg($imgupload2);
			
			$formdata['app_id_3'] = $this->request->getPost('app_id_3');
			$imgupload3 = $this->request->getFile('app_image_3');
			$formdata['app_image_3'] = $this->uploadimg($imgupload3);
			

			// return print_r($formdata);
			
			$app = new AppBanner();
			$get_lastID = $app->homepageApps($formdata);
			//  return print_r($get_lastID);

			if (empty($get_lastID)) {
				session()->setFlashdata('Success', 'homepage has been Added');
			}else{
				session()->setFlashdata('Error', 'homepage addpagesdata Error 001');
			}			
			return redirect()->to('homepage');
		}
		
	}

	public function api()
	{
		
		if(empty($this->session->get('logged_in'))) return  redirect()->to('admin/login');;
		$scraper = new Googlescraper();
		$model2 = new CategoriesModel();
		// $data= $scraper->fetch_collections();
		// return print_r($data);
		$data = array(
			'collections' => $scraper->fetch_collections(),
			'categories' => $model2->get_data()

		);
		// return print_r($data);

		$this->adminRender('api',$data,'','api');
	}

	public function data()
	{
		// die('DK');
		// $gplay = new \Nelexa\GPlay\GPlayApps($defaultLocale = 'en_US', $defaultCountry = 'us');
// 		$app = $gplay->getAppInfo(new \Nelexa\GPlay\Model\AppId('com.rovio.angrybirds', 'ru'));
// $screenshots = $app->getScreenshots();
// return print_r($screenshots);
		
		$gplay = new \Nelexa\GPlay\GPlayApps($defaultLocale = 'en_US', $defaultCountry = 'us');
$appInfo = $gplay->getAppInfo('com.mojang.minecraftpe');
		
$app = 'com.sololearn';
// either
$app = new \Nelexa\GPlay\Model\AppId('com.sololearn', 'ru');
$apps = $gplay->getTopApps(\Nelexa\GPlay\Enum\CategoryEnum::GAME_RACING());

$similarApps = $gplay->getSimilarApps($app, $limit = 2);
		// foreach ($appInfo as $row) {
			// print_r(date($appInfo->getReleased()));
			// print_r($similarApps);
		// }
		return print_r($apps);

		// $this->adminRender('api',$data,'','api');
	}

	public function getscreenshotbyID($appid)
	{
		// die('DK');
		$gplay = new \Nelexa\GPlay\GPlayApps($defaultLocale = 'en_US', $defaultCountry = 'us');
		$app = $gplay->getAppInfo(new \Nelexa\GPlay\Model\AppId($appid));
		$screenshots = $app->getScreenshots();
		return 	$screenshots;
		
	}

	public function getDescription($appid)
	{
		// die('DK');
		$gplay = new \Nelexa\GPlay\GPlayApps($defaultLocale = 'en_US', $defaultCountry = 'us');
		$appInfo = $gplay->getAppInfo($appid);
	
		return 	$appInfo;
		
	}

	public function dataApi()
	{
		
		if(empty($this->session->get('logged_in'))) return  redirect()->to('admin/login');;
		
		if ($this->request->getMethod()=='post') {
		

			$category = $this->request->getPost('category');
			
			// return \Nelexa\GPlay\Enum\CategoryEnum::();
			$gplay = new \Nelexa\GPlay\GPlayApps($defaultLocale = 'en_US', $defaultCountry = 'us');
		
			$cate = new CategoriesModel();
			$app = new AppModel();


// 			$app_cat = $gplay->getListApps(\Nelexa\GPlay\Enum\CategoryEnum::$category());
// $check = array();
// 			foreach($app_cat as $cato){
// 				$api = $cato->getId();
// 				$app2 = $app->select_app($api);
				
// 				$val = sizeof($app2);
// 				$check = array( 
// 					$api => $val 
// 				);
// 			}
			// return print_r($check);

			$cat = $cate->select_catname($category);
			foreach($cat as $c){
					 $c->id;
			}

			// return	 $c->id;
			
			$data=array(
				'apps' => $gplay->getListApps(\Nelexa\GPlay\Enum\CategoryEnum::$category()),
				'cat_id' => $c->id
			);

			// if ($apps) {
			// 	session()->setFlashdata('Success', 'Page has been Updated');
			// }else{
			// 	session()->setFlashdata('Error', 'Pages addpagesdata Error 001');
			// }			
			$this->adminRender('dataApi',$data, '','dataApi');

		}
	}

	public function read_more(){
		$output = '';  
		$video_id = '';  
		sleep(1);  
		$formdata['last_id'] = $this->request->getPost('last_id');
		// die();
		$db = \Config\Database::connect();
				$query = $db->query('SELECT * FROM app WHERE  id >'.$formdata['last_id'].' and type = "Game" LIMIT 12');
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
			<span>'.$raw->rating.'</span>
		</label>
		<a href="'.base_url().'/game/'.$raw->app_name.'"><button class="btn for-btn">Download XAPK</button></a>
	</div>
</div>
</div>
';

     	}  
  
     echo $output;  
	}

	public function dataApifetch()
	{

		
		if ($this->request->getMethod()=='post') {
		

			$formdata=array();
			
			$app_name = $this->request->getPost('id');
			$title= $this->request->getPost('title');
			$type= $this->request->getPost('type');
			$url = $this->request->getPost('url');
			
			$image = $this->request->getPost('image');
			$author= $this->request->getPost('author');
			$author_link= $this->request->getPost('author_link');
			$cat= $this->request->getPost('cat_id');

			
			$last_updated= $this->request->getPost('last_updated');
			// $whatsnew= $this->request->getPost('whatsnew');
			$collection= $this->request->getPost('collection_id');
			

			$appInfo=$this->getDescription($app_name);
			$description = $appInfo->getDescription();
			if($appInfo->getRecentChanges() == NULL){
				$whatsnew = '  ';
			}else{
				$whatsnew = $appInfo->getRecentChanges();
			}

			$whatsnew = $appInfo->getRecentChanges();
			
			if($appInfo->getVideo() == NULL){
				$video_image = '';
				$video_link = '';
			}else{
				
				$video_image = $appInfo->getVideo()->getImageUrl();
				$video_link = $appInfo->getVideo()->getVideoUrl();
			}


			$editorschoice = $appInfo->isEditorsChoice();
			$downloads = $appInfo->getInstalls();
			$rating = $appInfo->getScore();
			$version = $appInfo->getAppVersion();
			$content_rating = $appInfo->getContentRating();
			$votes = $appInfo->getNumberVoters();
			$size = $appInfo->getSize();
			$summary = $appInfo->getSummary();
			$cover = $appInfo->getCover();
			

			if($appInfo->getPrice() == NULL){
				$cost = 'Free';
				$price = '';
			}else{
				
				$cost = 'Paid';
				$price = $appInfo->getPrice();
			}
			

			$datafrom=array();
			$app = new AppModel();

		
			$datafrom['title']=$title;
			$datafrom['app_name']=$app_name;
			$datafrom['summary']=$summary;
			$datafrom['type']= $type;
			$datafrom['url']= $url;
			$datafrom['image']= $image;
			$datafrom['author']= $author;
			$datafrom['author_link']=$author_link;
			$datafrom['cat_id']= $cat;
			$datafrom['cost']= $cost;
			$datafrom['cover']= $cover;
			
			$datafrom['description']= $description;
			$datafrom['price']= $price;
			$datafrom['whatsnew']= $whatsnew;
			$datafrom['downloads']= $downloads;
			$datafrom['rating']= $rating;
			$datafrom['editorschoice']= $editorschoice;
			$datafrom['content_rating']= $content_rating;
			$datafrom['votes']= $votes;
			$datafrom['version_id']= $version;
			$datafrom['size']= $size;
			
			$datafrom['last_updated']=$last_updated;
			$datafrom['whatsnew']= $whatsnew;
			$datafrom['video_link']= $video_link;
			$datafrom['video_image']= $video_image;
			$datafrom['collection_id']= $collection;
			
			$apps = $app->add_data($datafrom);
			$last_id =$app->insertID();

			$screenshots=$this->getscreenshotbyID($app_name);
			

			// return print_r($appInfo);
			$appscreenshot = new AppScreeshot();
			foreach($screenshots as $screenshot){
				$datafromscrnshot['app_id']= $last_id;
				$datafromscrnshot['screenshot']= $screenshot.'=w250';
				$appscreenshot->add_data($datafromscrnshot);
			}	
			if($version !== NULL){
				$dataforversions=array();
				$versions = new AppVersion();
				$dataforversions['app_id']= $last_id;
				$dataforversions['version']= $version;
				$versions->add_data($dataforversions);
			}

			if ($last_id) {
				session()->setFlashdata('Success', 'Page has been Updated');
				echo json_encode(array('status'=>true));
			}else{
				session()->setFlashdata('Error', 'Pages addpagesdata Error 001');
			}			
			// return redirect()->to(base_url().'/admin/dataApi'); 

		}
	}
	

	public function addpages()
	{
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;

		$this->adminRender('add_page','','','addpages');
	}

	public function addpagesdata()
	{
		if ($this->request->getMethod()=='post') {
			$formdata=array();
			$formdata['title'] = $this->request->getPost('title');
			$formdata['content'] = $this->request->getPost('textcontent');
			$formdata['slug'] = strtolower(url_title($formdata['title'], '-'));
			$pages = new PagesModel();
			$get_lastID = $pages->add_data($formdata);
			if (empty($get_lastID)) {
				session()->setFlashdata('Success', 'Page has been Added');
			}else{
				session()->setFlashdata('Error', 'Pages addpagesdata Error 001');
			}			
			return redirect()->to('addpages');
		}
		
	}
	public function uploadcsvfileproduct()
	{
		if ($this->request->getMethod()=='post') {
			$csvfile='';
			$csvfile=$this->request->getFile('uploadedFile');
			$parsecsv = new parseCSV();
			$parsecsv->auto($csvfile->getTempName());
			$csvData = $parsecsv->data;
			print_r($csvData);
			if(!empty($csvData)){
				$check=false;
				foreach ($csvData as $key => $row) {
					$formdata=array();

					$brands = new Brands();
					$vendors = new Vendors();
					$categories = new Categories();
					$formdata['product_title']= $row['product_title'];
					$formdata['product_availability']= $row['product_availability'];
					$formdata['product_price']= $row['product_price'];
					$formdata['sale_price']= $row['sale_price'];
					$formdata['product_link']=$row['product_links'];
					$formdata['slug'] = $this->checksluginDB(strtolower(url_title($row['product_title'], '-')));

					//add cateogru data
					$formdatacate=array();
					$formdatacate['name']= $row['category_name'];
					$formdatacate['slug']= strtolower(url_title($formdatacate['name'], '-'));
					$formdata['category_id']= $categories->add($formdatacate);

					//add vendor data
					$formdataven=array();
					$formdataven['name']= $row['vendor_name'];
					$formdataven['slug']= strtolower(url_title($formdataven['name'], '-'));
					$formdata['vendor_id']=  $vendors->add($formdataven);

					//add brand data
					$formdatabrand=array();
					$formdatabrand['name']= $row['product_brand'];
					$formdatabrand['slug']= strtolower(url_title($formdatabrand['name'], '-'));
					$formdata['product_brand_id']= $brands->add($formdatabrand);
					
					$getbyname = $brands->getbyname($formdata['product_brand_id']);
					$formdata['product_brand']= $getbyname;
			
					$vendorname = $vendors->getbyname($formdata['vendor_id']);
					$formdata['vendor_name']= $vendorname;
		
					$formdata['product_type']= $row['product_type'];
					$formdata['product_description']= $row['product_description'];
					$formdata['product_price_currency']= $row['product_price_currency'];
					$formdata['product_id']= 0;
						
					// $imgupload = $this->request->getFile('proimg');
					// $formdata['product_image_link'] = $this->uploadimg($imgupload);
				
					$formdata['compersion_id']='';
					// $formdata['compersion_id'] = empty($this->request->getPost('prod_comp'))!=''?'':implode(',', $this->request->getPost('prod_comp'));
					$products = new Products();
					print_r($formdata);
					$get_lastID = $products->add($formdata);
					if($get_lastID){
						$check=true;
					}else{
						$check=false;
					}
				}
				if ($check) {
					session()->setFlashdata('Success', 'Product has Uploaded');
				}else{
					session()->setFlashdata('Error', 'uploadcsvfileproduct Number 001');
				}	
				return redirect()->to('products');
			}
			
		}
	}
	public function checksluginDB($slug)
	{	
		$newslug='';
			$products = new Products();
			$results=$products->getproductslug($slug);
			
			if($results){
				$max=0;
				foreach ($results as $row) {
					if($slug===$row->slug)
					$newslug=$slug .= '-' . $max;
					$max++;
				}
				return $newslug;
			}
			return $slug;
	}
	
	public function editpagesdata()
	{
		if ($this->request->getMethod()=='post') {
			 
			$formdata['title'] = $this->request->getPost('title');
			$formdata['content'] = $this->request->getPost('textcontent');
			$formdata['slug'] = strtolower(url_title($formdata['title'], '-'));
			$id = $this->request->getPost('id');
			$pages = new PagesModel();
			$get_lastID = $pages->update_data($id, $formdata);
			if (empty($get_lastID)) {
				session()->setFlashdata('Success', 'Page has been Updated');
			}else{
				session()->setFlashdata('Error', 'Pages addpagesdata Error 001');
			}			
			return redirect()->to('edit_pages/'.$id);
		}
		
	}

	public function add_product()
	{
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;
			$model = new CategoriesModel();
			$collection = new AppCollection();
			$data = array();
			
			$data = array(
				'data2' => $model->get_game(),
				'data3' =>  $model->get_apps(),
				'data8' => $collection->fetch(),
			);
			
			$this->adminRender('add_product',$data,'','addproduct');
	}

	public function deltpagesdata()
	{
		$st_id = $this->request->getPost('id');
		$pages = new Pages();
		$rowDelt=$pages->delte($st_id);
		echo $rowDelt;
	}
	public function edit_pages()
	{
		// die("DK");
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;
			$id=$this->request->uri->getSegment(3);
			$pages = new PagesModel();
			$data = $pages->select_data($id);
			
		$this->adminRender('edit_page',$data,'','editpages');
	}
	
	public function edit_banner()
	{
		// die("DK");
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;
			$id=$this->request->uri->getSegment(3);
			$banner = new AppBanner();
			$data = $banner->select_banner($id);
			// print_r($data);
			// die();
			
		$this->adminRender('edit_banner',$data,'','editbanner');
	}

	
	public function editProduct()
	{
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;

		$id=$this->request->uri->getSegment(3);

		// $db = \Config\Database::connect();
        // $query = $db->query('SELECT * FROM app WHERE id = '.$id);
		// $results = $query->getResult();

		$app = new AppModel();
		$data2 = $app->select_data($id);
		$cat_id = '';
		foreach ($data2 as $resulti) {
			$cat_id = $resulti->cat_id;
		}


		
		// $query2 = $db->query('SELECT * FROM screenshots WHERE app_id = '.$id);
		// $data2 = $query2->getResult();

		
		// $model = new CategoriesModel();
		// $data3 = $model->select_cat($id);

		$versions = new AppVersion();
		
		$model = new CategoriesModel();
		// $data3 = $model->select_cat($id);
		$versions = new AppVersion();
		$scrn = new AppScreeshot();

		$collection = new AppCollection();
		// $data4 = $versions->select_version($id);
		$data = array(
			'data2' => $app->select_data($id),
			'data3' => $model->select_cat($cat_id),
			'data4' => $versions->select_version($id),
			'data5' => $scrn->select_screenshot($id),
			'data6' => $model->get_game(),
			'data7' => $model->get_apps(),
			'data8' => $collection->fetch(),
		);

		// return print_r($data);
		$this->adminRender('edit_product',$data);
	}

	public function product()
	{	
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;

		$id=$this->request->uri->getSegment(3);

		// $db = \Config\Database::connect();
        // $query = $db->query('SELECT * FROM app WHERE id = '.$id);
		// $results = $query->getResult();

		$app = new AppModel();
		$data2 = $app->select_data($id);
		$cat_id = '';
		foreach ($data2 as $resulti) {
			$cat_id = $resulti->cat_id;
		}

		
		// $query2 = $db->query('SELECT * FROM screenshots WHERE app_id = '.$id);
		// $data2 = $query2->getResult();

		
		// $model = new CategoriesModel();
		// $data3 = $model->select_cat($id);

		$versions = new AppVersion();
		
		$model = new CategoriesModel();
		// $data3 = $model->select_cat($id);
		$versions = new AppVersion();
		$scrn = new AppScreeshot();
		// $data4 = $versions->select_version($id);
		$data = array(
			'data2' => $app->select_data($id),
			'data3' => $model->select_cat($cat_id),
			'data4' => $versions->select_version($id),
			'data5' => $scrn->select_screenshot($id),
			'data6' => $model->get_game(),
			'data7' => $model->get_apps()
		);

		// return print_r($data);
		$this->adminRender('product',$data);
	}

	public function addProductdata(){
		

		if ($this->request->getMethod()=='post') {
			$formdata=array();
			
			
			$title= $this->request->getPost('title');
			$app_name = strtolower(url_title($title, '-'));
			$type= $this->request->getPost('type');
			$url = $this->request->getPost('url');
			$imgupload = $this->request->getFile('image');
			$image = $this->uploadimg($imgupload);
			$author= $this->request->getPost('author');
			$author_link= $this->request->getPost('author_link');
			
			$cat= $this->request->getPost('cat');
			$price= $this->request->getPost('price');
			$imgupload2 = $this->request->getFileMultiple('screenshot');
			$screenshots = $this->uploadscreenshotmulti($imgupload2);
			

			$rating= $this->request->getPost('rating');
			$last_updated= $this->request->getPost('last_updated');
			$size= $this->request->getPost('size');
			$downloads= $this->request->getPost('downloads');
			$version= $this->request->getPost('version');
			$whatsnew= $this->request->getPost('whatsnew');
			$video_link= $this->request->getPost('video_link');
			$download_link= $this->request->getPost('download_link');
			$description= $this->request->getPost('description');
			$collection= empty($this->request->getPost('collection'))!=''?'':implode(',', $this->request->getPost('collection'));
			$apkuplo = $this->request->getFile('apk');

			$apkupload = $this->uploadimg($apkuplo);
			$datafrom=array();
			$app = new AppModel();

		
			$datafrom['title']=$title;
			$datafrom['app_name']=$app_name;
			$datafrom['type']= $type;
			$datafrom['url']= $url;
			$datafrom['image']= $image;
			$datafrom['author']= $author;
			$datafrom['author_link']=$author_link;
			$datafrom['cat_id']= $cat;
			$datafrom['price']= $price;
			$datafrom['rating']= $rating;
			$datafrom['last_updated']=$last_updated;
			$datafrom['size']= $size;
			$datafrom['downloads']= $downloads;
			$datafrom['version_id']= $version;
			$datafrom['whatsnew']= $whatsnew;
			$datafrom['video_link']=$video_link;
			$datafrom['download_link']= $download_link;
			$datafrom['description']= $description;
			$datafrom['apk_file']= $apkupload;
			$datafrom['collection_id']= $collection;
			
			$app->add_data($datafrom);
			$last_id =$app->insertID();
			$datafromscrnshot=array();
			$appscreenshot = new AppScreeshot();
			foreach($screenshots as $screenshot){
				$datafromscrnshot['app_id']= $last_id;
				$datafromscrnshot['screenshot']= $screenshot;
				$appscreenshot->add_data($datafromscrnshot);
			}
			

		$dataforversions=array();
		$versions = new AppVersion();
		$dataforversions['app_id']= $last_id;
		$dataforversions['version']= $version;
		$versions->add_data($dataforversions);
		
			

			if (!empty($app)) {
				session()->setFlashdata('Success', 'Game/App Added');
			}else{
				session()->setFlashdata('Error', 'Game/App Error Number 001');
			}

			// return print_r($formdata);
			return redirect()->to('add_product');
		}
		
		
	}
	public function uploadscreenshotmulti($files)
	{

		 $newName=array();
		 
		 $data = $this->validate([
		    'uploaimg' => 'uploaded[uploaimg]|max_size[uploaimg,200]'
		]);

		 $count=0;
		if ($data = 1) {
			if ($files) {
				foreach($files as $file){  
						if($file->isValid() && ! $file->hasMoved()){
							$newName[ $count] = $file->getRandomName();
							$file->move(UPLOAD_PATH ,$newName[ $count]);
						}
						$count++;
				}
		}
		return $newName;

	  	}else{
			echo "error";
		}
		
		
	}
	public function editProductdata(){
		// print_r($this->request);
		// exit();
		if ($this->request->getMethod()=='post') {
			$formdata=array();
			
			
			$title= $this->request->getPost('title');
			$app_name = strtolower(url_title($title, '-'));
			$type= $this->request->getPost('type');
			$url = $this->request->getPost('url');
			$imgupload = $this->request->getFile('image');
			$image = $this->uploadimg($imgupload);
			if($image == ''){
				$image = $this->request->getPost('image2');
			}
			$author= $this->request->getPost('author');
			$author_link= $this->request->getPost('author_link');
			$cat= $this->request->getPost('cat');;
			$price= $this->request->getPost('price');
			
			// $screenshot = $this->request->getPost('sss');
			// $imgupload2 = $this->request->getFileMultiple('screenshot');
			// $screenshots = $this->uploadscreenshotmulti($imgupload2);
			
			// $asize= $this->request->getPost('asize');
			
			// // $scr_id = $this->request->getPost('scr_id');
			
			//   return print_r($screenshot);
			  
			// for($i=0;$i<$asize;$i++){
			// 	$datafromscrnshot=array();
			// 	$appscreenshot = new AppScreeshot();
			// 	// foreach($screenshots as $screenshot){
			// 		echo $scr_id = $this->request->getPost('scr_id'.$i);
			// 		// $datafromscrnshot['id'] =$screenshots[0];
			// 		$datafromscrnshot['screenshot'] =$screenshots[$i];
			// 		// $scr= $screenshot->screenshot;

			// 		$appscreenshot->update_data($scr_id, $datafromscrnshot);
			// 	// }
			// }

			// return print_r($asize);

			$rating= $this->request->getPost('rating');
			$last_updated= $this->request->getPost('last_updated');
			$size= $this->request->getPost('size');
			$downloads= $this->request->getPost('downloads');
			$version= $this->request->getPost('version');
			$whatsnew= $this->request->getPost('whatsnew');
			$video_link= $this->request->getPost('video_link');
			$download_link= $this->request->getPost('download_link');
			$description= $this->request->getPost('description');
			$last_updated= $this->request->getPost('last_updated');
			// return  $this->request->getPost('collection');
			$collection= empty($this->request->getPost('collection'))!=''?'':implode(',', $this->request->getPost('collection'));
			$id= $this->request->getPost('id');
			
			$apkuplo = $this->request->getFile('apk');
			$apkupload = $this->uploadimg($apkuplo);
			if($apkupload == ''){
				$apkupload = $this->request->getPost('apk2');
			}
			$datafrom=array();
			$app = new AppModel();

		
			$datafrom['title']=$title; 
			$datafrom['app_name']=$app_name; 
			$datafrom['type']= $type;
			$datafrom['url']= $url;
			$datafrom['image']= $image;
			$datafrom['author']= $author;
			$datafrom['author_link']=$author_link;
			$datafrom['cat_id']= $cat;
			$datafrom['price']= $price;
			$datafrom['rating']= $rating;
			$datafrom['last_updated']=$last_updated;
			$datafrom['size']= $size;
			$datafrom['downloads']= $downloads;
			$datafrom['version_id']= $version;
			$datafrom['whatsnew']= $whatsnew;
			$datafrom['video_link']=$video_link;
			$datafrom['download_link']= $download_link;
			$datafrom['description']= $description;
			$datafrom['apk_file']= $apkupload;
			$datafrom['collection_id']= $collection;
			$datafrom['last_updated']= $last_updated;
				
			// $app->add_data($datafrom);
			
			$app->update_data($id, $datafrom);
			// $last_id =$app->insertID();
	
			// return print_r($id);
			
			
			
			

		$dataforversions=array();
		$versions = new AppVersion();
		$dataforversions['app_id']= $id;
		$dataforversions['version']= $version;
		$versions->add_data($dataforversions);
			// $get_lastID = $products->updatedata($formdata,$productID);
			if (!empty($app)) {
				session()->setFlashdata('Success', 'Product Updated');
			}else{
				session()->setFlashdata('Error', 'Product Editing Error');
			}			
			return redirect()->to('products');
		}
		
		
	}

	public function editCategorydata(){
		// print_r($this->request);
		// exit();
		if ($this->request->getMethod()=='post') {
			$formdata=array();
			
			$id= $this->request->getPost('id');
			$cat_name= $this->request->getPost('cat_name');
			$type= $this->request->getPost('type');
			
			$imgupload = $this->request->getFile('cat_image');
			$cat_image = $this->uploadimg($imgupload);
			if($cat_image == ''){
				$cat_image = $this->request->getPost('image2');
			}

			$datafrom=array();
			$category = new CategoriesModel();

		
			$datafrom['id']=$id; 
			$datafrom['cat_name']= $cat_name;
			$datafrom['type']= $type;
			
			$datafrom['cat_image']= $cat_image;
						
			$category->update_data($id, $datafrom);
			
			if (!empty($category)) {
				session()->setFlashdata('Success', 'Category Updated');
			}else{
				session()->setFlashdata('Error', 'Category Editing Error');
			}			
			return redirect()->to('categories');
		}
		
		
	}

	public function editCollectiondata(){
		// print_r($this->request);
		// exit();
		if ($this->request->getMethod()=='post') {
			$formdata=array();
			
			$id= $this->request->getPost('id');
			$collection_name= $this->request->getPost('collection_name');
			$slug = strtolower(url_title($collection_name, '-'));
			$imgupload = $this->request->getFile('image');
			$image = $this->uploadimg($imgupload);
			if($image == ''){
				$image = $this->request->getPost('image2');
			}
			
			

			$datafrom=array();
			$AppCollection = new AppCollection();

		
			// $datafrom['id']=$id; 
			$datafrom['collection_name']= $collection_name;
			$datafrom['slug']= $slug;
			$datafrom['image']= $image;
				
			$AppCollection->update_data($id, $datafrom);
			
			if (!empty($AppCollection)) {
				session()->setFlashdata('Success', 'Collection Updated');
			}else{
				session()->setFlashdata('Error', 'Collection Editing Error');
			}			
			return redirect()->to('collection');
		}
		
		
	}

	public function editBannerdata(){
		// print_r($this->request);
		// exit();
		if ($this->request->getMethod()=='post') {
			$formdata=array();
			
			$id= $this->request->getPost('id');
			$heading= $this->request->getPost('heading');
			$location = $this->request->getPost('location');
			$link= $this->request->getPost('link');
			
			$imgupload = $this->request->getFile('image');
			$image = $this->uploadimg($imgupload);
			if($image == ''){
				$image = $this->request->getPost('image2');
			}

			$datafrom=array();
			$category = new AppBanner();

		
			$datafrom['id']=$id; 
			$datafrom['heading']= $heading;
			$datafrom['location']= $location;
			$datafrom['link']= $link;
			
			$datafrom['image']= $image;
						
			$category->update_data($id, $datafrom);
			
			if (!empty($category)) {
				session()->setFlashdata('Success', 'Banner Updated');
			}else{
				session()->setFlashdata('Error', 'Banner Editing Error');
			}			
			return redirect()->to('banner');
		}
		
	}


	public function deleteproduct($id){
		
		$delete = '1';
		$date = date_create()->format('Y-m-d H:i:s');
		
		$datafrom=array();
		$datafrom['deleted']= $delete;
		$datafrom['deleted_at']= $date;

			
		$app = new AppModel();			

		$app->update_data($id, $datafrom);


			
			// $app->delete_data($id);
		// echo $id;
		// exit();
		
			if (!empty($app)) {
				session()->setFlashdata('Success', 'Product Deleted');
			}else{
				session()->setFlashdata('Error', 'Product Deleting Error');
			}			
			return redirect()->to(base_url().'/admin/products');
		
	}

	public function deletecategory($id){
		
		$delete = '1';
		$date = date_create()->format('Y-m-d H:i:s');
		
		$datafrom=array();
		$datafrom['deleted']= $delete;
		$datafrom['deleted_at']= $date;

			
		$category = new CategoriesModel();			

		$category->update_data($id, $datafrom);


			
			// $app->delete_data($id);
		// echo $id;
		// exit();
		
			if (!empty($category)) {
				session()->setFlashdata('Success', 'Category Deleted');
			}else{
				session()->setFlashdata('Error', 'Category Deleting Error');
			}			
			return redirect()->to(base_url().'/admin/categories');
		
	}

	public function deletecollection($id){
		
		$delete = '1';
		$date = date_create()->format('Y-m-d H:i:s');
		
		$datafrom=array();
		$datafrom['deleted']= $delete;
		$datafrom['deleted_at']= $date;

			
		$colletion = new AppCollection();			

		$colletion->update_data($id, $datafrom);


			
			// $app->delete_data($id);
		// echo $id;
		// exit();
		
			if (empty($category)) {
				session()->setFlashdata('Success', 'Collection Deleted');
			}else{
				session()->setFlashdata('Error', 'Collection Deleting Error');
			}			
			return redirect()->to(base_url().'/admin/collection');
		
	}

	public function deletescreenshot($id, $id2){
		// die($id2);
		$delete = '1';
		$date = date_create()->format('Y-m-d H:i:s');
		
		$datafrom=array();
		$datafrom['deleted']= $delete;
		$datafrom['deleted_at']= $date;

			
		$scr = new AppScreeshot();			

		$scr->update_data($id2, $datafrom);


			
			// $app->delete_data($id);
		// echo $id;
		// exit();
		
			if (!empty($scr)) {
				session()->setFlashdata('Success', 'AppScreeshot Deleted');
			}else{
				session()->setFlashdata('Error', 'AppScreeshot Deleting Error');
			}			
			return redirect()->to(base_url().'/admin/editproduct/'.$id);
		
	}

	public function deletepages($id){
		
		$delete = '1';
		$date = date_create()->format('Y-m-d H:i:s');
		
		$datafrom=array();
		$datafrom['deleted']= $delete;
		$datafrom['deleted_at']= $date;

			
		$pages = new PagesModel();			

		$pages->update_data($id, $datafrom);


			
			// $app->delete_data($id);
		// echo $id;
		// exit();
		
			if (!empty($pages)) {
				session()->setFlashdata('Success', 'Pages Deleted');
			}else{
				session()->setFlashdata('Error', 'Pages Deleting Error');
			}			
			return redirect()->to(base_url().'/admin/pages');
		
	}

	public function addProductSlug($productname)
	{
		  return str_replace(" ", "-", $productname);
	}
	public function products()
	{	
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;
		// $get =array();
		$model = new AppModel();
		$data = $model->fetch();

		// print_r($results);
		// $products = new Products();
		// $get = $products->get();
		$this->adminRender('view_products',$data,'','','','viewproduct');
	}
	public function delProd(){
		$st_id = $this->request->getPost('id');
		$products = new Products();
		$rowDelt=$products->delte($st_id);
		echo $rowDelt;
	}
	public function prodetails(){
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;

		$id= $this->request->getPost('id');
		$products = new Products();
		$result=$products->getbyid($id);
		echo view('admin/pages/product_details',array('data' =>$result));

	}
	public function categories()
	{
		if(empty($this->session->get('logged_in'))) return redirect('admin/login');
		
		$model = new CategoriesModel();
		$data = $model->fetch();
		$this->adminRender('categories',$data,'','viewcategory');
		
	}

	public function collection()
	{
		if(empty($this->session->get('logged_in'))) return redirect('admin/login');
		// die("DK");
		$model = new AppCollection();
		$data = $model->fetch();
		// print_r($data);
		// die();	
		$this->adminRender('collection',$data,'','viewcollection');
		
	}

	public function editcategory(){
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;
		$id=$this->request->uri->getSegment(3);

		$model = new CategoriesModel();
		$data3 = $model->select_cat($id);

		// return print_r($results2);
		$this->adminRender('edit_category', $data3);
		
		// return redirect()->to('editcategory');

	}

	public function edit_collection(){
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;
		$id=$this->request->uri->getSegment(3);

		$model = new AppCollection();
		$data3 = $model->select_collection($id);

		// return print_r($data3);
		$this->adminRender('edit_collection', $data3);
		
		// return redirect()->to('editcategory');

	}

	
	public function addCategories(){
		if(empty($this->session->get('logged_in'))) return redirect('admin/login');
		
		if ($this->request->getMethod()=='post') {
			
			$cat_name = $this->request->getPost('cat_name');
			$type = $this->request->getPost('type');
			$imgupload = $this->request->getFile('cat_image');
			$cat_image = $this->uploadimg($imgupload);
			
			$datafrom=array();
			$categories = new CategoriesModel();
			$datafrom['cat_name']=$cat_name; 
			$datafrom['type']= $type;
			$datafrom['cat_image']= $cat_image;
			
			
			// print_r($categories);
			// exit();
			$categories->set_data($datafrom);
			// print_r($categories);
			// exit();
			
			if (!empty($categories)) {
					session()->setFlashdata('Success', 'Category Added');
				}else{
					session()->setFlashdata('Error', 'Category Error Number 002');
				}	
			return redirect('admin/categories');
		}
	}


	public function addCollection(){
		if(empty($this->session->get('logged_in'))) return redirect('admin/login');
		
		if ($this->request->getMethod()=='post') {
			
			$collection_name = $this->request->getPost('collection_name');
			$slug = strtolower(url_title($collection_name, '-'));
			
			
			$datafrom=array();
			$categories = new AppCollection();
			$datafrom['collection_name']=$collection_name; 
			$imgupload = $this->request->getFile('image');
			$datafrom['image'] = $this->uploadimg($imgupload);
			$datafrom['slug']=$slug; 
			
			
			// print_r($categories);
			// exit();
			$categories->add_data($datafrom);
			// print_r($categories);
			// exit();
			
			if (empty($collection)) {
					session()->setFlashdata('Success', 'Collection Added');
				}else{
					session()->setFlashdata('Error', 'Collection Error Number 002');
				}	
			return redirect('admin/collection');
		}
	}

	public function setCollectionFeatured(){
		$id = $this->request->getPost('i');
		$value = $this->request->getPost('v')==0?'1':'0';
		$col = new AppCollection();
		$formdata=array('featured' => $value );
		print_r($formdata);
		$returnData=$col->setFeatured($id,$formdata);
		echo $returnData;
	}

	public function delcat(){
		$st_id = $this->request->getPost('id');
		$storre = new Categories();
		$rowDelt=$storre->delte($st_id);
		echo $rowDelt;
	}
	public function setFeaturedCategories(){
		$id = $this->request->getPost('id');
		$value = $this->request->getPost('v')==0?'1':'0';
		$storre = new Categories();
		$formdata=array('featured' => $value );
		$returnData=$storre->setFeatured($id,$formdata);
		echo $returnData;
	}


	public function matchCategory(){
		$getinput= $this->request->getPost('getinput');
		$categories = new Categories();
	  	$count = $categories->findcat($getinput);
	  	$checkname=0;
	  	if ($count>=1) {
			$checkname=1;
		}else{
			$checkname=0;
		}
		echo $checkname;
	}

	public function stores()
	{
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;

		$stores = new Vendors();
		$get = $stores->get();
		$this->adminRender('stores',$get,'','viewstore');

	}	
	public function addvendors(){
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;
		$formdata=array();
		$formdata['name']= $this->request->getPost('vendname');
		$formdata['url']= $this->request->getPost('vendurl');
		$formdata['slug']= strtolower(url_title($formdata['name'], '-'));
		$brands = new Vendors();
		$get_lastID=$brands->add($formdata);
		if (!empty($get_lastID)) {
				session()->setFlashdata('Success', 'Strored Added');
			}else{
				session()->setFlashdata('Error', 'ADD store Error Number 005');
			}
		return redirect('admin/stores');

	}
	public function matchStores(){
		$getinput= $this->request->getPost('getinput');
		$categories = new Vendors();
	  	$count = $categories->findcat($getinput);
	  	$checkname=0;
	  	if ($count>1) {
			$checkname=1;
		}else{
			$checkname=0;
		}
		echo $checkname;
	}
	public function editStore(){
		$formdata=array();
		$formdata['name']= $this->request->getPost('name');
		$formdata['url'] = $this->request->getPost('urls');
		$formdata['slug']= strtolower(url_title($formdata['name'], '-'));
		$st_id = $this->request->getPost('id');
		$storre = new Vendors();
		// print_r($formdata);
		// exit();
		$updatingdata=$storre->edit($st_id,$formdata);
		echo $updatingdata;
	}
	public function delStore(){
		$st_id = $this->request->getPost('id');
		$storre = new Vendors();
		$rowDelt=$storre->delte($st_id);
		echo $rowDelt;
	}
	public function brands()
	{
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;

		$this->session = \Config\Services::session();
		$brands = new Brands();
		$get = $brands->get();
		$this->adminRender('brands',$get,'','viewbrands');
		
	}
	public function delBrands(){
		$st_id = $this->request->getPost('id');
		$Brands = new Brands();
		$rowDelt=$Brands->delte($st_id);
		echo $rowDelt;
	}
	public function editBrands(){
		$formdata=array();
		$formdata['name']= $this->request->getPost('name');
		$formdata['slug']= strtolower(url_title($formdata['name'], '-'));
		$st_id = $this->request->getPost('id');
		$Brands = new Brands();
		$updatingdata=$Brands->edit($st_id,$formdata);
		echo $updatingdata;
	}
	public function addbrands(){
		
		if ($this->request->getMethod()=='post') {
			$formdata=  array();
			$brands = new Brands();
			$formdata['name']= $this->request->getPost('brandname');
			$formdata['slug']= strtolower(url_title($formdata['name'], '-'));
			$get_lastID = $brands->add($formdata);
			if (!empty($get_lastID)) {
				session()->setFlashdata('Success', 'Branded Added');
			}else{
				session()->setFlashdata('Error', 'ADD Brand Error Number 003');
			}	
			return  redirect('admin/brands');
		}
	}
	public function matchBrands(){
		$getinput= $this->request->getPost('getinput');
		$categories = new Brands();
	  	$count = $categories->findcat($getinput);
	  	$checkname=0;
	  	if ($count>1) {
			$checkname=1;
		}else{
			$checkname=0;
		}
		echo $checkname;
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

	public function login()
	{
		if($this->session->get('logged_in'))  return redirect('admin');
        echo view('admin/pages/login');

	}
	public function userlogin()
	{	

		$lgnpass= $this->request->getPost('lgnpass');
		$lgnname= $this->request->getPost('lgnname');
		$login = new Login();
		$data = $login->getWhere($lgnname,$lgnpass);
		// $message='<div class="sccms">Username Password Wrong</div>';
		
		$userCount=count($data);
		if($userCount > 0){
			$this->session->start();
			foreach ($data as $row) {
				$userdata = array(
			        'id'  => $row->id,
			        'username'  => $row->username,
			        'email'     => $row->email,
			        'logged_in' => TRUE
			);

			$this->session->set($userdata);
			}
			return  redirect('admin/dashborad');
		}	
		else{
			session()->setFlashdata('msg', 'Something Wrong!');
			return  redirect()->to('admin/login');
		}
	}
	public function logout(){
		session_destroy();
		return  redirect('admin/login');
	}
	public function profile()
	{
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;
		$this->adminRender('profile');
	}
	public function pages()
	{
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;
		$pages = new PagesModel();
		$get = $pages->fetch();
		$this->adminRender('pages',$get);
	}
	public function setting()
	{
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;
		$settings = new AppSetting();
		$data = $settings->fetch();
		// print_r($data);
		// die();
		$this->adminRender('setting', $data);
	}

	public function banner()
	{
		if(empty($this->session->get('logged_in'))) return redirect('admin/login') ;
		
		$model = new AppBanner();
		// $data= $scraper->fetch_collections();
		// return print_r($data);
		$data = $model->fetch();
		// return print_r($data);

		
		$this->adminRender('banner',$data,'','banner');
	}

	public function banner_data(){
		if(empty($this->session->get('logged_in'))) return redirect('admin/login');
		
		if ($this->request->getMethod()=='post') {
			
			$heading = $this->request->getPost('heading');
			$link = $this->request->getPost('link');
			$location = $this->request->getPost('location');
			$imgupload = $this->request->getFile('image');
			$image = $this->uploadimg($imgupload);
			
			$datafrom=array();
			$banner = new AppBanner();
			$datafrom['heading']=$heading; 
			$datafrom['link']= $link;
			$datafrom['location']= $location;
			$datafrom['image']= $image;
			
			
			// print_r($categories);
			// exit();
			$banner->add_data($datafrom);
			// print_r($categories);
			// exit();
			
			if (!empty($banner)) {
					session()->setFlashdata('Success', 'Banner Added');
				}else{
					session()->setFlashdata('Error', 'Banner Error Number 002');
				}	
			return redirect('admin/banner');
		}
	}

	public function update_setting()
	{
		if ($this->request->getMethod()=='post') {
			$formdata=  array();
			$setting = new AppSetting();
			
			$formdata['title']= $this->request->getPost('title');
			$formdata['footer']= $this->request->getPost('footer');
			//logo images upload
			$logoimgupload = $this->request->getFile('logo');
			$logoimguploadname=$this->uploadimgsetting($logoimgupload);
			$formdata['logo']= empty($logoimguploadname)?$this->request->getPost('logo2'):$logoimguploadname;
			//favicon images upload
			$faviconimgupload = $this->request->getFile('favicon');
			$faviconimguploadname=$this->uploadimgsetting($faviconimgupload);
			$formdata['favicon']= empty($faviconimguploadname)?$this->request->getPost('favicon2'):$faviconimguploadname;
			
			$formdata['facebook']= $this->request->getPost('facebook');
			$formdata['twitter']= $this->request->getPost('twitter');
			$formdata['youtube']= $this->request->getPost('youtube');
			$currentID= 1;
			$update_check =$setting->updateSetting($currentID, $formdata);
			if (empty($update_check)) {
				session()->setFlashdata('Success', 'Settings Updated');
			}else{
				session()->setFlashdata('Error', 'Error in update_setting ');
			}	
			return  redirect('admin/setting');
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
	public function admin()
	{
		// echo 'dadsad';
		return redirect('dashborad');
	}
	public function adminRender($page, $data='', $message='', $pagemenu='')
	{
		// $data['page_title'] = 'title';
		$head = view('admin/templetes/head');
		$nav = view('admin/templetes/nav');
		$sidbar = view('admin/templetes/sidbar', array('pagemenu'=> $pagemenu));
		$footer = view('admin/templetes/footer');
		$content=view('admin/pages/'.$page, array('data'=> $data, 'message'=> $message));
        echo view('admin/index',array('head' => $head ,'nav' => $nav ,'sidbar' => $sidbar ,'content' => $content,'footer' => $footer));

	}
	
}
