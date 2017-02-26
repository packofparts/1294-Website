<div class="body-container body-container live-stream-container hidden-print">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 id="live-stream-title">Watch Maverick compete at Auburn Mountainview!</h2>
                <p class="lead">We will be live streaming from the <a class="event-link" href="http://www.thebluealliance.com/event/2017waamv">PNW Auburn Mountainview District Event</a> on <br>
                 <span class="event-times">March 4th & 5th</span>
                </p>
            </div>
        </div>
        <div class="row">
            <!--<div class="col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1">-->
            <div class="col-xs-12">
                <div class="embed-responsive embed-responsive-16by9" id="">
                    <iframe id="Live-Stream" class="embed-responsive-item" src="http://www.ustream.tv/embed/20054416?v=3&wmode=opaque" scrolling="no" frameborder="0" style="border: 0px none transparent;" seamless allowfullscreen="allowfullscreen"></iframe>
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
                                <a href="http://www.thebluealliance.com/event/2016wamou" title="Add to Calendar" class="addthisevent">
                                    Add to Calendar
                                    <span class="_start">04-03-2017 8:15:00</span>
                                    <span class="_end">05-03-2017 17:30:00</span>
                                    <span class="_zonecode">6</span>
                                    <span class="_summary"><em>FIRST</em> Washington: Auburn Mountainview District Event</span>
                                    <span class="_description"><em>FIRST</em> Washington: Auburn Mountainview District Event</span>
                                    <span class="_location">28900 124th Ave SE, Auburn, WA 98092</span>
                                    <span class="_organizer"><em>FIRST</em> Washington</span>
                                    <span class="_organizer_email">admin@firstwa.org</span>
                                    <span class="_all_day_event">false</span>
                                    <span class="_date_format">DD/MM/YYYY</span>
                                </a>
                            </td>
                            <td style="width: 50%;">
                                <a href="https://www.thebluealliance.com/event/2017waamv/" target="_blank" title="Go to The Blue Alliance" class="go-to-scores" >
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
