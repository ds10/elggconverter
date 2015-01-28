<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Convertion extends CI_Controller {

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
	
	var $endpoint = "http://sharetec.celstec.org/learninglocker/public/data/xAPI/statements";
	
 	function __construct() {
        parent::__construct();
        $this->load->model('convertion_model');
    }
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	
	public function usercreatedpage(){	
	 
	 	print "<a href=" . base_url() . ">return to menu</a><br/><br/>";
		$results = $this->convertion_model->db_usercreatedpage();
			
		 foreach ($results as $result){	
	
			//grab results of query make 
			$epoch = $result['posted'];
			$dt = new DateTime("@$epoch");
			$dt = $dt->format('Y-m-d\TH:i:s\Z');
			//print $dt->format('Y-m-d H:i:s');
	
			$name = $result['name'];
			$email = $result['email'];
			$title  = $result['title'];
	
			$details= $array = array(
				"actor" => array("name" => "$name", "mbox"=> "mailto: $email", "objectType" => "Agent"),
				"verb" => array("id"=>"http://adlnet.gov/expapi/verbs/created", "display" => array("en-GB" => "created" )),
				"object" => array("id"=>"http://laceproject.eu/objects/page", "objectType"=>"Activity" , "definition" => array("name" => array("en-GB" =>"Page"),"description" => array("en-GB" =>"$title") ) ),
				"timestamp" => "$dt"
			);
		
    		$this->submitresults($details);	
	   	
		}
			print "<br/><br/>";
			print "This has been submitted to the endpoint:<br/><br/>";
			print_r(json_encode($details));
	
	 }
	 
	public function userupdatedpage(){
	 	//looks like this:
	 	
	 
	 	print "<a href=" . base_url() . ">return to menu</a><br/><br/>";
		$results = $this->convertion_model->db_usercreatedpage();
			
		 foreach ($results as $result){	
	
			//grab results of query make 
			$epoch = $result['posted'];
			$dt = new DateTime("@$epoch");
			$dt = $dt->format('Y-m-d\TH:i:s\Z');
			//print $dt->format('Y-m-d H:i:s');
	
			$name = $result['name'];
			$email = $result['email'];
			$title  = $result['title'];
	
			$details= $array = array(
				"actor" => array("name" => "$name", "mbox"=> "mailto: $email", "objectType" => "Agent"),
				"verb" => array("id"=>"http://adlnet.gov/expapi/verbs/updated", "display" => array("en-GB" => "created" )),
				"object" => array("id"=>"http://laceproject.eu/objects/page", "objectType"=>"Activity" , "definition" => array("name" => array("en-GB" =>"Page"),"description" => array("en-GB" =>"$title") ) ),
				"timestamp" => "$dt"
			);
		
    		$this->submitresults($details);	
	   	
		}
			print "<br/><br/>";
			print "This has been submitted to the endpoint:<br/><br/>";
			
			print_r(json_encode($details));
	
	 }
	 

	public function userrateditem(){
	 	//looks like this:
	 	
	 
	 print "<a href=" . base_url() . ">return to menu</a><br/><br/>";
		$results = $this->convertion_model->db_userrateditem();
			
		 foreach ($results as $result){	
	
			//grab results of query make 
			$epoch = $result['posted'];
			$dt = new DateTime("@$epoch");
			$dt = $dt->format('Y-m-d\TH:i:s\Z');
			//print $dt->format('Y-m-d H:i:s');
	
			$name = $result['name'];
			$email = $result['email'];
			$title  = $result['title'];
	
			$details= $array = array(
				"actor" => array("name" => "$name", "mbox"=> "mailto: $email", "objectType" => "Agent"),
				"verb" => array("id"=>"http://adlnet.gov/expapi/verbs/updated", "display" => array("en-GB" => "created" )),
				"object" => array("id"=>"http://laceproject.eu/objects/page", "objectType"=>"Activity" , "definition" => array("name" => array("en-GB" =>"Page"),"description" => array("en-GB" =>"$title") ) ),
				"timestamp" => "$dt"
			);
		
    		$this->submitresults($details);	
	   	
		}
			print "<br/><br/>";
			print "This has been submitted to the endpoint:<br/><br/>";
			
			print_r(json_encode($details));
	
	 }
	 
	 
	public function usercreatedfile(){	
	 
	 print "<a href=" . base_url() . ">return to menu</a><br/><br/>";
		$results = $this->convertion_model->db_usercreatedfile();
			
		 foreach ($results as $result){	
	
			//grab results of query make 
			$epoch = $result['posted'];
			$dt = new DateTime("@$epoch");
			$dt = $dt->format('Y-m-d\TH:i:s\Z');
			//print $dt->format('Y-m-d H:i:s');
	
			$name = $result['name'];
			$email = $result['email'];
			$title  = $result['title'];
	
			$details= $array = array(
				"actor" => array("name" => "$name", "mbox"=> "mailto: $email", "objectType" => "Agent"),
				"verb" => array("id"=>"http://adlnet.gov/expapi/verbs/shared/", "display" => array("en-GB" => "shared" )),
				"object" => array("id"=>"http://laceproject.eu/objects/file", "objectType"=>"Activity" , "definition" => array("name" => array("en-GB" =>"File"),"description" => array("en-GB" =>"$title") ) ),
				"timestamp" => "$dt"
			);
		
    		$this->submitresults($details);	
	   	
		}
			print "<br/><br/>";
			print "This has been submitted to the endpoint:<br/><br/>";
			
			print_r(json_encode($details));
	
	 }
	 
 	public function submitresults($details){	
			//use php stream to submit
			$streamopt = array(
					'ssl' => array(
							'verify-peer' => false,
					),
					'http' => array(
							'method' => 'POST',
							'ignore_errors' => true,
							'header' =>  array(
									'Authorization: Basic NGM4NWVhZjBiYWZkZWViYWYwZWUwNjc2NGFkNjQzMmI5NTE3ZjVlYzo2YmQ2NTM1OGQ3OWYwNzRiNmMzMGNkOWJmMzkxZmFmMjc1OTkzZTUx=',
									'Content-Type: application/json',
									'X-Experience-API-Version:1.0.0',
							),
							'content' => json_encode($details),
					),
			);
		
			$context = stream_context_create($streamopt);
			$stream = fopen($this->endpoint, 'rb', false, $context);
			$return = stream_get_contents($stream);	
			$meta = stream_get_meta_data($stream);
		 }
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */