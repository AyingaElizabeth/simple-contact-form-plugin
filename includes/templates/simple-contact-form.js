jQuery(document).ready(function($) {
    $('#enquiry_form').submit(function(event) {
        event.preventDefault();
        alert('ok');

        var form = $(this);

        $.ajax({
            type: "POST",
            url: ajax_object.ajax_url,
            data: form.serialize(),
            success: function(response) {
                // Handle the response from the server
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle any errors
                console.error(error);
            }
        });
    });
});
