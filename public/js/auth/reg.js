$(document).ready(function () {

    $('.save-signup').on('click', async function() {

        const form      = $('#signupform');
        const formData  = await getAllInput(form);
        const data      = processSerialize(formData);
        var url         = config.routes.register.save;
        var url2        = config.routes.register.dashboard;

        let emptyField = false;
        form.find('input[required], select[required], textarea[required]').each(function () {
            if ($.trim($(this).val()) === '') {
                emptyField = true;
                return false;
            }
        });

        if (emptyField) {
            toastr.error('Please fill in all required fields!', { timeOut: 3000 });
            return;
        }

        const password      = $('#password').val();
        const confirmpass   = $('#confirmpass').val();
        if (password !== confirmpass) {
            toastr.error('Password did not match!', { timeOut: 3000 });
            return;
        }

        $.ajax({
            url: url,
            type: "POST",
            dataType: "json",
            data: data,
            // beforeSend: function(){
            //     $("#loading-overlay").show();
            // },
            success: function(data) {
                // $("#loading-overlay").hide();
                if(data.status == "success"){
                    window.location.replace(url2);
                }else{
                    Swal.fire({
                        title: "Failed!",
                        text: data.message,
                        icon: "error",
                        buttonsStyling: false,
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            },
            error: function(xhr, status, error) {
                toastr.error('Error saving data: ' + error, {timeOut: 5000});
            }
        });
    });

});
