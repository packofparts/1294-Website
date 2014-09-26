<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/includes/upper_header.php'); 
?>
    <title>1294 | Contact Us</title>
    <meta name="description" content="Contact the Team for any Information about Sponsoring or General Information"/>
    <style type="text/css">
        /*Moves over the "vali" or "invalid" glyphicon if it is a field that overlaps with it in a ugly way*/
        #contactForm .inputGroupContainer .form-control-feedback,
        #contactForm .selectContainer .form-control-feedback,
        #contactForm .btn-group .form-control-feedback {
            top: 0;
            right: -30px;
        }
    </style>
<?php
    require($_SERVER['DOCUMENT_ROOT'].'/includes/lower_header.php');
?>
<div class="body-container top-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="center-block text-center">
                    <h1 class="center-block">Need to contact us? This is the place to do it!</h1>
                    <p class="lead">A very nice contact form as well with mailing list sign up, and direct contact information can be found here</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h2>Contact Information</h2>
                <hr style="margin-top: 0px; margin-bottom: 0px">
                <p class=""></p><br>

                <div class="row">
                    <div class="col-xs-12">
                        <p class="">All meetings will take place in room D123 unless otherwise noted on Calendar</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                            <strong><a href="http://www.lwsd.org/school/ehs/Pages/default.aspx">Eastlake High School</a></strong><br>
                            Steve Evans | Robotics Team<br>
                            400 228th Ave, NE<br>
                            Sammamish, WA 98074<br>
                            <abbr title="Phone">P:</abbr> +1 (425) 936-1500
                        </address>
                    </div>
                    <div class="col-xs-6 text-right">
                        <address>
                            <strong><a href="http://www.lwsd.org/school/ehs/Pages/default.aspx">Eastlake High School</a></strong><br>
                            Steve Evans | Robotics Team<br>
                            400 228th Ave, NE<br>
                            Sammamish, WA 98074<br>
                            <abbr title="Phone">P:</abbr> +1 (425) 936-1500
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p>A really cool google map overaly will go here</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-0">
                <br>
                <form id="contactForm" class="form-horizontal" role="form">
                    <fieldset>
                        <legend><h2>Contact us directly with this form!</h2></legend>
                        <div class="form-group">
                            <label for="firstName" class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-5">
                                <input type="text" id="firstName" class="form-control" name="firstName" placeholder="First Name" maxlength="30"/>
                            </div>
                            <label for="lastName" class="col-lg-2 control-label hidden-lg">Last Name</label>
                            <div class="col-lg-5">
                                <input type="text" id="lastName" class="form-control" name="lastName" placeholder="Last Name"  maxlength="30"/>
                            </div>
                        </div>                      
                        
                        
                        <!--div class="form-group">
                            <label for="subject" class="col-lg-2 control-label">Subject</label>
                            <div class="col-lg-10 selectContainer inputGroupContainer">
                                <select class="form-control" name="subject[]" id="subject">
                                    <option value="" selected>Select an option</option>
                                    <option value="sponsor" >Sponsor</option>
                                    <option value="joinTeam" >Join the Team</option>
                                    <option value="info" >Team Information</option>
                                    <option value="compInfo">Competition Info</option>
                                    <option value="other" >Other</option>
                                </select>
                            </div>
                        </div-->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Subject</label>
                            <div class="col-lg-10">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default">
                                        <input type="radio" name="subject" value="sponsor" /> Sponsor
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="subject" value="comp-info" /> Competition Info
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="subject" value="join-team" /> Join the Team
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="subject" value="general" /> General
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" name="subject" value="other" /> Other
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <!--input type="email" class="form-control" id="inputEmail" placeholder="Your Email" data-bv-emailaddress-message="try again" required />-->
                                <input type="email" class="form-control" name="email" placeholder="Your Email Address" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formMessage" class="col-lg-2 control-label">Message</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="formMessage" name="formMessage" placeholder="We need to know what you're contacting us about" maxlength="500" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mailingList" class="col-lg-2 control-label">Mailing List</label>
                            <div class="col-lg-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="mailingBtn[]" id="mailingList" value="mailing-list">
                                        If you plan to be a part of the team, Click This!
                                        </input>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                            <button type="button" class="btn btn-danger pull-left add-tooltip" id="resetBtn" data-resetFormData="true" data-toggle="tooltip" data-placement="top" title="Click Here To Reset The Form"> Reset Form <span class="glyphicon glyphicon-remove-sign"></span></button>
                            <button type="submit" class="btn btn-success pull-right" id="submitForm" name="submit" disabled="disabled" data-loading-text="Submiting..."> Submit <span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
    
    $ExtraFooterTags = '<link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.1/css/bootstrapValidator.min.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.1/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="/js/Contact-Us.min.js"></script>';
    
    require($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');
 ?>