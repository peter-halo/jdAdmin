<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * @Author: deng.wulin@mdb-fintech.com
 * @Date: 2020-12-21 15:30:57
 * @Description: file content
 */
class JDAccount extends MY_Controller
{

	private $curr_page; // 当前页码


	public function __construct()
	{
		parent::__construct();
		$this->curr_page = $this->input->get('curr_page');
		$this->curr_page = intval($this->curr_page);
	}


	// 管理员列表
	public function index()
	{
		$data = array();
		// 用户当前信息
		$data['userinfo'] = $this->userinfo;
		// 用户列表
		$data['list'] = $this->user->getRows();
		$this->load->view('useradmin/list',$data);
    }
    
}