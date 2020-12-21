<?php
/*
 * @Author: deng.wulin@mdb-fintech.com
 * @Date: 2020-12-21 14:20:13
 * @Description: file content
 */
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * @author rdisme
 * 欢迎页
 */
class Welcome extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$data = array();
		// 用户当前信息
		$data['userinfo'] = $this->userinfo;
		$data['binding_total_num'] = 0;
		$this->load->view('welcome',$data);
	}


}