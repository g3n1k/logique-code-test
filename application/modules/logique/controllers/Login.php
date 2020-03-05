<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {
	
	public function __construct(){
	
        parent::__construct();
        
    }
    
    // form 
	public function index(){
		
        $data = ['word'=>"hello world ", 'status'=>$this->input->get('s')];

        
        $data['include_script'] = inc_script(
			array(
		        "application/modules/logique/js/login.js"
            )
        );
        
        $this->load->view('login', $data);
    }
    
    // validate login
    public function enter(){

        $_p['email'] = $this->input->post('email');
        
        $_p['pass'] = md5($this->input->post('pass'));

        $this->load->model('foo/foo_m');
        
        $_a = $this->foo_m->__select('user', '*', $_p, false);
        
        if (isset($_a->user_id)) {
            
            // set session
            $this->load->library('session');
            $this->session->set_userdata((array) $_a);


            redirect(base_url().'logique/index/'.$_a->user_id);

        }
        else redirect(base_url().'logique/login/?s=error');
    }

}
