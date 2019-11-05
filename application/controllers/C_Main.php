<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Main extends CI_Controller {
	// function index(){
	// 	$this->load->view('template/header');
	// 	$this->load->view('V_Login');
	// }

	function index(){
		$jsonInsta =  $this->getFeed();
		$pathGambar = $jsonInsta->graphql->user->edge_owner_to_timeline_media->edges;
		$arrGambar= array();
		foreach ($pathGambar as $key=>$value) {
			$arrGambar[] =$value->node->thumbnail_resources[2]->src;
		}
		$data['gambar']=$arrGambar;

		$this->load->model('ContentImage');
		$data['home_background'] = $this->ContentImage->get('home_background');
		$data['visi_misi'] = $this->ContentImage->get('visi_misi');

		$this->load->model('ContentText');
		$data['home_content'] = $this->ContentText->get('home');
		// print_r($data);
		// return;


		$this->load->view('template/header');
		$this->load->view('template/topbar');
		$this->load->view('V_Main',$data);
		$this->load->view('template/footer');
	}


	function prosesLogin(){

		if($_POST["id"]=="ahs" && $_POST["pass"]=="developmentahs"){
			redirect("main");
		}
		else{
			redirect("/");
		}
	}

	function mainPage(){
		$jsonInsta =  $this->getFeed();
		$pathGambar = $jsonInsta->graphql->user->edge_owner_to_timeline_media->edges;
		$arrGambar= array();
		foreach ($pathGambar as $key=>$value) {
			$arrGambar[] =$value->node->thumbnail_resources[2]->src;
		}
		$data['gambar']=$arrGambar;

		$this->load->model('ContentImage');
		$data['home_background'] = $this->ContentImage->get('home_background');
		$data['visi_misi'] = $this->ContentImage->get('visi_misi');

		$this->load->model('ContentText');
		$data['home_content'] = $this->ContentText->get('home');
		// print_r($data);
		// return;


		$this->load->view('template/header');
		$this->load->view('template/topbar');
		$this->load->view('V_Main',$data);
		$this->load->view('template/footer');
	}
	//about us page
	function aboutUs(){
		$this->load->model('ContentImage');
		$data['bg_about_us'] = $this->ContentImage->get('bg_about_us');
		$data['about_us_1'] = $this->ContentImage->get('about_us_1');
		$data['about_us_2'] = $this->ContentImage->get('about_us_2');
		$data['about_us_3'] = $this->ContentImage->get('about_us_3');

		$this->load->model('ContentText');
		$data['about_us_content'] = $this->ContentText->get('about us');

		// print_r($data);
		// return;
		$this->load->view('template/header');
		$this->load->view('template/topbar');
		$this->load->view('V_aboutUs', $data);
		$this->load->view('template/footer');
	}
	//eco-friendly page
	function ecoFriendly(){

		$this->load->model('ContentImage');
		$data['bg_eco'] = $this->ContentImage->get('bg_eco');

		$this->load->model('ContentText');
		$data['eco_friendly_content'] = $this->ContentText->get('eco-friendly');

		$this->load->view('template/header');
		$this->load->view('template/topbar');
		$this->load->view('V_EcoFriendly',$data);
		$this->load->view('template/footer');
	}
	//product page
	function product(){

		$this->load->model('ContentImage');
		$data['bg_product'] = $this->ContentImage->get('bg_product');
		$data['facial'] = $this->ContentImage->get('facial');
		$data['pop_up'] = $this->ContentImage->get('pop_up');
		$data['napkin'] = $this->ContentImage->get('napkin');
		$data['refill'] = $this->ContentImage->get('refill');
		$data['roll'] = $this->ContentImage->get('roll');

		$this->load->model('ContentText');
		$data['products_content'] = $this->ContentText->get('products');

		$this->load->view('template/header');
		$this->load->view('template/topbar');
		$this->load->view('V_Product',$data);
		$this->load->view('template/footer');
	}
	//license page
	function license(){

		$this->load->model('ContentImage');
		$data['bg_product'] = $this->ContentImage->get('bg_product');
		$data['disney'] = $this->ContentImage->get('disney');
		$data['others'] = $this->ContentImage->get('others');
		$this->load->view('template/header');
		$this->load->view('template/topbar');
		$this->load->view('V_License',$data);
		$this->load->view('template/footer');
	}
	//get insta feed without instagram API
	function getFeed(){
		$username = 'alamhijauselaras__';
		$instaResult = file_get_contents('https://www.instagram.com/'.$username.'/?__a=1');
		$insta = json_decode($instaResult);
		return($insta);
	}
	//get insta feed using instagram API
	function getInstaFeed(){
		if(isset($_GET["code"])){
			if($this->session->flashdata('code')!=$_GET["code"]){
				
				$this->session->set_flashdata('code', $_GET["code"]);
				$instagram_parameter = array(
					"client_id" => '8344216527b742a1bdac2e8a3b2d5fc0',
					"client_secret" => '13eda11ac665492b8406eccaf247abdd',
					"redirect_uri" => 'http://www.ahs.co.id/C_Main/test',
					"grant_type" => "authorization_code",
					"code" => $_GET["code"]
				);
				echo '<pre>';
				$curl = curl_init('https://api.instagram.com/oauth/access_token');
				curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
				curl_setopt($curl, CURLOPT_POSTFIELDS,$instagram_parameter);
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,FALSE);
				$result = curl_exec($curl);
				curl_close($curl);
				$finalResult = json_decode($result);
				$curl = curl_init('https://api.instagram.com/v1/users/self/media/recent/?access_token='.$finalResult->access_token);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,FALSE);
				$mediaResult = curl_exec($curl);
				curl_close($curl);
				$finalMediaResult = json_decode($mediaResult);
				//print_r($finalMediaResult->data[0]->images->standard_resolution->url);
				$path = $finalMediaResult->data[1]->images->standard_resolution->url;
				return $path;
			}
			else{
				header('Location:'.'https://api.instagram.com/oauth/authorize/?client_id=8344216527b742a1bdac2e8a3b2d5fc0&redirect_uri=http://www.ahs.co.id/C_Main/test&response_type=code&scope=public_content');

			}
			
		}else{
			header('Location:'.'https://api.instagram.com/oauth/authorize/?client_id=8344216527b742a1bdac2e8a3b2d5fc0&redirect_uri=http://www.ahs.co.id/C_Main/test&response_type=code&scope=public_content');
		}
	}
}
?>