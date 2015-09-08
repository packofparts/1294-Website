$(document).ready(function () {
    var contactForm = $('#contactForm'),
        formSuccess = $('#formPostSuccess'),
        formError = $('#formPostFail');

    function resetForm () {
        contactForm.data('bootstrapValidator').resetForm(true);
        contactForm.find('.has-feedback, .has-success, .has-error').removeClass("has-feedback has-success has-error");
        contactForm.find('.form-control-feedback').css('display', 'none');
        contactForm.find('#subject .active').removeClass('active');
        contactForm.find('#mailingList').prop('checked', false);
        contactForm.find('i.form-control-feedback:not([data-bv-icon-for="subject"])').css('right', '15px').css('top', '0');
        formSuccess.slideUp("slow", function() {
            contactForm.slideDown("slow");
        });
    }

    contactForm
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

            var jsonObject = {
                firstName: $('#firstName').val(),
                lastName: $('#lastName').val(),
                subject: $('#subject').find('.active input').val(),
                email: $('#email').val(),
                message: $('#formMessage').val(),
                mailingList: $('#mailingList').is(':checked')
            };
            $.ajax({
                contentType: 'text/plain',
                data: {data: JSON.stringify(jsonObject)},
                dataType: 'text',
                method: 'POST',
                url: 'form-response.php',
                success: function () {
                    formError.slideUp("slow", function () {
                        contactForm.slideUp("slow", function () {
                            formSuccess.slideDown("slow");
                        });
                    });
                },
                error: function () {
                    formError.slideDown("slow");
                }
            });
            btn.button('reset');
        })
        .on('error.field.bv', function (e, data) {
            data.element
                .data('bv.messages')
                .find('.help-block[data-bv-for="' + data.field + '"]').hide();
        });

    $('#resetBtn').click(function () {
        resetForm();
    });

    $('#btn-newform').click(function () {
        resetForm();
    });

});

        