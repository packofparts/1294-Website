$(document).ready(function () {
    $('#contactForm')
        .bootstrapValidator({
            feedbackIcons: {
                required: 'glyphicon glyphicon-asterisk',
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                email: {
                    validators: {
                        emailAddress: {
                            message: 'The value is not a valid email address'
                        }
                    }
                },
                fullName: {
                    validators: {
                        notEmpty: {
                            message: 'The full name is required'
                        }
                    }
                },
                subject: {
                    validators: {
                        notEmpty: {
                            message: ''
                        }
                    }
                },
                formMessage: {
                    validators: {
                        notEmpty: {
                            message: 'Please provide a message'
                        }
                    }
                }
            }
        })
        .on('error.field.bv', function(e, data) {
            data.element
                .data('bv.messages')
                .find('.help-block[data-bv-for="' + data.field + '"]').hide();
        })
        .on('success.form.bv', function (e) {
            //Prevent Default Form Submission
            e.preventDefault();
            var btn = $('#submitForm');
            btn.button('loading');
            alert("We would submit the form but theres no backend to support it yet");
            //insert some Ajax here
            btn.button('reset')
        });

    $('#resetBtn').click(function () {
        $('#contactForm').data('bootstrapValidator').resetForm(true);
    });
});

