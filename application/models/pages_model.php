<?php


class Pages_model extends CI_Model {

    function get_pagename_from_id($id){
        $this->db->from('pages');
        $this->db->where('pages_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function get_tag_id_from_tags($tagname){
        $this->db->select('tags_id');
        $this->db->from('tags');
        $this->db->where('tagname', $tagname);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    
    function get_pages_from_tag_name($tag_ids){
        
        $this->db->select('pages_id');
        $this->db->from('pages_tags');
        $this->db->where_in('tags_id', $tag_ids[0]);
        $query = $this->db->get();
        return $query->result();
    }
    
}