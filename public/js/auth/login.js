$(document).ready(function () {

    $('.save-signin').on('click', async function() {

        const form      = $('#signinform');
        const formData  = await getAllInput(form);
        const data      = processSerialize(formData);
        var url         = config.routes.login.save;
        var url2        = config.routes.login.dashboard;

        const email      = $('#email').val();
        const password   = $('#password').val();

        if (email == '') {
            toastr.error('Please insert your email!', { timeOut: 3000 });
            return;
        }

        if (password == '') {
            toastr.error('Please insert your password!', { timeOut: 3000 });
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
