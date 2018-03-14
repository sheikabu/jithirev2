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
      <?php //echo form_open('post_job/insert_job_post');?>
      <?php foreach($job_list as $key=>$values) { ?>
      <div class="container matching_job_container">
        <div class="row">
          <div class="col-md-6 mTop-20">
            <div class="col-xs-12">
              <label class="col-md-4">Company:</label><span class="col-md-8"><?php echo $values['company_name'];?></span>
            </div>
            
            <div class="col-xs-12">
                <label class="col-md-4">Job code:</label><span class="col-md-8"><?php echo $values['Job_code'];?></span>
            </div>
            <div class="col-xs-12">
                <label class="col-md-4">Experience:</label><span class="col-md-8"><?php echo $values['min_exp'];?> - <?php echo $values['max_exp'];?> Years</span>
            </div>
             <div class="col-xs-12">
                <label class="col-md-4 pull-left">Location:</label><span class="col-md-8">
                <?php $locations = json_decode($values['preferred_location']); 
                        foreach($locations as $location => $lvalues) {
                        $ploca .= $lvalues.', ';
                     } echo rtrim($ploca,', '); ?>
                </span>
            </div>
          </div>
          <div class="col-md-6 mTop-20">
            <div class="col-xs-12">
               <label class="col-md-4">Job Type:</label><span class="col-md-8"><?php echo $values['job_type'];?></span>
            </div>
            <div class="col-xs-12">
                <label class="col-md-4">Role:</label><span class="col-md-8"><?php echo $values['job_role'];?></span>
            </div>
            <div class="col-xs-12">
                <label class="col-md-4">Keyskills:</label><span class="col-md-8">
                  <?php $primary_skill =  json_decode($values['primary_skill']);
                  foreach ($primary_skill as $pkey => $pvalue) {
                    echo $pkey.' - '.$pvalue;
                  }
                    ?>
                </span>
            </div>
            <div class="col-xs-12">
                <label class="col-md-4">Skills</label>
                <span class="col-md-8 pull-right skills-wrap">
                  <span><?php  $skill1 = json_decode($values['skills']);
                  foreach ($skill1 as $skey1 => $svalue1) echo $skey1.' - '.$svalue1;
                  ?></span><br>
                  <span><?php $skill2 = json_decode($values['skill1']);
                  foreach ($skill2 as $skey2 => $svalue2) echo $skey2.' - '.$svalue2;
                  ?></span><br>
                  <span><?php $skill3 = json_decode($values['skill2']);
                  foreach ($skill3 as $skey3 => $svalue3) echo $skey3.' - '.$svalue3;
                  ?></span><br>
                  <span><?php $skill4 = json_decode($values['skill3']);
                  foreach ($skill4 as $skey4 => $svalue4) echo $skey4.' - '.$svalue4;
                  ?></span><br>
                  <span><?php $skill5 =  json_decode($values['skill4']);
                  foreach ($skill5 as $skey5 => $svalue5) echo $skey5.' - '.$svalue5;
                  ?></span>
                </span>
            </div>

          </div>
        </div>


        <div class="row">
              <div class="btn-form text-center mTop-20 col-md-12">
                <a href="<?php echo site_url() ?>user/apply_job" > <button class="btn btn-fill mRight-10" >Apply</button></a>
                <button class="btn">Reject</button>
              </div>
        </div>

       <!--  <div class="row">
          
          <div class="col-md-12 mTop-20">            
            <div class="row">
              <div class="col-md-6">
               <label>Company:</label><span><?php echo $values['company_name'];?></span>
              </div>
              <div class="col-md-6">
               <label>Job Type:</label><span><?php echo $values['job_type'];?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Job code:</label><span><?php echo $values['Job_code'];?></span>
              </div>
              <div class="col-md-6">
                <label>Role:</label><span><?php echo $values['job_role'];?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Experience:</label><span><?php echo $values['min_exp'];?> - <?php echo $values['max_exp'];?> Years</span>
              </div>
              <div class="col-md-6">
                <label>Location:</label><span>
                <?php $locations = json_decode($values['preferred_location']); 
                        foreach($locations as $location => $lvalues) {
                        $ploca .= $lvalues.', ';
                     } echo rtrim($ploca,', '); ?>
                </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Keyskills:</label><span>
                  <?php $primary_skill =  json_decode($values['primary_skill']);
                  foreach ($primary_skill as $pkey => $pvalue) {
                    echo $pkey.' - '.$pvalue;
                  }
                    ?>
                </span>
              </div>
              <div class="col-md-6">
                <label>Salary:</label><span><?php echo $values['salary_lakhs']; ?> Lakhs</span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label>Skills</label><span><?php  $skill1 = json_decode($values['skills']);
            foreach ($skill1 as $skey1 => $svalue1) echo $skey1.' - '.$svalue1;
            ?></span><br>
            <span><?php $skill2 = json_decode($values['skill1']);
            foreach ($skill2 as $skey2 => $svalue2) echo $skey2.' - '.$svalue2;
            ?></span><br>
            <span><?php $skill3 = json_decode($values['skill2']);
            foreach ($skill3 as $skey3 => $svalue3) echo $skey3.' - '.$svalue3;
            ?></span><br>
            <span><?php $skill4 = json_decode($values['skill3']);
            foreach ($skill4 as $skey4 => $svalue4) echo $skey4.' - '.$svalue4;
            ?></span><br>
            <span><?php $skill5 =  json_decode($values['skill4']);
            foreach ($skill5 as $skey5 => $svalue5) echo $skey5.' - '.$svalue5;
            ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label>No.Positions:</label><span><?php echo $values['no_positions'];?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="mLeft-0">Job Description:</label>
                <p><?php echo $values['job_description'];?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Opening:</label><span><?php
                $open_timestamp = strtotime($values['open_date_time']);
                echo $opening_date = date('d-m-Y', $open_timestamp);  
                ?></span>
              </div>
              <div class="col-md-6">
                <label>Closing:</label><span><?php
                $open_timestamp = strtotime($values['close_date_time']);
                echo $opening_date = date('d-m-Y', $open_timestamp);  
                ?></span>
              </div>
            </div>
              <div class="row">
              <div class="btn-form text-center mTop-20 col-md-12">
             <a href="<?php echo site_url() ?>
				user/apply_job" > <button class="btn btn-fill mRight-10" >Apply</button></a>
                <button class="btn">Reject</button>
              </div>
            </div>
            </div>
            
          </div> -->
        </div>
        <?php } ?> 
    </section>
 

       
 
     

