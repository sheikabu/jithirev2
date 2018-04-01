 <section id="login">
    
      <div class="container">
        <div class="row">
        <div class="intro-text spot-view col-md-8 text-left">

        </div>
        <!-- =============== Start: Sign In Form =================== -->
                        <div class="sign-in-wrap col-md-4 col-md-offset-1 col-sm-6 col-sm-offset-1">
                         <div class="sign-in-options-wrap">
                           <label class="label">Jobseeker <input type="radio" name='Srole' id="candidate-sign-in" class="candidate" value="candidate" checked> 
                             <span class="checkmark"></span>
                            </label>
                            <label class="label">Employer <input type="radio" name='Srole' id="company-sign-in" class="company" value="company">
                             <span class="checkmark"></span>
                            </label>
                         </div>
                        <!-- Job Seeker Login -->

                            <div id="candidate-sign-in-form" class="sign-form" tabindex="-1" role="dialog">
                            <div id="candidate-sign-in-message"></div>
                                <form method="post" class="single-form" id="candidate-Sform">   
                                <div class="col-xs-12">
                                        <!-- Email -->
                                        <input name="email" class="contact-email form-control" type="email" placeholder="Email*" required="">
                                    </div>
                                        <div class="col-xs-12">
                                                <!-- Subject -->
                                                <input name="password" class="contact-password form-control" type="password" placeholder="Password">
                                        </div>
                                      <div class="row">   
                                        <div class="col-md-6 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="remember-me">
                                                    <label for="remember-me">Remember me</label>
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6 text-right">
                                                <a href="<?php echo site_url('user/forgot')?>">Forgot password?</a>
                                        </div>
                                      </div>     
                                        <!-- Subject Button -->
                                        <div class="btn-form text-center col-xs-12">
                                                <button class="btn btn-fill">Sign In</button>
                                        </div>
                                </form>
                            </div>
                            <!-- Job Seeker Login END -->
                            <!--Employer Login -->
                            <div id="company-sign-in-form" class="sign-form" tabindex="-1" role="dialog">
                                <form method="post" class="single-form" id="company-Sform"> 
                                <div id="company-sign-in-message"></div>   
                                <div class="col-xs-12">
                                        <!-- Email -->
                                        <input name="email" class="contact-email form-control" type="email" placeholder="Email*" required="">
                                    </div>
                                        <div class="col-xs-12">
                                                <!-- Subject -->
                                                <input name="password" class="contact-password form-control" type="password" placeholder="Password">
                                        </div>
                                      <div class="row">   
                                        <div class="col-md-6 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="remember-me">
                                                    <label for="remember-me">Remember me</label>
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6 text-right">
                                                <a href="<?php echo site_url('user/forgot')?>">Forgot password?</a>
                                        </div>
                                      </div>     
                                        <!-- Subject Button -->
                                        <div class="btn-form text-center col-xs-12">
                                                <button class="btn btn-fill">Sign In</button>
                                        </div>
                                </form>
                            </div>
                            <!--Employer Login END-->
                            <div class="text-center mTop-10 hidden">----------- or login with -----------</div>
                            <div class="row sign-in-social hidden">
                                
                                <div class="col-xs-4 col-md-4 social-nav google hidden">
                                    <a href="#" alt="Google" title="Google"><i class="icon icons8-google-logo-filled"></i><span>Google</span></a>
                                </div>
                                <div class="col-xs-4 col-md-4 social-nav facebook hidden">
                                    <a href="#" alt="facebook" title="Facebook"><i class="icon icons8-facebook-filled"></i><span>Facebook</span></a>
                                </div>
                                <div class="col-xs-4 col-md-4 social-nav linkedin hidden">
                                    <a href="#" alt="Linkedin" title="Linkedin"><i class="icon icons8-linkedin-filled"></i><span>Linkedin</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                  </div>
               
                    <!-- End: Sign In Form
                    ================================== -->
</section>

<!-- Footer -->
   
<!-- Register modal start -->
            <div class="sign-form modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                  </div>
                  <div class="modal-body">                  
                    <div id="message"></div>
                  <!--  <input type="radio" name='role' id="candidate" value="candidate" checked=""> I am a Jobseeker
                    <input type="radio" name='role' id="company" value="company"> I am an Employer 

                        <div class="btn-group" data-toggle="buttons">-->
                         <div class="sign-in-options-wrap">
                         <label class="label">Jobseeker's
                          <input type="radio" name='role' id="candidate" class="candidate" value="candidate" checked> 
                           <span class="checkmark"></span>
                          </label>
                          <label class="label">Employer's
                          <input type="radio" name='role' id="company" class="company" value="company">
                           <span class="checkmark"></span>
                          </label>
                         </div> 
                          <div id="candidate_view" class="mTop-20">
                            <form method="post" id="candidate_form" class="single-form">
                              <div class="col-xs-12" id="agreement1div">
                                  <div class="checkbox">
                                      <input name="agreement" id="agreement1" type="checkbox" required="required"/>
                                      <label for="agreement1">I am currently available and ready to join in 24 hrs</label>
                                  </div>
                              </div>
                              <div class="col-xs-12" id="agreement2div">
                                  <div class="checkbox">
                                      <input name="agreement" id="agreement2" type="checkbox" required="required" />
                                      <label for="agreement2">  I will respond to job alerts/offer letter in four business hours</label>
                                  </div>
                              </div>
                              <div class="col-xs-12" id="agreement3div">
                                  <div class="checkbox">
                                      <input name="agreement" id="agreement3" type="checkbox" required="required"/>
                                      <label for="agreement3">  I am ready to attend telephonic interview any time during the business hours without prior notification</label>
                                  </div>
                              </div>
                              <div class="col-xs-12" id="agreement4div" >
                                  <div class="checkbox">
                                      <input name="agreement" id="agreement4" type="checkbox" required="required"/>
                                      <label for="agreement4">  I am ready to join the next business after accepting the offer</label>
                                  </div>
                              </div>
                              <div class="col-xs-12">
                                  <!-- First Name -->
                                  <input name="first_name" class="contact-first-name form-control" placeholder="Name*" required="" type="text">
                              </div>
                              <div class="col-xs-12">
                                  <!-- Pancard -->
                                  <input name="pan_card" class="contact-first-name form-control" placeholder="Pancard" required="" type="text">
                              </div>
                              <div class="col-xs-12">
                                  <!-- Email -->
                                  <input name="email" class="contact-email form-control" placeholder="Email*" required="" type="email">
                              </div>
                              <div class="col-xs-12">
                                  <!-- Subject --> <input name="password" class="contact-password form-control" placeholder="Password" type="password"  value="<?php echo set_value('password'); ?>"><span class="text-danger"><?php echo form_error('password'); ?></span>
                              </div>
                              <div class="col-xs-12">
                                  <!-- Subject -->
                                  <input name="confirm_password" class="contact-cmp-password form-control" placeholder="Confirm Password" type="password"  value="<?php echo set_value('confirm_password'); ?>"><span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
                              </div>
                              <div class="col-xs-12">                          
                                  <input name="role" type="hidden" value="candidate">
                              </div>
                              <div class="col-xs-12">
                                  <!-- Subject -->
                                  <input name="status" type="hidden" value="active">
                              </div>
                              
                              <!-- Subject Button -->
                              <div class="btn-form text-center col-xs-12">
                                  <button class="btn btn-fill">Sign Up</button>
                              </div>
                          </form>
                        </div>
                      
                         <div id="company_view">
                         <form method="post" class="single-form" id="company_form">
                             <div class="col-xs-12">
                            <div class="checkbox" id="agreement5div">
                                <input name="agreement" id="agreement5" type="checkbox" required="required"/>
                                <label for="agreement5">I am ready to complete selection process within 24 hours</label>
                            </div>
                        </div>
                        
                         <div class="col-xs-12">
                            <div class="checkbox" id="agreement6div">
                                <input name="agreement" id="agreement6" type="checkbox" required="required"/>
                                <label for="agreement6">I am ready to share temp offer letter from jithire</label>
                            </div>
                        </div>
                         <div class="col-xs-12">
                            <div class="checkbox" id="agreement7div">
                                <input name="agreement" id="agreement7" type="checkbox" required="required"/>
                                <label for="agreement7">I will share feedback of the cnadidate within five business days</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="checkbox" id="agreement8div">
                                <input name="agreement" id="agreement8" type="checkbox" required="required"/>
                                <label for="agreement8">I will pay 2% of CTC as professional fee</label>
                            </div>
                        </div>

                          <div class="col-xs-12">                            
                           <input type="text" name="company_name" class="form-control" placeholder="Company name*" required/>
                          </div>

                          <div class="col-xs-12">                            
                           <input type="text" name="url" class="form-control" placeholder="Company url*" required/>
                          </div>
                          
                         <!-- <div class="col-xs-12">                            
                           <input type="text" name="city" class="form-control" placeholder="City*" required/>
                          </div>

                         <div class="col-xs-12">                            
                           <input type="text" name="state" class="form-control" placeholder="State*" >
                          </div>-->
						  
						  <div class="col-xs-12">                            
                           <input type="text" name="TAN" class="form-control" placeholder="TAN*" required/>
                          </div>

                           <div class="col-xs-12">      
                        <select name="country" required class="form-control" value="India" placeholder="Country*">
						
		                    <option value ='India'>India</option>
		                    <option value ='Australia' >Australia</option>
							<option value ='Singapore' >Singapore</option>
		                    <option value ='United Arab Emirates' >United Arab Emirates(UAE)</option>						   
                          <!-- <input type="text" name="country" class="form-control" value="India" placeholder="Country*" >-->
                          </div>
                          <div class="col-xs-12">                          
                            <input name="poc_name" class="contact-email form-control" placeholder="Poc name*" required="" type="text">
                          </div>
						   <div class="col-xs-12">                          
                            <input name="phone_no" class="contact-email form-control" placeholder="Phone Number*" value="<?php echo set_value('phone_no'); ?>" required="" type="text" size="10"><span class="text-danger"><?php echo form_error('phone_no'); ?></span>
                          </div>
                           <div class="col-xs-12">                          
                            <input name="email" class="contact-email form-control" placeholder="Email*" required="" type="email">
                          </div>
                          
                          <div class="col-xs-12">
                            <!-- Subject --> 
							<input name="password" class="contact-password form-control" placeholder="Password*" type="password"  value="<?php echo set_value('password'); ?>"><span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>
                        <div class="col-xs-12">
                            <!-- Subject -->
                            <input name="confirm_password" class="contact-cmp-password form-control" placeholder="Confirm Password*" type="password"  value="<?php echo set_value('confirm_password'); ?>"><span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
                        </div>
                        
                        
                        <div class="col-xs-12">                          
                            <input name="role" type="hidden" value="company">
                        </div>
                        <div class="col-xs-12">
                            <!-- Subject -->
                            <input name="status" type="hidden" value="active">
                        </div>
                           <div class="btn-form text-center col-xs-12">
                            <button class="btn btn-fill">Sign Up</button>
                        </div>

                         </form>
                         </div>
                        </div>
                       
                  </div>
                  <!-- <div class="modal-footer hidden">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div> -->
                </div>
              </div>
            </div>
        <!-- register modal end -->
<script>
$(document).ready(function(){

  $("#agreement1").click(function () {
      if ($(this).is(":checked")) {
          $("#agreement2div").show();
      }
  });
  $("#agreement2").click(function () {
      if ($(this).is(":checked")) {
          $("#agreement3div").show();
      }
  });
  $("#agreement3").click(function () {
      if ($(this).is(":checked")) {
          $("#agreement4div").show();
      }
  });

  $("#agreement2div").hide();
  $("#agreement3div").hide();
  $("#agreement4div").hide();


});

</script>
<<<<<<< HEAD
<script>
$(document).ready(function(){

  $("#agreement5").click(function () {
      if ($(this).is(":checked")) {
          $("#agreement6div").show();
      }
  });
  $("#agreement6").click(function () {
      if ($(this).is(":checked")) {
          $("#agreement7div").show();
      }
  });
  $("#agreement7").click(function () {
      if ($(this).is(":checked")) {
          $("#agreement8div").show();
      }
  });

  $("#agreement6div").hide();
  $("#agreement7div").hide();
  $("#agreement8div").hide();


});
</script>
=======

<script type="text/javascript">
  

  $('#myModel').on('click', function (e) {
     $('#candidate_form')[0].reset();
      $('#company_form')[0].reset();
})
>>>>>>> bb51020768b931beaa2d6c9b9e737275f09154bb
</script>
