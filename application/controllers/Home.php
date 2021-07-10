<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');


	}

	public function index()
	{
		$data['title'] = 'Path Case Seçimi';
		$this->load->view('include/header', $data);
		$this->load->view('index');
		$this->load->view('include/footer');
	}

	public function case_1()
	{
		$data['title'] = 'Path Case 1 - Yazılım Temelleri, PHP ve Algoritma';
		$this->load->view('include/header', $data);
		$this->load->view('case_1');
		$this->load->view('include/footer');
	}

	public function case_2()
	{
		$data['title'] = 'Path Case 2 - API Kullanımı ve Front-End';
		$this->load->view('include/header', $data);
		$this->load->view('case_2');
		$this->load->view('include/footer');
	}

	public function word_order()
	{
		$word = trim($this->input->get("word",TRUE));
		$new_word_ = $this->slugify($word);
		$new_word = str_replace('-', '', $new_word_);
		// string kontrolü
		if (ctype_alpha($new_word)) {
			$words = $this->explode($word);
			$orders = $this->order($words);
			$response = array("message" => " Kelimeler Sıralanmıştır.", "type" => "success", "order" => array("old_order" => "Girilen Metin :".$word, "new_order" => "Sıralanmış Metin : ".$orders));
		} else {
			$response = array("message" => "Yanlış Parametre Girdiniz.", "type" => "danger", "order" => array("old_order" => '', "new_order" => ''));
		}

		$this->session->set_flashdata('response', $response);
		redirect(base_url() . "home/case_1");
	}

	public function slugify($text) {
    $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
    $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
    $text = strtolower(str_replace($find, $replace, $text));
    $text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
    $text = trim(preg_replace('/\s+/', ' ', $text));
    $text = str_replace(' ', '-', $text);

    return $text;
}
	private function explode($string)
	{
		$string = explode(' ', $string);
		return $string;

	}

	private function order($array)
	{


		foreach ($array as $word) {
			$temp_array [] = $this->mb_strrev($word);

		}
		sort($temp_array);
		$str = '';
		foreach ($temp_array as $key => $word) {
			if (!empty($word))
				$str .= '"' . $this->mb_strrev($word) . ($key + 1 == count($temp_array) ? '"' : '",');

		}
		$str = '[' . $str . ']';

		return $str;

	}

	//UTF-8 destekli, karakter kodlama destekli tersine çevirme işlemi yapar;
	private function mb_strrev($str)
	{
		$r = '';
		for ($i = mb_strlen($str); $i >= 0; $i--) {
			$r .= mb_substr($str, $i, 1);
		}
		return $r;
	}
}
