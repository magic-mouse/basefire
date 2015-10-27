<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * Magic-Mouse wrote this file. As long as you retain this notice you
 * can do whatever you want with this stuff. If we meet some day, and you think
 * this stuff is worth it, you can buy me a beer in return Peter Nielsen
 * ----------------------------------------------------------------------------
 */

class Sp_model extends CI_Model {

    //var $table = null; //'pages';
    //var $pk = null; //'id';

     public function __construct()
    {
        parent::__construct();
    }
  
    function get_list()
    {
    $query = $this->db->query("CALL `get_pages_from_tag_name`('quad');");
    return $query->result();
    }

        
    function get_tags()
    {
        $this->db->from('tags');
        $result = $this->db->get();
        return $result->result();
    }
    

}
