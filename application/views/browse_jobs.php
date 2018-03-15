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

<section id="matching-job">


  
    <?php foreach($job_list as $key=>$values) { ?>
      <div class="container matching_job_container">
        
     
      <form action="apply_job" method="post" name="apply_job">
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
              <span class="col-md-8 skills-wrap"><span><?php $primary_skill =  json_decode($values['primary_skill']);
                  foreach ($primary_skill as $pkey => $pvalue) {
                    echo $pkey.'<span class="skill-level">- '.$pvalue;
                  }
                    ?>
                  </span>    
              </span>
            </div>
             <div class="col-xs-12">
              <label class="col-md-4 pull-left">Skills: </label>
              <span class="col-md-8 pull-left skills-wrap">
                <span><?php  $skill1 = json_decode($values['skills']);
                foreach ($skill1 as $skey1 => $svalue1) echo $skey1.'<span class="skill-level">- '.$svalue1;
                ?></span><br>
                <span><?php $skill2 = json_decode($values['skill1']);
                foreach ($skill2 as $skey2 => $svalue2) echo $skey2.'<span class="skill-level">- '.$svalue2;
                ?></span><br>
                <span><?php $skill3 = json_decode($values['skill2']);
                foreach ($skill3 as $skey3 => $svalue3) echo $skey3.'<span class="skill-level">- '.$svalue3;
                ?></span><br>
                <span><?php $skill4 = json_decode($values['skill3']);
                foreach ($skill4 as $skey4 => $svalue4) echo $skey4.'<span class="skill-level">- '.$svalue4;
                ?></span><br>
                <span><?php $skill5 =  json_decode($values['skill4']);
                foreach ($skill5 as $skey5 => $svalue5) echo $skey5.'<span class="skill-level">- '.$svalue5;
                ?>
                </span>
              </span>
            </div>
            
          </div> 

          <div class="col-md-6 mTop-20">
            <div class="col-xs-12">
              <label class="col-md-4">Job Type: </label>
              <span class="col-md-8"><?php echo $values['job_type'];?></span>
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
                <label class="mLeft-15">Opening:</label><span><?php
                $open_timestamp = strtotime($values['open_date_time']);
                echo $opening_date = date('d-m-Y', $open_timestamp);  
                ?></span>
            </div>
            <div class="col-md-6 text-right">
                <label class="mLeft-15">Closing:</label><span><?php
                $open_timestamp = strtotime($values['close_date_time']);
                echo $opening_date = date('d-m-Y', $open_timestamp);  
                ?></span>
             </div>
            </div>
             <input class="hidden" type="text" value="<?php echo $values['job_id']; ?>" name="job_id">
             <input class="hidden" type="text" value="<?php echo $values['company_id']; ?>" name="company_id">
             <input class="hidden" type="text" value="<?php echo $this->session->userdata('id'); ?>" name="user_id">
             <input class="hidden" type="text" value="Interested" name="job_applied_status">
             <input class="hidden" type="text" value="Rejected" name="job_rejected_status">

              <div class="row">
              <div class="btn-form text-center mTop-20 col-md-12">
              <?php if($values['job_status'] == 'Interested') { ?>
                <div class="interested-status"><i class="fa fa-check" aria-hidden="true"></i>Interested</div>
                <?php } elseif ($values['job_status'] == 'Rejected') { ?>
                <div class="rejected-status"><i class="fa fa-times" aria-hidden="true"></i>   <?php echo $values['job_status']; ?>   </div>
                <?php } else { ?>
                <input type="submit"  class="btn btn-fill mRight-10" name="apply" value="Apply">
                <input type="submit"  class="btn" name="reject" value="Reject">
                <?php } ?>
               
              </div>
              
            </div>
            </div>
            </form>
          </div>
        </div>

        <?php } ?> 
    </section>