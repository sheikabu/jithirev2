<div class="sign-in-wrap col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1">
<div id="sign-in-form" class="sign-form" tabindex="-1" role="dialog">
    <form method="post" id="forget_password" class="single-form">
    <span id="message"></span>    
    <div class="col-xs-12">
        <input name="password" class="contact-password form-control" placeholder="Password" id="password" type="password">
    </div>
    <div class="col-xs-12">
        <input name="confirm_password" class="contact-cmp-password form-control" placeholder="Confirm Password" type="password">
    </div>
     <input type="hidden" name="company_id" value="<?php echo $company_id; ?>">
    <div class="btn-form text-center col-xs-12">
    <button class="btn btn-fill">Submit</button>
    </div>
    </form>
</div>
</div>

<script type="text/javascript">

$.validator.setDefaults( {
      submitHandler: function () {
        //alert( "submitted!" );
        var form = $('#forget_password');
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('user/forget_password_update_company'); ?>",
            cache: false,  
            data: form.serialize(), // <--- THIS IS THE CHANGE        
            success: function(message){
              $('#message').html(message);
            },
            error: function() { alert("Error posting feed."); }
            });
        }
    } );

    $( "#forget_password" ).validate( {
        rules: {
          password: {
            required: true,
            minlength: 5
          },
          confirm_password: {
            required: true,
            minlength: 5,
            equalTo: "#password"
          },
         },
        messages: {
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          confirm_password: {
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
</script>