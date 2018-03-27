 <!-- About -->
    <section id="about">
      <div class="container">
        
        <div class="row">

          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src=""assets/img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2009-2011</h4>
                    <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>March 2011</h4>
                    <h4 class="subheading">An Agency is Born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>December 2012</h4>
                    <h4 class="subheading">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="assets/img/img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 2014</h4>
                    <h4 class="subheading">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  
                </div>
              </li>
            </ul>
          </div>
        </div>

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
                                  <input name="pancard_no" class="contact-first-name form-control" placeholder="Pancard" required="" type="text">
                              </div>
                              <div class="col-xs-12">
                                  <!-- Email -->
                                  <input name="email" class="contact-email form-control" placeholder="Email*" required="" type="email">
                              </div>
                              <div class="col-xs-12">
                                  <!-- Subject -->                            <input name="password" class="contact-password form-control" placeholder="Password" type="password"  value="<?php echo set_value('password'); ?>"><span class="text-danger"><?php echo form_error('password'); ?></span>
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
                           <input type="text" name="company_name" class="form-control" placeholder="Company name*" required/>
                          </div>

                          <div class="col-xs-12">                            
                           <input type="text" name="url" class="form-control" placeholder="Company url*" required/>
                          </div>
                          
                          <div class="col-xs-12">                            
                           <input type="text" name="city" class="form-control" placeholder="City*" required/>
                          </div>

                          <div class="col-xs-12">                            
                           <input type="text" name="state" class="form-control" placeholder="State*" required/>
                          </div>

                           <div class="col-xs-12">                            
                           <input type="text" name="country" class="form-control" placeholder="Country*" required/>
                          </div>

                           <div class="col-xs-12">                          
                            <input name="email" class="contact-email form-control" placeholder="Email*" required="" type="email">
                          </div>

                          <div class="col-xs-12">
                            <!-- Subject -->                            <input name="password" class="contact-password form-control" placeholder="Password*" type="password"  value="<?php echo set_value('password'); ?>"><span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>
                        <div class="col-xs-12">
                            <!-- Subject -->
                            <input name="confirm_password" class="contact-cmp-password form-control" placeholder="Confirm Password*" type="password"  value="<?php echo set_value('confirm_password'); ?>"><span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
                        </div>
                        
                         <div class="col-xs-12">
                            <div class="checkbox">
                                <input name="agreement" id="agreement5" type="checkbox" checked/>
                                <label for="agreement5">I am ready to complete selection process within 24 hours</label>
                            </div>
                        </div>
                        
                         <div class="col-xs-12">
                            <div class="checkbox">
                                <input name="agreement" id="agreement6" type="checkbox" checked/>
                                <label for="agreement6">I am ready to share temp offer letter from jithire</label>
                            </div>
                        </div>
                         <div class="col-xs-12">
                            <div class="checkbox">
                                <input name="agreement" id="agreement7" type="checkbox" checked/>
                                <label for="agreement7">I will share feedback of the cnadidate within five business days</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="checkbox">
                                <input name="agreement" id="agreement8" type="checkbox" checked/>
                                <label for="agreement8">I will pay 2% of CTC as professional fee</label>
                            </div>
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
        
      </div>
    </section>

