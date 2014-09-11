<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/includes/upper_header.php'); 
?>
    <title>1294 | Contact Us</title>
    <meta name="description" content="Contact the Team for any Information about Sponsoring or General Information"/>
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
            <div class="col-sm-5">
                <h2>This is some contact Information</h2>
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
            </div>
            <div class="col-sm-6 col-sm-offset-1">
                <br>
                <form id="contactForm" class="form-horizontal" role="form">
                    <fieldset>
                        <legend><h2>Contact us directly with this form!</h2></legend>
                        <div class="form-group">
                            <label for="fullName" class="col-lg-2 control-label">Full Name</label>
                            <div class="col-lg-10">
                                <input type="text" id="fullName" class="form-control" name="fullName" placeholder="Full Name"/>
                            </div>
                        </div>                      
                        
                        
                        <div class="form-group">
                            <label for="subject" class="col-lg-2 control-label">Subject</label>
                            <div class="col-lg-10 selectContainer">
                                <select class="form-control" name="subject" id="subject">
                                    <option value="" disabled selected >Select an option</option>
                                    <option value="sponsor" >Sponsor</option>
                                    <option value="joinTeam" >Join the Team</option>
                                    <option value="info" >Team Information</option>
                                    <option value="compInfo">Competition Info</option>
                                    <option value="other" >Other</option>
                                </select>
                                <span class="help-block">What is it that you are contacting us about?</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <!--input type="email" class="form-control" id="inputEmail" placeholder="Your Email" data-bv-emailaddress-message="try again" required />-->
                                <input type="email" class="form-control" name="email" placeholder="Your Email Address" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formMessage" class="col-lg-2 control-label">Message</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="formMessage" name="formMessage" required></textarea>
                                <span class="help-block">Please Provide as Much Information as Possible</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mailingList" class="col-lg-2 control-label">Radios</label>
                            <div class="col-lg-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="" id="mailingList" value="mailing-list">
                                        We only send out Mailing Lists when its crucial
                                        </input>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                            <button type="button" class="btn btn-danger pull-left add-tooltip" id="resetBtn" data-resetFormData="true" data-toggle="tooltip" data-placement="top" title="Click Here to Reset Form"> Reset Form <span class="glyphicon glyphicon-remove-sign"></span></button>
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
    <script type="text/javascript" src="/js/Contact-Us.js"></script>';
    
    require($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');
 ?>