<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/includes/upper_header.php'); 
?>
    <title>1294 | Contact Us</title>
    <meta name="description" content="Contact the Team for any Information about Sponsoring or General Information"/>
    <style type="text/css">
        /*Moves over the "valid" or "invalid" glyphicon if it is a field that overlaps with it in a ugly way*/
        #contactForm .inputGroupContainer .form-control-feedback,
        #contactForm .selectContainer .form-control-feedback,
        #contactForm .btn-group .form-control-feedback {
            top: 0;
            right: -30px;
        }
    </style>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.1/css/bootstrapValidator.min.css"/>
<?php
    require($_SERVER['DOCUMENT_ROOT'].'/includes/lower_header.php');
?>
<div class="body-container top-container">
    <div class="container">
        <div class="row-fluid">
            <div class="col-xs-12">
                <div class="center-block text-center">
                    <h1 class="center-block">Need to contact us? This is the place to do it!</h1>
                    <p class="lead">A very nice contact form as well with mailing list sign up, and direct contact information can be found here</p>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-sm-6">
                <h2>Contact Information</h2>
                <hr style="margin-top: 0px; margin-bottom: 0px">
                <p class=""></p><br>

                <div class="row-fluid">
                    <div class="col-xs-12">
                        <address>
                            <strong><a href="http://www.lwsd.org/school/ehs/Pages/default.aspx">Eastlake High School</a></strong><br>
                            Steve Evans | Robotics Team<br>
                            400 228th Ave, NE<br>
                            Sammamish, WA 98074<br>
                            <abbr title="Phone"><span class="glyphicon glyphicon-phone-alt"></span>:</abbr> +1 (425) 936-1500
                        </address>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="col-xs-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Eastlake%20High%20School%2C%20228th%20Avenue%20Northeast%2C%20Sammamish%2C%20WA%2C%20United%20States&key=AIzaSyD0cv4HwJNZDZbKIFNpvEKthoyg6xK4fV0"></iframe>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                
                    <br>
                    <form id= "contactForm" class="form-horizontal" role="form">
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
<div class="body-container">
    <div class="container">
        <div class="row-fluid text-center content-center">
            <div class="col-xs-12">
                <h2 class="section-header">Contact the Board</h2>
            </div>
        </div>
        <div class="row-fluid text-center content-center">
            <div class="col-xs-12 ">
                <div class="col-sm-4">
                    <h3>Alex Friedberg</h3>
                    <div><img class="img-circle" height="100px" width="100px" src="" alt="Picture of Alex"/></div>
                    <div class="club-role">President / Webmaster</div>
                    <p><a class="btn btn-default" href="mailto:alex.friedberg@team1294.org">@ Email</a></p>
                </div>
                <div class="col-sm-4">
                    <h3>Steve Evans</h3>
                    <div><img class="img-circle" height="150px" width="150px" src="" alt="Picture of Steve"/></div>
                    <div class="club-role">Team Advisor</div>
                    <abbr title="Cell Phone"><span class="glyphicon glyphicon-phone"></span>:</abbr> +1 (425) 445-6035</p>
                    <p><a class="btn btn-primary"href="mailto:steve.evans@team1294.org">@ Email</a><br>
                </div>
                <div class="col-sm-4">
                    <h3>Mike Jors</h3>
                    <div><img class="img-circle" height="100px" width="100px" src="" alt="Picture of Mike"/></div>
                    <div class="club-role">Vice-President</div>
                    <p><a class="btn btn-default"href="mailto:mike.jors@team1294.org">@ Email</a></p>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-md-2 col-sm-6">
                    <h3>Pranay Shoroff</h3>
                    <div><img class="img-circle" height="100px" width="100px" src="" alt="Picture of Pranay"/></div>
                    <div class="club-role">Vice-President</div>
                    <p><a class="btn btn-default"href="mailto:pranay.shoroff@team1294.org">@ Email</a></p>
                </div>
                <div class="col-md-2 col-sm-6">
                    <h3>Tucker Sneed</h3>
                    <div><img class="img-circle" height="100px" width="100px" src="" alt="Picture of Tucker"/></div>
                    <div class="club-role">Public-Relations</div>
                    <p><a class="btn btn-default"href="mailto:tucker.sneed@team1294.org">@ Email</a></p>
                </div>
                <div class="col-md-2 col-sm-6">
                    <h3>Shea Cooke</h3>
                    <div><img class="img-circle" height="100px" width="100px" src="" alt="Picture of Shea"/></div>
                    <div class="club-role">Board</div>
                    <p><a class="btn btn-default"href="mailto:shea.cooke@team1294.org">@ Email</a></p>
                </div>
                <div class="col-md-2 col-sm-6">
                    <h3>Jose<span class="hidden-lg hidden-sm"><br></span> Rojas</h3>
                    <div><img class="img-circle" height="100px" width="100px" src="" alt="Picture of Jose"/></div>
                    <div class="club-role">Board</div>
                    <p><a class="btn btn-default"href="mailto:jose.rojas@team1294.org">@ Email</a></p>
                </div>
                <div class="col-md-2 col-sm-6">
                    <h3>Rebecca Zhou</h3>
                    <div><img class="img-circle" height="100px" width="100px" src="" alt="Picture of Rebecca"/></div>
                    <div class="club-role">Board</div>
                    <p><a class="btn btn-default"href="mailto:rebecca.zhou@team1294.org"> @ Email</a></p>
                </div>
                <div class="col-md-2 col-sm-6">
                    <h3>Aravind Sripada</h3>
                    <div><img class="img-circle" height="100px" width="100px" src="" alt="Picture of Aravind"/></div>
                    <div class="club-role">Board</div>
                    <p><a class="btn btn-default"href="mailto:aravind.sripada@team1294.org">@ Email</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    
    $ExtraFooterTags = '
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.1/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" async src="/js/Contact-Us.min.js"></script>';
    
    require($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');
 ?>