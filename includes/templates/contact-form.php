


<div id="form_success" style="background-color:green; color:#fff;"></div>
<div id="form_error" style="background-color:red; color:#fff;"></div>
<form action="" id="enquiry_form">

<?phpwp_nonce_field('wp_rest');?>
    
<label for="">Name</label>
<input type="text" name="Name"><br><br>

<label for="">email</label>
<input type="Email" name="Email"><br><br>

<label for="">Name</label>
<input type="phone" name="Phone"><br><br>

<label for="">Enter message</label><br>
<textarea name="Message"></textarea><br><br>

<button type="submit">submit</button>
</form>

<script>
    jQuery(document).ready(function($){
        $("#enquiry_form").submit( function(event){

            event.preventDefault();

            $("#form_error").hide();

            var form = $(this);
          $.ajax({
           
            type:"POST",
            url: "<?php echo get_rest_url(null, 'v1/contact-form/submit');?>",
            data: form.serialize(),
             success:function(res){

                form.hide();

                 $("#form_success").html(res).fadeIn();


                },
                error: function(){

                      $("#form_error").html("There was an error submitting").fadeIn();
                }
           })

        });
    })
</script>
