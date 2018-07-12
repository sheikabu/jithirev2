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
                                                <a href="<?php echo site_url('user/user_forgot_pass')?>">Forgot password?</a>
                                        </div>
                                      </div>     
                                        <!-- Subject Button -->
                                        <div class="container">
 
  <div class="row">
                                        <div class="btn-form text-center col-sm-6">
                                                <button class="btn btn-fill">Sign In</button>
                                        </div>
										<div class="btn-form text-center col-sm-6">
                            <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" id="myModel" data-target="#myModal">Sign Up</a>
                        </div>
										</div>
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
                                                <a href="<?php echo site_url('user/company_forgot_pass')?>">Forgot password?</a>
                                        </div>
                                      </div>     
                                        <!-- Subject Button --><div class="container">
 
  <div class="row">
                                        <div class="btn-form text-center col-sm-6">
                                                <button class="btn btn-fill">Sign In</button>
                                        </div>
										<div class="btn-form text-center col-sm-6">
                            <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" id="myModel" data-target="#myModal">Sign Up</a>
                        </div>
										</div>
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

                                      <input name="agreement1" id="agreement1" type="checkbox"/>

                                      <label for="agreement1">I am currently available and ready to join in 24 hrs</label>
                                  </div>
                              </div>
                              <div class="col-xs-12" id="agreement2div">
                                  <div class="checkbox">

                                      <input name="agreement2" id="agreement2" type="checkbox"/>

                                      <label for="agreement2">  I will respond to job alerts/offer letter in four business hours</label>
                                  </div>
                              </div>
                              <div class="col-xs-12" id="agreement3div">
                                  <div class="checkbox">

                                      <input name="agreement3" id="agreement3" type="checkbox"/>

                                      <label for="agreement3">  I am ready to attend telephonic interview any time during the business hours without prior notification</label>
                                  </div>
                              </div>
                              <div class="col-xs-12" id="agreement4div" >
                                  <div class="checkbox">

                                      <input name="agreement4" id="agreement4" type="checkbox"/>

                                      <label for="agreement4">  I am ready to join the next business after accepting the offer</label>
                                  </div>
                              </div>
                              <div class="col-xs-12" id="agreement14div">
                                  <!-- First Name -->
                                 <input type="text" class="form-control" id="firstname" name="first_name" placeholder="First name" />
                             
                                  <!-- Pancard -->
                                  <input name="pan_card" class="contact-first-name form-control" placeholder="Pancard"  type="text">
                              
                                  <!-- Email -->
                                  <input name="email" class="contact-email form-control" placeholder="Email*"  type="email">
                             
                                  <!-- Subject --> <input name="password" id="password" class="contact-password form-control" placeholder="Password" type="password" ></span>
                              
                                  <!-- Subject -->
                                  <input name="confirm_password" class="contact-cmp-password form-control" placeholder="Confirm Password" type="password">
                                                       
                                  <input name="role" id="rolesingup"  type="hidden" value="candidate">
                              
                                  <!-- Subject -->
                                  <input name="status" type="hidden" value="inactive">
                              </div>
                              
                              <!-- Subject Button -->
                              <div class="btn-form text-center col-xs-12">
                                  <button class="btn btn-fill">Sign Up</button>
                              </div>
                          </form>
                        </div>
                      
                         <div id="company_view">
						 <?php validation_errors(); ?>
                         <form method="post" class="single-form" id="company_form">
                             <div class="col-xs-12">
                            <div class="checkbox" id="agreement5div">
                                <input name="agreement5" id="agreement5" type="checkbox"/>
                                <label for="agreement5">I am ready to complete selection process within 24 hours</label>
                            </div>
                        </div>
                        
                         <div class="col-xs-12">
                            <div class="checkbox" id="agreement6div">
                                <input name="agreement6" id="agreement6" type="checkbox" required="required"/>
                                <label for="agreement6">I am ready to share temp offer letter from jithire</label>
                            </div>
                        </div>
                         <div class="col-xs-12">
                            <div class="checkbox" id="agreement7div">
                                <input name="agreement7" id="agreement7" type="checkbox" required="required"/>
                                <label for="agreement7">I will share feedback of the cnadidate within five business days</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="checkbox" id="agreement8div">
                                <input name="agreement8" id="agreement8" type="checkbox" required="required"/>
                                <label for="agreement8">I will pay 2% of CTC as professional fee</label>
                            </div>
                        </div>

                          <div class="col-xs-12" id="agreement18div">                            
                           <input type="text" name="company_name" class="form-control" placeholder="Company name*" required/>
                                                    
                           <input type="text" name="url" class="form-control" placeholder="Company url*" required/>
                          
                          
                         <!-- <div class="col-xs-12">                            
                           <input type="text" name="city" class="form-control" placeholder="City*" required/>
                          </div>

                         <div class="col-xs-12">                            
                           <input type="text" name="state" class="form-control" placeholder="State*" >
                          </div>-->
						  
						                             
                           <input type="text" name="TAN" class="form-control" placeholder="TAN*" required/>
                         
                          

                        <select name="country" required class="form-control" value="India" placeholder="Country*">
						              <?php foreach ($get_countries as $contrykey => $contryvalue) { ?>
                           <option <?php if($contryvalue['country_name'] == 'India') { echo"selected"; } ?>><?php echo $contryvalue['country_name']; ?></option>
                          <?php } ?>	                    
                                                    
                            <input name="poc_name" class="form-control" placeholder="POC name*" required="" type="text">
                                                  
                            <input name="phone_no" id="phone_no" class="form-control" onkeydown='return (event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105) || event.which == 8 || event.which == 46' placeholder="Phone Number*" value="<?php echo set_value('phone_no'); ?>" required=""  >
							
                                                  
                            <input name="email" class="contact-email form-control" id="myemail"  placeholder="Email*" required="" >
                          
                            <!-- Subject --> 
							<input name="cpassword" class="contact-password form-control" placeholder="Password*" type="password"  id="cpassword"><span class="text-danger"></span>
                       
                            <!-- Subject -->
                            <input name="cconfirm_password" class="contact-cmp-password form-control" placeholder="Confirm Password*" type="password"><span class="text-danger"></span>
                        </div>
                        
                        
                        <div class="col-xs-12">                          
                            <input name="role" id="rolesingup" type="hidden" value="company">
                        </div>
                        <div class="col-xs-12">
                            <!-- Subject -->
                            <input name="status" type="hidden" value="inactive">
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
$("#myModel").click(function () {  
    $("#candidate_form")[0].reset();
    $("#agreement2div").hide();
    $("#agreement3div").hide();
    $("#agreement4div").hide();
    $("#agreement14div").hide();

    $("#company_form")[0].reset();
    $("#agreement6div").hide();
    $("#agreement7div").hide();
    $("#agreement8div").hide();
    $("#agreement18div").hide();
});

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
   $("#agreement4").click(function () {
      if ($(this).is(":checked")) {
          $("#agreement14div").show();
      }
  });

  $("#agreement2div").hide();
  $("#agreement3div").hide();
  $("#agreement4div").hide();
   $("#agreement14div").hide();


});

</script>
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
   $("#agreement8").click(function () {
      if ($(this).is(":checked")) {
          $("#agreement18div").show();
      }
  });

  $("#agreement6div").hide();
  $("#agreement7div").hide();
  $("#agreement8div").hide();
  $("#agreement18div").hide();


});
</script>

<script type="text/javascript">
    $.validator.setDefaults( {
      submitHandler: function () {
        //alert( "submitted!" );
        var checkcanform = $('#candidate_form');
        var checkcompfom = $('#company_form');

         var scheckcanform = checkcanform.serializeArray();
        scheckcanform.forEach(function (item) {
        if (item.name === 'first_name') {
           if(item.value!=''){
            var form = $('#candidate_form');
             $.ajax({
            type: "POST",
            url: "<?php echo site_url('user/register_check'); ?>",
            cache: false,  
            data: form.serialize(), // <--- THIS IS THE CHANGE        
            success: function(message){
              if(message==='success') {
              $("div.sign-in-options-wrap").hide();
              $("div#candidate_view").hide();
              var message = "<div class='alert alert-success text-center'>"+"Thank You for registering with Jithire."+"</div>";
              $('#message').html(message); } else {
              var message = "<div class='alert alert-danger text-center'>"+ "Email already Exist!."+"</div>";
              $('#message').html(message);

              }
              
            },
            error: function() { alert("Error posting feed."); }
            });
           }
        }
      }); 

        var scheckcompfom = checkcompfom.serializeArray();
        scheckcompfom.forEach(function (item) {
        if (item.name === 'company_name') {
           if(item.value!=''){
            var form = $('#company_form');
            $.ajax({
              type: "POST",
              url: "<?php echo site_url('user/registration_company'); ?>",
              cache: false,  
              data: form.serialize(), // <--- THIS IS THE CHANGE        
              success: function(message){
                if(message==='success') { 
                $("div.sign-in-options-wrap").hide();
                $("div#company_view").hide();
                var message = "<div class='alert alert-success text-center'>"+"Thank You for registering with Jithire."+"</div>";
                $('#message').html(message); } else {
                var message = "<div class='alert alert-danger text-center'>"+ "Email already Exist!."+"</div>";
                $('#message').html(message);
                }
              },
              error: function() { alert("Error posting feed."); }
         });
           }
        }
      }); 

       
      }
    } );

    
      $( "#candidate_form" ).validate( {
        rules: {
           agreement1: "required",
           agreement2: "required",
           agreement3: "required",
           agreement4: "required",
          first_name: "required",
          pan_card: "required",
          email: {
            validate_email: true
          },
          password: {
            required: true,
            minlength: 5
          },
          confirm_password: {
            required: true,
            minlength: 5,
            equalTo: "#password"
          },
          agreement1: "required",
         },
        messages: {
          agreement1: {
            required : "check the checbox",
          },
          agreement2: {
            required : "check the checbox",
          },
          agreement3: {
            required : "check the checbox",
          },
          agreement4: {
            required : "check the checbox",
          },
          first_name: "Please enter your firstname",
          pan_card: "Please enter your PAN Card", 
          email: "Please enter a valid email address", 
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          confirm_password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
          },      
          agreement1: "I agree to the Terms and Conditions",  
        },

        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      
      } );

      $( "#company_form" ).validate( {
        rules: {
          agreement5: "required",
           agreement6: "required",
           agreement7: "required",
           agreement8: "required",
          company_name: "required",
           url: "required",
          TAN: "required",
          country: "required",
          poc_name: "required",
          phone_no: "required",
          email: {
            validate_email: true
          },
          cpassword: {
            required: true,
            minlength: 5
          },
          cconfirm_password: {
            required: true,
            minlength: 5,
            equalTo: "#cpassword"
          },
         },
        messages: {
          agreement5: {
            required : "check the checbox"
          },
           agreement6: {
            required : "check the checbox",
          },
          agreement7: {
            required : "check the checbox",
          },
          agreement8: {
            required : "check the checbox",
          },
          company_name: "Please enter your company_name", 
          url: "Please enter your Website URL",
          TAN: "Please enter your TAN",
          country: "Please select your country",
          poc_name: "Please enter your POC Name",
          phone_no: "Please enter your Phone Number",

          email: "Please enter a valid email address", 
          cpassword: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          cconfirm_password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
          },        
        },

        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      
      } );
    

jQuery.validator.addMethod("validate_email", function(value, element) {

if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
return true;
} else {
return false;
}
}, "Please enter a valid Email.");

      </script>