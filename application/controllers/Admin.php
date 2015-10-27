<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->view('admin/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/index');
        $this->load->view('admin/foot');
	}
    
    public function tags($action = null)
	{
    
        
        $this->load->model('sp_model');
        $this->load->model('pages_model');
        
        
        
        $tags = $this->sp_model->get_tags();
        

        
        $from_tags = $this->pages_model->get_pages_from_tag_name($this->pages_model->get_tag_id_from_tags($action));
        
        $page_name = array();
       
        foreach($from_tags as $ft){
            
           $page_name[] = $this->pages_model->get_pagename_from_id($ft->pages_id);
        }
        
        
        $this->data['tags'] = $tags;
        $this->data['from_tags'] = $from_tags;
        $this->data['page_name'] = $page_name;
        
        $this->load->view('admin/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/tags', $this->data);
        $this->load->view('admin/foot');
	}
    
}
