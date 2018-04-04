<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('form');
		$this->load->helper('date');
		$this->load->model('valid_m');
		$this->load->model('user_profile');
		$this->load->model('job_applied');
		$this->load->model('user_applied');
		$this->load->model('job_history');
		$this->load->model('job_post');
		//$this->load->model('jobs_browse');
		$this->load->library('upload');
		$this->load->library('email');
		$this->load->library('form_validation');
	}

	public function load_view($view, $vars = array()) {
	    $this->load->view('common/header', $vars);	    
	    $this->load->view($view, $vars);
	    $this->load->view('common/footer');
	  }

	public function index()
	{
		$data['get_countries'] = $this->valid_m->get_countries();
		$this->load_view('login',$data);
	}
	
	public function login_check() //login_check
	{	
		
		 		$user_login=array(
		 			'email' => $this->input->post('email'), 
					'password' => md5($this->input->post('password')), 
					);
		 		$data=$this->valid_m->login_user($user_login['email'],$user_login['password']);
			 	if($data)
			      {
			      	$user_data=array(
			      		'email'=>$data,
			      		'logged_in'=>true
			      		);
			      	$this->session->set_userdata('id',$data['id']);
			        $this->session->set_userdata('email',$data['email']);
			        $this->session->set_userdata('first_name',$data['first_name']);
			        $this->session->set_userdata('last_name',$data['last_name']);
					$this->session->set_userdata('role',$data['role']);
			       
			      	$this->session->set_flashdata('user_loggedin','you are now loggedin');
			        $this->user_details();
			        echo $message = 'success'; 
			        //redirect('user/user_details');
			        exit;
			      }
			      else{
			      	echo $message = '<div class="alert-danger text-center">login is invalid,please try again</div>'; exit;
			      }
		 		
		 		//$role = $this->session->userdata("role");
		 		//if($role == 'candidate'){
		 		//redirect('user/user_details');
		 		//} 
		 		//if($role == 'company'){
		 		//redirect('post_job/job_posting_page');
				//}
	}

	public function company_login_check() //login_check
	{
		
		 		$user_login=array(
		 			'email' => $this->input->post('email'), 
					'password' => md5($this->input->post('password')), 
					);
		 		$data=$this->valid_m->company_login_user($user_login['email'],$user_login['password']);
			 	if($data)
			      {
			      	$user_data=array(
			      		'email'=>$data,
			      		'logged_in'=>true
			      		);
			      	$this->session->set_userdata('id',$data['id']);
			        $this->session->set_userdata('email',$data['email']);
			        $this->session->set_userdata('first_name',$data['first_name']);
			        $this->session->set_userdata('last_name',$data['last_name']);
			        $this->session->set_userdata('role',$data['role']);
			      	$this->session->set_flashdata('user_loggedin','you are now loggedin');
			        $this->user_details();
			        echo $message = 'success';  
			        //redirect('post_job/job_posting_page');
			        exit;
			      }
			      else{
			      	echo $message = '<div class="alert-danger text-center">login is invalid,please try again</div>'; exit;
			      }
		 		
		 		//$role = $this->session->userdata("role");
		 		//if($role == 'candidate'){
		 		//redirect('user/user_details');
		 		//} 
		 		//if($role == 'company'){
		 		//redirect('post_job/job_posting_page');
				//}
	}

	public function logout() //login_check
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');
	   	$this->session->set_flashdata('user_loggedout','you are now logged out');
      	redirect('user');
			
	}

	public function registration() //login_check
	{
		
		$this->load->view('common/header');
		$this->load->view('login/');
		$this->load->view('common/footer');
		
	}
	public function user_details() // add user full details
	{
		$candidate_id = $this->session->userdata("id");
		$data['get_candidate_info'] = $this->user_profile->get_user_profile_id($candidate_id);
		$data['get_skills'] = $this->valid_m->get_skills();
		$data['get_domains'] = $this->valid_m->get_domains();
		$data['get_cities'] = $this->valid_m->get_cities();
		if($data['get_candidate_info']['primary_skill']!='')
		{ $this->load_view('user_details',$data); } else { $this->load_view('update_profile',$data); }
		
	}
	public function update_profile() // add user full details
	{
		$candidate_id = $this->session->userdata("id");
		$data['get_candidate_info'] = $this->user_profile->get_user_profile_id($candidate_id);
		$data['get_skills'] = $this->valid_m->get_skills();	
		$data['get_domains'] = $this->valid_m->get_domains();	
		$data['get_cities'] = $this->valid_m->get_cities();
		$this->load_view('update_profile',$data);
		
	}
	public function history() // add user full details
	{
		$data['job_history'] = $this->job_history->job_history();
		 
		  
		$this->load_view('history',$data);
		/*$history=array(
		'job_status' => $this->input->post('job_status'),
	    );
	    $this->job_history->insert_job_history($history);
	    redirect('user/history'); */
		
		
	}
	public function insert_user_profile() //login_check
	{
				//$industr=$this->input->post('industry[]');
				//$rol=$this->input->post('role[]');
				//$skil=$this->input->post('skill[]');
				//$compan=$this->input->post('company[]');
				//$preferred_location=$this->input->post('prefered_location');

    
				//$industry=implode(",", $industr);    //prints 1, 2, 3
				//$role=implode(",", $rol); 
				//$skill=implode(",", $skil); 
				//$company=implode(",", $compan); 
    			//print join(',', $stuff);        //prints 1, 2, 3

    			
				//print_r($employer); exit;

				$emp =  $this->input->post('employer_name');
				$des = $this->input->post('designation');
				$ds =  $this->input->post('duration_start');
				$de = $this->input->post('duration_end');
				$ids    = array(1,2,3,4);

				$results = array();

				foreach ($emp as $id => $key) {
				    $results[$key] = array(
				        'name'  => $emp[$id],
				        'role' => $des[$id],
				        'start'    => $ds[$id],
				        'end'    => $de[$id],
				    );
				}

			
					$prev_employer = json_encode($results, true);

				
                    $user_details=array(
		 			
		 			'name' => $this->input->post('first_name'), 			
		 			'email' => $this->input->post('email'), 
		 			'resume_headline' => $this->input->post('resume_headline'),
					'pancard' => $this->input->post('pancard'),
					'mobile_number' => $this->input->post('mobile_number'),
					'dob' => $this->input->post('bday'), 
					'total_experience' => $this->input->post('total_experience'),
					'gender' => $this->input->post('gender'),
					'industry' => $this->input->post('industry'),
					'functional_area' =>$this->input->post('functional_area'),
					'role' => $this->input->post('role'),
					
					'preferred_location' => json_encode($this->input->post('preferred_location')),
					'salary_lakhs' => $this->input->post('lakhs'),
					'salary_thousands' => $this->input->post('thousands'),
					'previous_experience' => $prev_employer,					
					//'company' => $this->input->post($company),
					//'previous_experience' => $this->input->post('previous_experience'),
					'user_id' => $this->session->userdata("id")

		 			);

					//print_r ($user_details['employer_name']); exit;
				    $this->user_profile->insert_user_profile($user_details);
		 			

				$message = 'success';
		 		
		 		//$this->load->user;
		 		//$this->load->view('login.php',$info);
		 		//redirect('same_controller/index', 'refresh');
		 		//redirect('user_profile');
		 		//redirect('user/user_details');
                
	}

	public function basic_info() { 
	
		
			if(!empty($_FILES["image_file"]["name"]))  
			{   
				$config['upload_path'] = 'upload/photos';
				$config['overwrite'] = TRUE;
				$config['allowed_types'] = 'jpg|jpeg|png|gif';  
				$this->upload->initialize($config);
				$this->load->library('upload', $config); //image upload

				if(!$this->upload->do_upload('image_file'))  
				{  
				echo $this->upload->display_errors();  
				}
				$image = $_FILES["image_file"]["name"]; 
			} else {
				$image =  $this->input->post('old_image');
			}


			if(!empty($_FILES["resume_file"]["name"]))  
			{  
				$config['upload_path'] = 'upload/resumes';
				$config['overwrite'] = TRUE;
				$config['allowed_types'] = 'pdf|doc|docx';  
				$this->upload->initialize($config);
				$this->load->library('upload', $config); 

				if(!$this->upload->do_upload('resume_file'))  
				{  
				$this->upload->display_errors();  
				}  
				$resume = $_FILES["resume_file"]["name"]; 
			}  else {
				$resume =  $this->input->post('old_resume');
			} 


				$skill_array =  $this->input->post('skill');
				$profi_array = $this->input->post('proficiency');
				//$firstsetskills = $skill_array.'@'.$skill_array;
				$fpro = array_combine($skill_array, $profi_array);
				$firstsetskills = json_encode($fpro, true);					
				$skills = $firstsetskills;
				
				if($this->input->post('skill1')!=''){
				$skill_array1 =  $this->input->post('skill1');
				$profi_array1 = $this->input->post('proficiency1');
				$cpro = array_combine($skill_array1, $profi_array1);
				$secsetskills = json_encode($cpro, true);					
				$skills =json_encode(array_merge(json_decode($firstsetskills, true),json_decode($secsetskills, true)));
			    }

				$p_skill_array =  $this->input->post('primaryskill');
				$p_profi_array = $this->input->post('primarypro');				
				$pri_spro = array_combine($p_skill_array, $p_profi_array);
				$primaryskills = json_encode($pri_spro, true);

				//SKILL 1
				$skill1_array =  $this->input->post('skill1');
				$skillpro1_array = $this->input->post('skillpro1');				
				$skill1_combine = array_combine($skill1_array, $skillpro1_array);
				$skill1 = json_encode($skill1_combine, true);	
				//SKILL 1 END	
				//SKILL 2
				$skill2_array =  $this->input->post('skill2');
				$skillpro2_array = $this->input->post('skillpro2');				
				$skill2_combine = array_combine($skill2_array, $skillpro2_array);
				$skill2 = json_encode($skill2_combine, true);				
				//SKILL 2 END	
				//SKILL 3
				$skill3_array =  $this->input->post('skill3');
				$skillpro3_array = $this->input->post('skillpro3');				
				$skill3_combine = array_combine($skill3_array, $skillpro3_array);
				$skill3 = json_encode($skill3_combine, true);				
				//SKILL 3 END	
				//SKILL 4
				$skill4_array =  $this->input->post('skill4');
				$skillpro4_array = $this->input->post('skillpro4');				
				$skill4_combine = array_combine($skill4_array, $skillpro4_array);
				$skill4 = json_encode($skill4_combine, true);				
				//SKILL 4 END				
				//SKILL 5
				$skill5_array =  $this->input->post('skill5');
				$skillpro5_array = $this->input->post('skillpro5');				
				$skill5_combine = array_combine($skill5_array, $skillpro5_array);
				$skill5 = json_encode($skill5_combine, true);				
				//SKILL 5 END				
				
				if($this->input->post('anylocation')=='on') {
					$preferred_location = 'on';
				} else {
					$preferred_location  = json_encode($this->input->post('preferred_location'));
				} 

				 $user_details=array(
		 			'name' => $this->input->post('first_name'),					
					'photos' => $image,
					'resume' => $resume,
					'skill1' => $skill1,
					'skill2' => $skill2,
					'skill3' => $skill3,
					'skill4' => $skill4,
					'skill5' => $skill5,
		 			'email' => $this->input->post('email'), 
					'pancard' => $this->input->post('pancard'),
					'mobile_number' => $this->input->post('mobile_number'),
					'dob' => $this->input->post('bday'), 
					'gender' => $this->input->post('gender'),
					'user_id' => $this->session->userdata("id"),
					'total_experience' => $this->input->post("total_experience"),
					'current_location' =>json_encode($this->input->post('current_location')),
					'year_completion' => $this->input->post("year_completion"),
					'institute' => $this->input->post("institute"),
					'score' => $this->input->post("score"),
					'degree' => $this->input->post("degree"),
					'branch' => $this->input->post("branch"),
					'preferred_location' => $preferred_location,
					'salary_lakhs' => $this->input->post('salary_lakhs'),
					//'salary_thousands' => $this->input->post('thousands'),
					'industry' => $this->input->post('industry'),
					'preferred_roles' =>$this->input->post('preferred_roles'),
					'previous_role' => $this->input->post('role'),
					'job_type' => $this->input->post('job_type'),
					'primary_skill' => $primaryskills,
					'add_domain' =>json_encode($this->input->post('add_domain')),
					
		 			);

				   $this->user_profile->insert_user_profile($user_details);				   
				   redirect('user/user_details/1');

				   
	}

	/* public function do_upload(){

		if(isset($_FILES["image_file"]["name"]))  
           {  
                $config['upload_path'] = 'upload/photos';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';  
                $this->upload->initialize($config);
                $this->load->library('upload', $config); 
                
                if(!$this->upload->do_upload('image_file'))  
                {  
                     echo $this->upload->display_errors();  
                }  
                else  
                { 
                	 $user_details=array('photos' => $_FILES["image_file"]["name"], 'user_id' => $this->session->userdata("id"));
                     $data = $this->upload->data(); 
                     $this->user_profile->insert_user_profile($user_details);
                     echo '<img src="'.base_url().'upload/photos/'.$data["file_name"].'" width="100" height="125" class="img-thumbnail" />';  
                      
				   	 
					}
                }  
            
   			
     } */

    /*  public function do_upload_resume(){

		if(isset($_FILES["resume_file"]["name"]))  
           {  
                $config['upload_path'] = 'upload/resumes';
                $config['overwrite'] = TRUE;
                $config['allowed_types'] = 'pdf|doc|docx';  
                $this->upload->initialize($config);
                $this->load->library('upload', $config); 
                
                if(!$this->upload->do_upload('resume_file'))  
                {  
                     $this->upload->display_errors();  
                }  
                else  
                { 
                	 $user_details=array('resume' => $_FILES["resume_file"]["name"], 'user_id' => $this->session->userdata("id"));
                     $data = $this->upload->data(); 
                     $this->user_profile->insert_user_profile($user_details);
                     echo '<a target="_blank" href="'.base_url().'upload/resumes/'.$data["file_name"].'">'.$data["file_name"].'</a>';  
                      
				   	 
					}
                }  
            
   			
     } */

     /*  public function do_skills(){
     			$skill_array =  $this->input->post('skill');
				$profi_array = $this->input->post('proficiency');
				$results = array_combine($skill_array, $profi_array);
				$skills = json_encode($results, true);

				 $user_details=array(
		 			'skills' => $skills,
		 			'user_id' => $this->session->userdata("id")
		 			);

		 		 $this->user_profile->insert_user_profile($user_details);
				 echo $message = 'Skills Successfully updated.';exit;

				} */

	public function forgot() 
	{				
		$this->load_view('forgot');
	}

	public function forgot_check() 
	{
		
		 $forgot_details=array('email' => $this->input->post('email'));		
		 
		 $email_forgot=$this->valid_m->forgot_email_check($forgot_details['email']);
		 if($email_forgot==1){

		 		    /* Send a mail to user*/
				  	$fromemail="Sony.George@ust-global.com";
					$toemail = $forgot_details['email'];
					$subject = "Jithire Forget Password";					
					$mesg = $this->load->view('template/userregemail','',true);
					$config=array(
					'charset'=>'utf-8',
					'wordwrap'=> TRUE,
					'mailtype' => 'html'
					);
					$this->email->initialize($config);
					$this->email->to($toemail);
					$this->email->from($fromemail, "Title");
					$this->email->subject($subject);
					$this->email->message($mesg);
					$mail = $this->email->send();
				  	/*EMail end */
				  	$data['message'] = '<div class="alert alert-success text-center">Email has been send to your mail id.</div>';
				  	$this->load_view('forgot',$data);

		 }else
		 {
		 	$data['message'] = '<div class="alert alert-danger text-center">Email is not available</div>';
		 	$this->load_view('forgot',$data);
		 }

		
	}
	public function forgot_update() 
	{
		
		$userid_decode = "";

		$this->form_validation->set_rules('password','Password','trim|required|matches[password]'); 
		$this->form_validation->set_rules('confirm_password','Confirm_password','trim|required|matches[password]'); 

		if ($this->form_validation->run() == FALSE)
        {
        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Failed!! sorry mismatch password..Please try again.</div>');
        
        $this->load->view('common/header');
		$this->load->view('forgot_password');
		$this->load->view('common/footer');
	
        }
        else
        {

        	$password_details=array(
		 				 			
					'password' => md5($this->input->post('password')), 
					
		 			);
        	$forgot_password_model=$this->valid_m->forgot_password_check($password_details['password'],$email_det);
        	if($forgot_password_model){
					
				   
				  $this->session->set_flashdata('wel_message', 'pasword changed successfully');
				  redirect('user');
				}
				else{

				  $this->session->set_flashdata('message', 'email not having please sign up');
				  redirect('user');


				}
		}
		
	}

	public function about() 
	{
		$this->load_view('about');		
		
	}
	public function contact() 
	{
		$this->load_view('contact');
	}

	public function valid()
	{
		
		$this->load->view('common/header');
		$this->load->view('login');
		$this->load->view('common/footer');
	}

	//Candiate Registration
	public function register_check() //login_check
	{
					$this->form_validation->set_rules('password','Password','trim|required|matches[password]'); 
					$this->form_validation->set_rules('confirm_password','Confirm_password','trim|required|matches[password]'); 

					 if ($this->form_validation->run() == FALSE)
                {
					echo $message = '<div class="alert alert-danger text-center">Failed!! sorry mismatch password..Please try again.</div>'; exit;
                }
                else
                {
                     $register_details=array(
		 			'first_name' => $this->input->post('first_name'), 
		 			'email' => $this->input->post('email'), 
					'password' => md5($this->input->post('password')),
                    'pan_card' => $this->input->post('pan_card'),					
					'role' => $this->input->post('role'),
					'status' => $this->input->post('status'),
					'date_time' => mdate('%Y-%m-%d %H:%i:%s', now())
		 			);

					$email_check=$this->valid_m->email_check($register_details['email']);

				if($email_check){
				  	$this->valid_m->register_insert($register_details);

				  	/* Send a mail to user*/
				  	$fromemail="Sony.George@ust-global.com";
					$toemail = $this->input->post('email');
					$subject = "Hi".$this->input->post('first_name').", Welcome to jithire.com";					
					$mesg = $this->load->view('template/userregemail','',true);
					$config=array(
					'charset'=>'utf-8',
					'wordwrap'=> TRUE,
					'mailtype' => 'html'
					);
					$this->email->initialize($config);
					$this->email->to($toemail);
					$this->email->from($fromemail, "Title");
					$this->email->subject($subject);
					$this->email->message($mesg);
					$mail = $this->email->send();
				  	/*EMail end */

		 			echo $message = '<div class="alert alert-success text-center">Thank You for registering with Jithire.</div>';exit;
				}
				else{
				    echo $message = '<div class="alert alert-danger text-center">Email already Exist!</div>'; exit;		    
				}
           }
	}

	//Company Registration
	public function registration_company() //login_check
	{
		$this->load->library('form_validation');
					$this->form_validation->set_rules('password','Password','trim|required|matches[password]|min_length[6]|max_length[15]'); 
					$this->form_validation->set_rules('confirm_password','Confirm_password','trim|required|matches[password]'); 
					$this->form_validation->set_rules('phone_no', 'phone_no', 'trim|required|numeric|min_length[10]');
					

                  
   
					 if ($this->form_validation->run() == FALSE)
                {
					
					/* $this->form_validation->set_message('min_length','The value you have entered for %s is too short..'); */
					 echo $message = '<div class="alert alert-danger text-center">Failed!! sorry mismatch password..Please try again.</div>'; exit; 
                }
				
                else
                {

                    $company_details=array(
		 			'company_name' => $this->input->post('company_name'),	 			 
		 			'url' => $this->input->post('url'),
					'TAN' => $this->input->post('TAN'),
					'country' => $this->input->post('country'), 
					'poc_name' => $this->input->post('poc_name'),
					'phone_no' => $this->input->post('phone_no'),
					'role' => $this->input->post('role'),
					'status' => $this->input->post('status'),
					'email' => $this->input->post('email'), 
					'password' => md5($this->input->post('password')), 
					'date_time' => mdate('%Y-%m-%d %H:%i:%s', now())
		 			);

					$email_check=$this->valid_m->company_name_check($company_details['company_name']); 
					if($email_check){
					  	$this->valid_m->company_registration_insert($company_details);
			 			echo $message = '<div class="alert alert-success text-center">Thank You for registering with Jithire.</div>';exit;
					}
					else{
					    echo $message = '<div class="alert alert-danger text-center">Company Name already Exist!</div>'; exit;		    
					}
           }
	}
	public function company_details() //login_check
	{
		$company_details=array(
		 			'id' => $this->input->post('id'), 
		 			'company_name' => $this->input->post('company_name'),
		 			'address' => $this->input->post('address'), 
		 			'url' => $this->input->post('url'),
					'TAN' => $this->input->post('TAN'),
					/* 'city' => $this->input->post('city'),
					'state' => $this->input->post('state'), */
					'country' => $this->input->post('country'), 
					'poc_name' => $this->input->post('poc_name'),
					'phone_no' => $this->input->post('phone_no'),
					'role' => $this->input->post('role'),
					'status' => $this->input->post('status')

		 			);
		 		//print_r($data); exit;
		 		$company_check=$this->valid_m->company_registration_insert($company_details);
		 		$info['message']="valid success";
		 		if($company_check)
			      {
			        $this->load->view('login.php');

			      }
				
	}
	
	public function company_dashboard() // add user full details
	{
		
		$candidate_id = $this->session->userdata("id");
		//$data['get_candidate_info'] = $this->user_profile->get_user_profile_id($candidate_id);		
		$this->load_view('company_dashboard');	
		
	}

	public function new_job() // add user full details
	{
		
		$candidate_id = $this->session->userdata("id");
		//$data['get_candidate_info'] = $this->user_profile->get_user_profile_id($candidate_id);
		$data['get_cities'] = $this->valid_m->get_cities();
		$data['get_skills'] = $this->valid_m->get_skills();
		$this->load_view('post_job',$data);	
		
	}
	public function posted_jobs()
	{
		$cid = $this->session->userdata('id');
		$data['job_list'] = $this->valid_m->posted_job_list($cid);
		$this->load_view('posted_jobs',$data);		
	}	
	
	public function update_post() // add user full details
	{
		
		$link = $_SERVER['PHP_SELF'];
		$link_array = explode('/',$link);
		$job_uid = end($link_array);
    	$data['job_list'] = $this->valid_m->update_posted_job($job_uid);		
    	$data['get_cities'] = $this->valid_m->get_cities();
		$data['get_skills'] = $this->valid_m->get_skills();
		$this->load_view('update_post',$data);
		
	}
	
	public function update_post_info() //login_check
	{   
			    $primary_array =  $this->input->post('primary');
				$proprimary_array = $this->input->post('proprimary');
				$results = array_combine($primary_array, $proprimary_array);
				$primary_skill = json_encode($results, true);
				


			    //SKILL 1
				$skill1_array =  $this->input->post('skill1');
				$skillpro1_array = $this->input->post('skillpro1');				
				$skill1_combine = array_combine($skill1_array, $skillpro1_array);
				$skill1 = json_encode($skill1_combine, true);	
				//SKILL 1 END	
				//SKILL 2
				$skill2_array =  $this->input->post('skill2');
				$skillpro2_array = $this->input->post('skillpro2');				
				$skill2_combine = array_combine($skill2_array, $skillpro2_array);
				$skill2 = json_encode($skill2_combine, true);				
				//SKILL 2 END	
				//SKILL 3
				$skill3_array =  $this->input->post('skill3');
				$skillpro3_array = $this->input->post('skillpro3');				
				$skill3_combine = array_combine($skill3_array, $skillpro3_array);
				$skill3 = json_encode($skill3_combine, true);				
				//SKILL 3 END	
				//SKILL 4
				$skill4_array =  $this->input->post('skill4');
				$skillpro4_array = $this->input->post('skillpro4');				
				$skill4_combine = array_combine($skill4_array, $skillpro4_array);
				$skill4 = json_encode($skill4_combine, true);				
				//SKILL 4 END				
				//SKILL 5
				$skill5_array =  $this->input->post('skill5');
				$skillpro5_array = $this->input->post('skillpro5');				
				$skill5_combine = array_combine($skill5_array, $skillpro5_array);
				$skill5 = json_encode($skill5_combine, true);				
				//SKILL 5 END	

                $job_id = $this->input->post('job_id'); 
    			$posted_jobs=array(    				
		 			'job_role' => $this->input->post('job_role'), 			
		 			'min_exp' => $this->input->post('min_exp'), 
					'max_exp' => $this->input->post('max_exp'),
					'primary_skill' => $primary_skill,
		 			'skills' => $skills, 
					'skill1' => $skill1,
					'skill2' => $skill2, 
					'skill3' => $skill3,
					'skill4' => $skill4, 
					'skill5' => $skill5, 
		 			'job_description' => $this->input->post('job_description'),
					'preferred_location' => json_encode($this->input->post('preferred_location')),
					'no_positions' => $this->input->post('no_positions'),
					'duration' => $this->input->post('duration'), 
					'salary_lakhs' => $this->input->post('salary_lakhs'),
					'job_type' => $this->input->post('job_type'),
					'status' => $this->input->post('status'),
					
					
						'close_date_time'=> $this->input->post('close_date_time'),
		 			);

		 		   $this->job_post->update_job_posting($posted_jobs, $job_id);				   
				   redirect('user/posted_jobs');
                
	}
	public function browse_jobs()
	{
		//$candidate_id = $this->session->userdata("id");
		$data['job_list'] = $this->valid_m->job_list();
		//$this->load->view('common/header');
		$this->load_view('browse_jobs',$data);
		//$this->load->view('common/footer');
	}
	public function insert_job_post() //login_check
	{

    			//$skill=json_encode($this->input->post('skill'));
    			//$proficiency=json_encode($this->input->post('proficiency'));
    			
				
				//$skills = json_encode(array_merge(json_decode($skill, true),json_decode($proficiency, true)));
				$data['message']="";
				$skill_array =  $this->input->post('skill');
				$profi_array = $this->input->post('proficiency');
				$results = array_combine($skill_array, $profi_array);
				$skills = json_encode($results, true);
				
				$primary_array =  $this->input->post('primary');
				$proprimary_array = $this->input->post('proprimary');
				$results = array_combine($primary_array, $proprimary_array);
				$primary_skill = json_encode($results, true);
				
				//SKILL 1
				$skill1_array =  $this->input->post('skill1');
				$skillpro1_array = $this->input->post('skillpro1');				
				$skill1_combine = array_combine($skill1_array, $skillpro1_array);
				$skill1 = json_encode($skill1_combine, true);	
				//SKILL 1 END	
				//SKILL 2
				$skill2_array =  $this->input->post('skill2');
				$skillpro2_array = $this->input->post('skillpro2');				
				$skill2_combine = array_combine($skill2_array, $skillpro2_array);
				$skill2 = json_encode($skill2_combine, true);				
				//SKILL 2 END	
				//SKILL 3
				$skill3_array =  $this->input->post('skill3');
				$skillpro3_array = $this->input->post('skillpro3');				
				$skill3_combine = array_combine($skill3_array, $skillpro3_array);
				$skill3 = json_encode($skill3_combine, true);				
				//SKILL 3 END	
				//SKILL 4
				$skill4_array =  $this->input->post('skill4');
				$skillpro4_array = $this->input->post('skillpro4');				
				$skill4_combine = array_combine($skill4_array, $skillpro4_array);
				$skill4 = json_encode($skill4_combine, true);				
				//SKILL 4 END				
								
				//SKILL 5
				$skill5_array =  $this->input->post('skill5');
				$skillpro5_array = $this->input->post('skillpro5');				
				$skill5_combine = array_combine($skill5_array, $skillpro5_array);
				$skill5 = json_encode($skill5_combine, true);				
				//SKILL 5 END
				//$decode_skills = json_decode($skills, true);
				
				

                    $user_details=array(
		 			'Job_code' => $this->input->post('Job_code'),
		 			'job_role' => $this->input->post('role'), 			
		 			'min_exp' => $this->input->post('min_exp'), 
					'max_exp' => $this->input->post('max_exp'),
					'primary_skill' => $primary_skill,
		 			'skills' => $skills, 
					'skill1' => $skill1,
					'skill2' => $skill2, 
					'skill3' => $skill3,
					'skill4' => $skill4, 
					'skill5' => $skill5,
					
		 			'job_description' => $this->input->post('job_description'),
					'preferred_location' => json_encode($this->input->post('preferred_location')),
					'no_positions' => $this->input->post('no_positions'),
					'duration' => $this->input->post('duration'), 
					'salary_lakhs' => $this->input->post('salary_lakhs'),
					'job_type' => $this->input->post('job_type'),

							
					//'company' => $this->input->post($company),
					//'previous_experience' => $this->input->post('previous_experience'),
					'company_id' => $this->input->post('company_id'),
					'status' => $this->input->post('status'),
					'close_date_time'=> $this->input->post('close_date_time'),
					'open_date_time' => date("d/m/Y")
					

		 			);
		 			
					//print_r ($user_details['employer_name']); exit;
				    $this->valid_m->insert_job_posting($user_details);
		 			 
		 	    $data['message'] = 'Successfully Posted a Job';
		 	    $this->load_view('post_job',$data);		
		 		//redirect('post_job/job_posting_page/'.$msg);
                
	}
	public function apply_job()
	{
    
		if (isset($_POST['apply'])) {
		    $user_details=array(
			'applied_job_id' => $this->input->post('job_id'), 
			'comp_id' => $this->input->post('company_id'),
			'user_id' => $this->input->post('user_id'),
			'job_status' => $this->input->post('job_applied_status'), 
			'applied_date' => mdate('%Y-%m-%d %H:%i:%s', now())
			);
		   $this->job_applied->insert_job_applied($user_details);	
		} else {
		     $user_details=array(
			'applied_job_id' => $this->input->post('job_id'), 
			'comp_id' => $this->input->post('company_id'),
			'user_id' => $this->input->post('user_id'),
			'job_status' => $this->input->post('job_rejected_status'), 
			'applied_date' => mdate('%Y-%m-%d %H:%i:%s', now())
			);
		   $this->job_applied->insert_job_applied($user_details);	
		}

		 $this->load_view('history',$data);
		 redirect('user/browse_jobs');
	}
  
  public function candidates_apply($Job_id)
  {
	$data['user_applied'] = $this->user_applied->user_applied($Job_id);
  	$this->load_view('candidates_apply',$data);  	
  }

  public function view_profile($uid) // add user full details
	{
		$candidate_id = $uid;
		$data['get_candidate_info'] = $this->user_profile->get_user_profile_id($candidate_id);
		if($data['get_candidate_info']['primary_skill']!='')
		{ $this->load_view('user_details',$data); } else { $this->load_view('update_profile',$data); }
		
	}

	public function view_offer_letter() // add user full details
	{

		$compid = $this->session->userdata('id');                                                                                        
		$data['view_letter'] = $this->valid_m->view_letter($compid);		
		$this->load_view('view_offer_letter',$data);
		
	}
	public function create_offer_letter() // add user full details
	{
		//$candidate_id = $uid;
		//$data['get_candidate_info'] = $this->user_profile->get_user_profile_id($candidate_id);
		$compid = $this->session->userdata('id');
		$this->load_view('offer_letter');
		
	}
	public function offer_letter() 
	{
	
	$user_details=array(
			'posted_job_id' => $this->input->post('posted_job_id'), 
			'company_id' => $this->input->post('company_id'),
			'user_id' => $this->input->post('user_id'),
			'company_name' => $this->input->post('company_name'),
			'joining_location' => $this->input->post('joining_location'),
			'start_date' => $this->input->post('start_date'),
			'duration' => $this->input->post('duration'),
			'role' => $this->input->post('role'),
			'annual_ctc' => $this->input->post('annual_ctc')
			);
			
		   $this->valid_m->insert_offer_letter($user_details);
		 			 
		 	 $data['message'] = 'Offer Created';
		 	 $this->load_view('offer_letter',$data);
	}
}
   
   
   
   