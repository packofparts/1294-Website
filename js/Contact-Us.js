$(document).ready(function () {
    $('#contactForm')
        .bootstrapValidator({
            excluded: [':disabled', ':hidden', ':not(:visible)'],
            container: 'popover',
            feedbackIcons: {
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
                            message: 'First Name is a Required Field'
                        },
                        stringLength: {
                            min: 3,
                            max: 30,
                            message: 'First Name must be between 3 and 30 characters long'
                        }
                    }
                },
                lastName: {
                    group: '.col-lg-5',
                    validators: {
                        notEmpty: {
                            messgae: 'Last Name is a Required Field'
                        },
                        stringLength: {
                            min: 3,
                            max: 30,
                            message: 'First Name must be between 3 and 30 characters long'
                        }
                    }
                },
                subject: {
                    validators: {
                        notEmpty: {
                            message: 'A Subject is Required'
                        }
                    }
                },
                email: {
                    validators: {
                        emailAddress: {
                            message: 'Please Enter a Valid Email Address'
                        }
                    }
                },
                formMessage: {
                    validators: {
                        notEmpty: {
                            message: 'Please provide a message'
                        },
                        stringLength: {
                            min: 25,
                            max: 500,
                            message: 'Message must be between 25 and 500 characters long. Try contacting us via email if your having trouble.'
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
            //Do some cool fadeing after this so that the form disapears
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

        