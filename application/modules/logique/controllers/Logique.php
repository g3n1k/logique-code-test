<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logique extends MX_Controller {
	
	public function __construct(){
	
        parent::__construct();
        
        $this->masterpage->setMasterPage(get_option('template') );
	}
	
	public function index($id = 1){

        $this->load->library('session');
       
        if(! $this->session->userdata('user_id') ) redirect(base_url().'logique/login/?s=error');
        
        $this->load->model('foo/foo_m');
        
        $_a = $this->foo_m->__select('user', '*', ['user_id'=>$id], false);

		$data = ['word'=>"<h1>Hallo ".$_a->f_name." ".$_a->l_name.'</h1>'];
		
        $this->masterpage->addContentPage('foo_index', 'contentmain', $data);
	
		$this->masterpage->show( );
    }

    public function logout(){
        
        $this->session->sess_destroy();

        redirect(base_url().'logout');
    }

}
