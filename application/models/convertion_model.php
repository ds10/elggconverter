<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Convertion_model extends CI_Model {
		
    function db_usercreatedpage() {
    	
    	$sql =  'SELECT elgg_river.posted, elgg_users_entity.email , elgg_users_entity.name , elgg_users_entity.username , elgg_objects_entity.title  
			FROM elgg_river
			LEFT JOIN  elgg_users_entity
			ON elgg_river.subject_guid=elgg_users_entity.guid
			LEFT JOIN elgg_objects_entity
			ON  elgg_river.object_guid = elgg_objects_entity.guid
			WHERE
			elgg_river.action_type = "create"
			and
			elgg_river.subtype = "page"';
    	
        $query = $this->db->query($sql);
        
        print "this is the query: <br/>";
        print $sql; 
        print "<br/>";
        
        return $query->result_array();
    }
    
    function db_userupdatedpage() {
    	
    	$sql =  'SELECT elgg_river.posted, elgg_users_entity.email , elgg_users_entity.name , elgg_users_entity.username , elgg_objects_entity.title  
			FROM elgg_river
			LEFT JOIN  elgg_users_entity
			ON elgg_river.subject_guid=elgg_users_entity.guid
			LEFT JOIN elgg_objects_entity
			ON  elgg_river.object_guid = elgg_objects_entity.guid
			WHERE
			elgg_river.action_type = "update"
			and
			elgg_river.subtype = "page"';
    	
        $query = $this->db->query($sql);
        
        print "this is the query: <br/>";
        print $sql; 
        print "<br/>";
        
        return $query->result_array();
    }
    
	 function db_userrateditem() {
	    	
	    	$sql =  '';
	    	
	        $query = $this->db->query($sql);
	        
	        print "this is the query: <br/>";
	        print $sql; 
	        print "<br/>";
	        
	        return $query->result_array();
	    }

	function db_usercreatedfile() {
    	
    	$sql =  'SELECT elgg_river.posted, elgg_users_entity.email , elgg_users_entity.name , elgg_users_entity.username , elgg_objects_entity.title  
			FROM elgg_river
			LEFT JOIN  elgg_users_entity
			ON elgg_river.subject_guid=elgg_users_entity.guid
			LEFT JOIN elgg_objects_entity
			ON  elgg_river.object_guid = elgg_objects_entity.guid
			WHERE
			elgg_river.action_type = "create"
			and
			elgg_river.subtype = "file"';
    	
        $query = $this->db->query($sql);
        
        print "this is the query: <br/>";
        print $sql; 
        print "<br/>";
        
        return $query->result_array();
    }
    
}