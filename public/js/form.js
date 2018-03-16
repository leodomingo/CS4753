$(function() {
    $('#showPassword').on('mousedown touchstart', function(e) {
        $('#instaPassword').attr({ 'type': 'text' });
    }).bind('mouseup mouseleave touchend', function() {
        $('#instaPassword').attr({ 'type': 'password' });
    });
    $('#signUpForm').parsley({
        trigger: 'input',
        successClass: "has-success",
        errorClass: "has-error",

        classHandler: function(el) {
            return el.$element.closest('.form-group'); //working
        },
        errorsWrapper: '<div class="invalid-message"></div>',
        errorTemplate: '<span class="error-msg"></span>',
    });
    $('#city').bind('keypress', function(e) {
        if ($('#city').val().length >= 0) {
            var regex = new RegExp("^[a-zA-Z \b]+$");
            var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }
    });
    $('#userName').bind('keypress', function(e) {
        if ($('#userName').val().length >= 0) {
            if (e.which == 32) {
                e.preventDefault();
            }
        }
    });
    $('#instaName').bind('keypress', function(e) {
        if ($('#instaName').val().length >= 0) {
            if (e.which == 32) {
                e.preventDefault();
            }
        }
    });
    $('#email').bind('keypress', function(e) {
        if ($('#email').val().length >= 0) {
            if (e.which == 32) {
                e.preventDefault();
            }
        }
    });

    $('#instaPassword').bind('keypress', function(e) {
        if ($('#instaPassword').val().length >= 0) {
            if (e.which == 32) {
                e.preventDefault();
            }
        }
    });
    $('#firstName').bind('keypress', function(e) {
        if ($('#firstName').val().length >= 0) {
            var regex = new RegExp("^[a-zA-Z \b]+$");
            var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }
    });
    $('#lastName').bind('keypress', function(e) {
        if ($('#firstName').val().length >= 0) {
            var regex = new RegExp("^[a-zA-Z \b]+$");
            var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }
    });

    $('#address').bind('keypress', function(e) {
        if ($('#address').val().length >= 0) {
            var regex = new RegExp("^[0-9a-zA-Z \b]+$");
            var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }
    });
    $('#zip').bind('keypress', function(e) {
        if ($('#zip').val().length >= 0) {
            var regex = new RegExp("^[0-9 \b]+$");
            var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }
    });

});