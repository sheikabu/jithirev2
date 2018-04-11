<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-left">
            <span class="copyright">Copyright &copy; jithire 2017</span>
          </div>
          
          <div class="col-md-6 text-right">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>

</html>
     <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>assets/js/agency.min.js"></script>
    
    
   <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

   <!--SHEIK datatable-->
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
     <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> 
     <!--SHEIK datatable END-->

   <script>
   $("#candidate").click(function(){
      $("#candidate_view").show();
      $("#company_view").hide();
    }); 
    $("#company").click(function(){
      $("#candidate_view").hide();
      $("#company_view").show();
    });
     $("#company_view").hide();
</script>


<script>
/*$('form#candidate_form').submit(function(e) {
    var form = $(this);
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('user/register_check'); ?>",
        cache: false,  
        data: form.serialize(), // <--- THIS IS THE CHANGE        
        success: function(message){
          $('#message').html(message);
        },
        error: function() { alert("Error posting feed."); }
   });

});*/
</script>

<script>
/*$('form#company_form').submit(function(e) {
    var form = $(this);
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('user/registration_company'); ?>",
        cache: false,  
        data: form.serialize(), // <--- THIS IS THE CHANGE        
        success: function(message){
          $('#message').html(message);
        },
        error: function() { alert("Error posting feed."); }
   });

});*/
</script>

<script>
   $("#candidate-sign-in").click(function(){
      $("#candidate-sign-in-form").show();
      $("#company-sign-in-form").hide();
       $('#company-sign-in-message').hide();
    }); 
    $("#company-sign-in").click(function(){
      $("#candidate-sign-in-form").hide();
      $("#company-sign-in-form").show();
      $('#candidate-sign-in-message').hide();
    });
     $("#company-sign-in-form").hide();
</script>

<script>
$('form#candidate-Sform').submit(function(e) {
    var form = $(this);
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('user/login_check'); ?>",
        cache: false,  
        data: form.serialize(), // <--- THIS IS THE CHANGE        
        success: function(message){
          if(message=='success') {
             top.location.href="<?php echo site_url('user/user_details'); ?>";//redirection
           } else {
          $('#candidate-sign-in-message').html(message);
          }
          
        },
        error: function() { alert("Error posting feed."); }
   });

});
</script>

<script>
$('form#company-Sform').submit(function(e) {
    var form = $(this);
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('user/company_login_check'); ?>",
        cache: false,  
        data: form.serialize(), // <--- THIS IS THE CHANGE        
        success: function(message){
          if(message=='success') {
             top.location.href="<?php echo site_url('user/company_dashboard'); ?>";//redirection
           } else {
          $('#company-sign-in-message').html(message);
          }
          
        },
        error: function() { alert("Error posting feed."); }
   });

});
</script>


<script> 

$(".user-dropdown").click(function(){
    $(".dropdown-menu ").addClass("show");
});




</script>
