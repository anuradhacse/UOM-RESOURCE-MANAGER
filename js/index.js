$(document).ready(function() {
    $('#signInForm').bootstrapValidator({
        container: '#messages',
        live:'enabled',
        message:'this value is not  valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The full name is required and cannot be empty'
                    },
                    regexp:{
                        regexp:/^[a-zA-Z0-9_\.]+$/,
                        message:"username format invalid"
                    },
                    stringLength:{
                        min:6,
                        max:30,
                        message:'username must between 6 to 30 characters'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    regexp:{
                        regexp:/^\S{6,20}$/,
                        message:"username format invalid"
                    }

                }
            }

        }
    });
});
