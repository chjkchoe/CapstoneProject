<?php
Class Login extends MY_controller{

	function index()
	{


		$this->load->library('form_validation');
		$this->load->helper('form');
		if($this->input->post())
		{
			$this->form_validation->set_rules('login' ,'login', 'callback_check_login');
			if($this->form_validation->run())
			{
				
        $this->session->set_userdata('user_login', true);



				redirect(base_url('home'));
			}
		}

		$this->load->view('site/login/index');
	}

    /*
     * Kiem tra username va password co chinh xac khong
     */
    function check_login()
    {
    	$email = $this->input->post('email');
    	
    	$password = $this->input->post('password');

    	$password = md5($password);


    	$this->load->model('user_model');
    	$where = array('email' => $email , 'password' => $password);
    	if($this->user_model->check_exists($where))
    	{
          $this ->session ->set_userdata('userInfo',$email) ;
           echo 'dang nhap thanh cong';

           return true;
       }
       $this->form_validation->set_message(__FUNCTION__, 'Không đăng nhập thành công');
       return false;
   }


   
}