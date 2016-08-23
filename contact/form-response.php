<?php
	/*
	 *	This PHP document handles responses from the contact form.
	 *	Responses are sent to an email.
	 *
	 *	@author Austin Jenchi (timtim17)
	 */

	/* START CONFIG BLOCK */
	$sendToEmails = array("austin.jenchi@team1294.org");  // an array of emails to send to ("email1@email.com", "email2@email.com")
	$emailSubject = "1294 Form Response";
	$emailTemplate = "
	<h1>1294 Contact Form</h1>
	<p>A new response has been sent via the 1294 contact form.</p>
	<hr>
	<p><strong>Name:</strong> {{firstName}} {{lastName}}</p>
	<p><strong>Email:</strong> {{email}}</p>
	<p><strong>Subject:</strong> {{subject}}</p>
	<p><strong>Message:</strong> {{message}}</p>
	<p><strong>Mailing List?:</strong> {{mailingList}}</p>
	";
	/* END CONFIG BLOCK */

    header('Content-Type: text/plain');

    function error () {
        echo "ERROR (500)";
        http_response_code(500);
        exit();
    }

    // retrieve
    $data = json_decode(
                urldecode(
                    substr(
                        file_get_contents('php://input')
                    , 5)
                )
            );

    // parse
    $firstName = $data->firstName;
    $lastName = $data->lastName;
    function parseSubjectString ($subject) {
        if ($subject == "sponsor") return "Sponsor";
        else if ($subject == "comp-info") return "Competition Info";
        else if ($subject == "join-team") return "Join the Team";
        else if ($subject == "other") return "Other";
        else error();
    }
    $subject = parseSubjectString($data->subject);
    $email = $data->email;
    $message = $data->message;
    $mailingList = $data->mailingList;
    if($mailingList == true){
    	$mailingList = "Yes";
    }else{
    	$mailingList = "No";
    }

    $email = preg_replace(array('{{firstName}}', '{{lastName}}', '{{email}}', '{{subject}}', '{{message}}', '{{mailingList}}'), array($firstName, $lastName, $subject, $email, $message, $mailingList), $emailTemplate);

    // act
    foreach ($sendToEmails as $email) {
        mail($email, $emailSubject, $email, "MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\nFrom: <webmaster@team1294.org>\r\n");
    }

    // respond
    echo "SUCCESS (200)";
    http_response_code(200);
?>
