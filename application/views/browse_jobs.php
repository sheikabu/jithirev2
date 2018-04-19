<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');


if(!$email){

  redirect('user');
}

 ?>

<div id="message"></div>
<!-- Matching Job -->

<section id="browse_jobs">


        <?php $count = count($job_list); 
         if($count!=0) {
         foreach($job_list as $key=>$values) { ?>
   
      <div class="container matching_job_container">
   
     
      <!--<form action="apply_job" method="post" name="apply_job">-->
      <?php echo form_open('user/apply_job');?>
        <div class="row">

          <div class="col-md-6 mTop-20">
            <div class="col-xs-12">
              <label class="col-md-4">Company: </label>
              <span class="col-md-8"><?php echo $values['company_name'];?></span>
            </div>
            <div class="col-xs-12">
              <label class="col-md-4">Job code: </label>
              <span class="col-md-8"><?php echo $values['Job_code'];?></span>
            </div>
            <div class="col-xs-12">
              <label class="col-md-4">Experience: </label>
              <span class="col-md-8"><?php echo $values['min_exp'];?> - <?php echo $values['max_exp'];?> Years</span>
            </div>
             <div class="col-xs-12">
              <label class="col-md-4">Keyskills: </label>
              <span class="col-md-8 skills-wrap"><span><?php
              $primary_skill = json_decode($values['primary_skill'], true);
                      foreach($primary_skill as $key => $value) {
                            foreach ($get_skills as $skey => $svalue) {
                    if($svalue['skill_id']==$key) {
                      echo $svalue['skills'].' - '.$value;
                           }
                         }                           
                        }
                    ?>
                  </span>    
              </span>
            </div>
             <div class="col-xs-12">
              <label class="col-md-4 pull-left">Skills: </label>
              <span class="col-md-8 pull-left skills-wrap">
               <?php 
                      $skill1 = json_decode($values['skill1']);
                      $skill2 = json_decode($values['skill2']);
                      $skill3 = json_decode($values['skill3']);
                      $skill4 = json_decode($values['skill4']);
                      $skill5 = json_decode($values['skill5']);

                      foreach ($skill1 as $key1 => $value1)
                        foreach ($get_skills as $skillskey => $skillsvalue) {
                          if($skillsvalue['skill_id']==$key1) {
                      if($key1!='_empty_'){
                      echo $skill1 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value1.'</span><br>'; } }
                      
                    foreach ($skill2 as $key2 => $value2)
                        if($skillsvalue['skill_id']==$key2) {
                       if($key2!='_empty_'){
                        echo $skill2 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value2.'</span><br>';} }
                    
                    foreach ($skill3 as $key3 => $value3)
                      if($skillsvalue['skill_id']==$key3) {
                       if($key3!='_empty_'){
                        echo $skill3 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value3.'</span><br>';} }
                   
                    foreach ($skill4 as $key4 => $value4)
                       if($skillsvalue['skill_id']==$key4) {
                        if($key4!='_empty_'){
                        echo $skill4 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value4.'</span><br>';} }
                     
                    foreach ($skill5 as $key5 => $value5)
                      if($skillsvalue['skill_id']==$key5) {
                      if($key5!='_empty_'){
                        echo $skill5 .= $skillsvalue['skills'].'<span class="skill-level">- '.$value5.'</span><br>';} }
                   }
                ?>
              </span>
            </div>
            
          </div> 

          <div class="col-md-6 mTop-20">
            <div class="col-xs-12">
              <label class="col-md-4">Job Type: </label>
              <span class="col-md-8"><?php $job_type = $values['job_type'];
                foreach ($get_job_type as $key => $value) {
                if($value['job_type_id']==$job_type) {
                  echo $value['job_type'];
                  }
                 } 
              ?></span>
            </div>
            <div class="col-xs-12">
              <label class="col-md-4">Role: </label>
              <span class="col-md-8"><?php echo $values['job_role'];?></span>
            </div>
            <div class="col-xs-12">
              <label class="col-md-4">Salary: </label>
              <span class="col-md-8"><?php echo $values['salary_lakhs']; ?> Lakhs</span>
            </div>
             <div class="col-xs-12">
              <label class="col-md-4">No.Positions: </label>
              <span class="col-md-8"><?php echo $values['no_positions'];?></span>
            </div>
            <div class="col-xs-12">
              <label class="col-md-4">Location: </label>
              <span class="col-md-8"><?php $locations = json_decode($values['preferred_location']); 
                        foreach($locations as $location => $lvalues) {
                        $ploca .= $lvalues.', ';
                     } echo rtrim($ploca,', '); unset($ploca); ?>
                      
              </span>
            </div>
          </div>          
        </div>
        <div class="row">
          <label class="col-md-4 mLeft-15 mTop-10">Job Description: </label>
          <div class="col-md-12 mLeft-15  mBot-10"><?php echo $values['job_description'];?></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="mLeft-15 mRight-5">Opening:</label><span><?php
                echo $open_timestamp = $values['open_date_time'];
                //echo $opening_date = date('d-m-Y', $open_timestamp);  
                ?></span>
            </div>
            <div class="col-md-6 text-right">
                <label class="mLeft-15 mRight-5">Preferred Joining:</label><span><?php
                echo $open_timestamp = $values['close_date_time'];
                //echo $opening_date = date('d-m-Y', $open_timestamp);  
                ?></span>
             </div>
            </div>
             <input class="hidden" type="text" value="<?php echo $values['job_id']; ?>" name="job_id">
             <input class="hidden" type="text" value="<?php echo $values['company_id']; ?>" name="company_id">
             <input class="hidden" type="text" value="<?php echo $this->session->userdata('id'); ?>" name="user_id">
             <input class="hidden" type="text" value="Candidate Interested" name="job_applied_status">
             <input class="hidden" type="text" value="Rejected" name="job_rejected_status">

              <div class="row">
              <div class="btn-form text-center mTop-20 col-md-12 line2">
              <?php $c_status = explode(',', $values['job_status']); $ccstatus = end($split); if($c_status != '') { ?>
                <div class="interested-status"><i class="fa fa-check" aria-hidden="true"></i><?php echo $ccstatus; ?></div>
                <?php }  else { ?>
                <input type="submit"  class="btn btn-fill mRight-10 mBot-10" name="apply" value="Apply">
                <input type="submit"  class="btn mBot-10" name="reject" value="Reject">
                <?php } ?>
               
              </div>
              
            </div>
            </div>
            </form>
           
          </div>
          <?php } } else { 
          echo '<center>No Matching Jobs</center>';
         } ?>
        </div>

        
    </section>