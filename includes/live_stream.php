<div class="body-container body-container live-stream-container hidden-print">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 id="live-stream-title">Watch Maverick compete at Glacier Peak!</h2>
                <p class="lead">We will be compiting at the <a class="event-link" href="http://www.thebluealliance.com/event/2017wasno">PNW Glacier Peak District Event</a> on <br>
                 <span class="event-times">March 25th &amp; 26th</span>
                </p>
            </div>
        </div>
        <div class="row">
            <!--<div class="col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1">-->
            <div class="col-xs-12">
                <div class="embed-responsive embed-responsive-16by9" id="">
                    <iframe id="Live-Stream" class="embed-responsive-item" src="https://player.twitch.tv/?channel=firstwa_blue" scrolling="no" frameborder="0" style="border: 0px none transparent;" seamless allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="stream-buttons">
                    <tbody>
                        <tr style="width:100%;">
<?php
//                            /*
//                            *The following code is to get rid of the calendar button when the event is in progress or when the event has passed
//                            *We'll eventually be able to do this by checking the event database
//                            *
//                            * TBA API
//                            * -------
//                            * https://www.thebluealliance.com/apidocs
//                            * http://www.thebluealliance.com/api/v2/team/frc1294/2016/events
//                            *
//                            * FIRST FMS API
//                            * -------------
//                            * http://docs.frcevents2.apiary.io/
//                            *
//                            */
//                            $eventDate='18-03-2016';
//                            if(strtotime($eventDate) > strtotime('today')){
//                                /*Its not passed the event date, show the "before event" button*/ ?>
                            <td style="width: 50%;">
                                <a href="https://www.google.com/calendar/event?eid=bmFhYjFhZWpxc2hvMTZnY21hcXY0aHZlZG8gd2VibWFzdGVyQHRlYW0xMjk0Lm9yZw" title="Add to Calendar" class="go-to-scores" target="_blank">
                                    <span class="glyphicon glyphicon-calendar"></span> Add to Calendar
                                </a>
                            </td>
                            <td style="width: 50%;">
                                <a href="https://www.thebluealliance.com/event/2017wasno/" target="_blank" title="Go to The Blue Alliance" class="go-to-scores" >
                                    <span class="glyphicon glyphicon-list-alt"></span> More Information at The Blue Alliance
                                </a>
                            </td>
                            <?php
//                            }
                            //else
//                            {
//                                /*It has passed the event date, the event may be live streaming right now so show the correct buttons accordingly*/
//                            }
//                            /*End of PHP for date checking, well evetually do everything automatically with the database at some point*/
//                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
