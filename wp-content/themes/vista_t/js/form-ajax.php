<script>
    jQuery(document).ready(function () {
        // this is the id of the form

        jQuery("#static-form").submit(function (e) {

            jQuery("#submit-static-form").html("<?php _e('Sending ...', 'vista_t') ?>");
            var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

            var form = jQuery('#static-form')[0]; // You need to use standart javascript object here
            var formData = new FormData(form);

            jQuery.ajax({
                url: url,
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function (data) {
                    if (data == 1) {
                        jQuery("#submit-static-form").html("<?php _e('Successfully sent', 'vista_t') ?>");

                        jQuery('#static-form')[0].reset();

                        setTimeout(func, 10000);

                        function func() {
                            jQuery("#submit-static-form").html("<?php _e('Resend', 'vista_t') ?>");
                        }
                    }

                    else {
                        jQuery("#submit-static-form").html("<?php _e('Error', 'vista_t') ?>");

                        setTimeout(func, 3000);

                        function func() {
                            jQuery("#submit-static-form").html("<?php _e('Resend', 'vista_t') ?>");
                        }
                    }
                },

                error: function (data) {
                    jQuery("#submit-static-form").html("<?php _e('Error', 'vista_t') ?>");

                    setTimeout(func, 3000);

                    function func() {
                        jQuery("#submit-static-form").html("<?php _e('Resend', 'vista_t') ?>");
                    }
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
    });
</script>