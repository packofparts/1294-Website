$(document).ready(function () {
    $('#contactForm')
        .bootstrapValidator({
            excluded: [':disabled', ':hidden', ':not(:visible)'],
            container: 'popover',
            feedbackIcons: {
                required: 'glyphicon glyphicon-asterisk',
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'Please Enter Something Into This Field',
            fields: {
                firstName: {
                    group: '.col-lg-5',
                    validators: {
                        notEmpty: {
                            message: 'Name is Required'
                        },
                        stringLength: {
                            min: 2,
                            message: 'Name must be atleast 2 characters'
                        }
                    }
                },
                lastName: {
                    group: '.col-lg-5',
                    validators: {
                        notEmpty: {
                            messgae: 'Name is Required'
                        },
                        stringLength: {
                            min: 2,
                            message: 'Name must be atleast 2 characters'
                        }
                    }
                },
                subject: {
                    validators: {
                        notEmpty: {
                            message: 'Name is Required'
                        }
                    }
                },
                email: {
                    validators: {
                        emailAddress: {
                            message: 'The value is not a valid email address'
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
        .on('success.form.bv', function (e) {
            //Prevent Default Form Submission
            e.preventDefault();
            var btn = $('#submitForm');
            btn.button('loading');
            alert("We would submit the form but theres no backend to support it yet");
            //insert some Ajax here
            btn.button('reset');
            //Do some cool fadeing so that the form disapears
        })
        .on('error.field.bv', function (e, data) {
            data.element
                .data('bv.messages')
                .find('.help-block[data-bv-for="' + data.field + '"]').hide();
        });


});
$('#resetBtn').click(function () {
    $('#contactForm').data('bootstrapValidator').resetForm(true);
});

        