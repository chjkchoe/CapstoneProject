<?php
Class Register extends MY_controller{

	function index()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
        $this->insert();

	}
    public function insert()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('phone','phone','required|numeric');
        $this->form_validation->set_rules('address','address','required');
        if ($this->form_validation->run())
        {
            $register=$this->User_model->insertdata($_POST);
            if($register){
                echo "<script>alert('added Sucessfully')</script>";
            }
        }
        $data['title']="Registration";
        $this->load->view('site/register/index',$data);

    }

}