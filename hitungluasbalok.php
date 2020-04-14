<?php

class Bangun extends CI_Controller
{
	function index()
	{
		$data['p']=(int)$this->input->post('p',true);
		$data['l']=(int)$this->input->post('l',true);
		$data['t']=(int)$this->input->post('t',true);
		$data['hasil']=(2*$data['p']*$data['l'])+(2*$data['p']*$data['l'])+(2*$data['l']*$data['t']);
		$this->load->view('luasbalok',$data);
	}
}
