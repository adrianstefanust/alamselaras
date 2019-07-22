<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$jsonInsta =  $this->getFeed();
		$pathGambar = $jsonInsta->graphql->user->edge_owner_to_timeline_media->edges;
		$arrGambar= array();
		foreach ($pathGambar as $key=>$value) {
			$arrGambar[] =$value->node->thumbnail_resources[2]->src;
		}
		$data['gambar']=$arrGambar;
		$this->load->view('template/header');
		//$this->load->view('template/topbar');
		$this->load->view('V_Main',$data);
		$this->load->view('template/footer');
	}
	
	//get insta feed without instagram API
	public function getFeed(){
		$username = 'testing1179';
		$instaResult = file_get_contents('https://www.instagram.com/'.$username.'/?__a=1');
		$insta = json_decode($instaResult);
		return($insta);
	}
	//get insta feed using instagram API
    public function getInstaFeed(){
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
