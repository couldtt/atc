<?php if ( ! defined('IN_DiliCMS')) exit('No direct script access allowed');

	class Login extends Dili_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->settings->load('backend');
			//设置session参数
			$this->config->set_item('sess_cookie_name' ,'dili_session');
			$this->config->set_item('sess_expiration' , 7200);
			$this->config->set_item('sess_expire_on_close' ,FALSE);
			$this->config->set_item('sess_encrypt_cookie' ,FALSE);
			$this->config->set_item('sess_use_database' ,TRUE);
			$this->config->set_item('sess_table_name' ,'dili_sessions')	;
			$this->config->set_item('sess_match_ip' ,FALSE)	;
			$this->config->set_item('sess_match_useragent' ,TRUE)	;
			$this->config->set_item('sess_time_to_update' ,300)	;
			
			$this->load->library('session');
			$this->load->switch_theme('on',setting('backend_theme'),'membercp/');
			$this->load->database();
			$this->load->model('dili/member_mdl');
		}
		
		function index()
		{
			if( $this->session->userdata('memberid') )
			{
				redirect('member/home');
			}
			else
			{
				$this->load->view('sys_login');	
			}
		}

		function check(){
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			echo $username;
			echo "<br />";
			echo $password;
		}
		
		function quit()
		{
			$this->session->sess_destroy();
			redirect('member/login');
		}
		
		function _do_post()
		{
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			
			if($username && $password)
			{
				$member = $this->member_mdl->get_member_by_name( $username );
				if($member)
				{
					if( $member->password == md5($password) )
					{
							$this->session->set_userdata('memberid',$member->id);
							redirect(site_url('member/home'));
					}
					else
					{
						$this->session->set_flashdata('error', "密码不正确!");
						redirect('member/login');
					}
				}
				else
				{
					$this->session->set_flashdata('error', '不存在的用户!');
					redirect('member/login');	
				}
			}
			else
			{
				$this->session->set_flashdata('error', '用户名和密码不能为空!');
				redirect('member/login');
			}
			
		}
		
	}
