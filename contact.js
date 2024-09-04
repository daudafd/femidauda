// contact.js
$(document).ready(function() {
    $('#contactForm').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        var formData = $(this).serialize(); // Serialize the form data

        $.ajax({
            type: 'POST',
            url: 'submit_contact.php',
            data: formData,
            success: function(response) {
                $('#formResponse').html(response); // Display the response in the formResponse div
                $('#contactForm')[0].reset(); // Reset the form
            },
            error: function() {
                $('#formResponse').html('An error occurred. Please try again.');
            }
        });
    });
});
