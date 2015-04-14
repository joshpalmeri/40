<!--
$interestedList, $registerList and $describesList represent 3 unique sets of checkboxes.
 $firstName, $lastName, $email, $phone and $intent represent textbox entries

 Values are collected from post variables
-->

<?php
    require_once($path . 'swiftmailer/lib/swift_required.php');

    // from the form
    $firstName = trim(strip_tags($_POST['first-name']));
    $lastName = trim(strip_tags($_POST['last-name']));
    $email = trim(strip_tags($_POST['email']));
    $phone = trim(strip_tags($_POST['phone']));
    $intent = htmlentities($_POST['intent']);

    $interestedList = '';
    $registerList = '';
    $describesList = '';

    $interested[1] = htmlentities($_POST['interested-01']);
    $interested[2] = htmlentities($_POST['interested-02']);
    $interested[3] = htmlentities($_POST['interested-03']);
    $interested[4] = htmlentities($_POST['interested-04']);
    $interested[5] = htmlentities($_POST['interested-05']);
    $interested[6] = htmlentities($_POST['interested-06']);
    $interested[7] = htmlentities($_POST['interested-07']);
    $interested[8] = htmlentities($_POST['interested-08']);
    $interested[9] = htmlentities($_POST['interested-09']);
    $interested[10] = htmlentities($_POST['interested-10']);
    $interested[11] = htmlentities($_POST['interested-11']);

    $register[1] = htmlentities($_POST['register-01']);
    $register[2] = htmlentities($_POST['register-02']);
    $register[3] = htmlentities($_POST['register-03']);
    $register[4] = htmlentities($_POST['register-04']);
    $register[5] = htmlentities($_POST['register-05']);

    foreach($interested as $key => $value) {
        if (($interested[$key]) != '') {
            $interestedList .=  '- ' . $interested[$key] . '<br />';
        }
    }

    $eventDetails = trim(strip_tags($_POST['event']));

    foreach($register as $key => $value) {
        if (($register[$key]) != '') {
            $registerList .= '- ' . $register[$key] . '<br />';
        }
    }

    $describes[1] = htmlentities($_POST['describes-01']);
    $describes[2] = htmlentities($_POST['describes-02']);
    $describes[3] = htmlentities($_POST['describes-03']);
    $describes[4] = htmlentities($_POST['describes-04']);
    $describes[5] = htmlentities($_POST['describes-05']);
    $describes[6] = htmlentities($_POST['describes-06']);

    foreach($describes as $key => $value) {
        if (($describes[$key]) != '') {
            $describesList .= '- ' . $describes[$key] . '<br />';
        }
    }

    $training[1] = htmlentities($_POST['training-01']);
    $training[2] = htmlentities($_POST['training-02']);
    $training[3] = htmlentities($_POST['training-03']);
    $training[4] = htmlentities($_POST['training-04']);
    $training[5] = htmlentities($_POST['training-05']);
    $training[6] = htmlentities($_POST['training-06']);

    foreach($training as $key => $value) {
        if (($training[$key]) != '') {
            $trainingList .= '- ' . $training[$key] . '<br />';
        }
    }

    $fullName = $firstName . ' ' . $lastName;

    date_default_timezone_set('America/New_York');

    // set email variables
    $to = ''; //enter to email address

    $subject = '';

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    //$headers .= "CC: palmeriamanda@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $body = '<html><body>';
    $body = '<img src="http://dayspringdanceministries.com/assets/email/images/dayspring-color.png" alt="Dayspring Logo" width="300" />';
    $body .= '<h3>Contact Form Submission</h3>';
    $body .= '<table rules="all" style="border-color: #999;" cellpadding="10">';
    $body .= "<tr style='background: #ddd;'><td width='80'><strong>Date:</strong> </td><td>" . date('F d, Y g:i A') . ' EST' . "</td></tr>";
    if (($intent) != '') {
        $body .= "<tr style='background: #eee;'><td width='80'><strong>Subject:</strong> </td><td>" . $intent . "</td></tr>";
    }
    $body .= "<tr style='background: #ddd;'><td width='80'><strong>First Name:</strong> </td><td>" . $firstName . "</td></tr>";
    $body .= "<tr style='background: #eee;'><td width='80'><strong>Last Name:</strong> </td><td>" . $lastName . "</td></tr>";
    $body .= "<tr style='background: #fcfcfc;'><td width='80'><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
    if (($phone) != '') {
        $body .= "<tr style='background: #ddd;'><td width='80'><strong>Phone:</strong> </td><td>" . $phone . "</td></tr>";
    }
    if (($describesList) != '') {
        $body .= "<tr style='background: #eee;'><td width='80'><strong>About:</strong> </td><td>" . $describesList . "</td></tr>";
    }
    if (($interestedList) != '') {
        $body .= "<tr style='background: #fcfcfc;'><td width='80'><strong>Interested in:</strong> </td><td>" . $interestedList . "</td></tr>";
    }
    if (($eventDetails) != '') {
        $body .= "<tr style='background: #ddd;'><td width='80'><strong>Event Details:</strong> </td><td>" . $eventDetails . "</td></tr>";
    }
    if (($registerList) != '') {
    $body .= "<tr style='background: #eee;'><td width='80'><strong>Registering for:</strong> </td><td>" . $registerList . "</td></tr>";
    }
    if (($trainingList) != '') {
    $body .= "<tr style='background: #fcfcfc;'><td width='80'><strong>Has had training in:</strong> </td><td>" . $trainingList . "</td></tr>";
    }
    $body .= "</table>";
    $body .= "</body></html>";

    
    //Send email with SwiftMailer
    // initialize message

    $message = Swift_Message::newInstance()->setCharset('iso-8859-2');
    $message->setSubject($subject);
    // Set the From address with an associative array
    $message->setFrom(array($email => $fullName));
    // Set the To addresses with an associative array
    $message->setTo(array('first@to.email','second@to.email' => 'Name of second@to.email'));
    // Give it a body
    $message->setBody($body, 'text/html');
    $message->setEncoder(\Swift_Encoding::get7BitEncoding());

    // Testing: output the message string
    //echo($message->toString());

    // Now, create instance of a SwiftMailer Transport object...

    //Create the SMTP Transport
    $transport = Swift_SmtpTransport::newInstance('email.server.com', 465, 'ssl')
        ->setUsername('user@domain.com')
        ->setPassword('');

        //Gmail Example
        /*$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
            ->setUsername('username@gmail.com')
            ->setPassword('Password');*/

    //Alternate way to create the SMTP Transport using PHP's mail()
    //$transport = Swift_MailTransport::newInstance();

    // Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);

    // Echo Logger: The EchoLogger dumps in realtime
    //$logger = new Swift_Plugins_Loggers_EchoLogger();
    //$mailer->registerPlugin(new Swift_Plugins_LoggerPlugin($logger));

    // Send the message
    $result = $mailer->send($message);
?>

<div class="wrapper contact-container container clearfix">
    <h2>Thanks<?php if(isset($firstName)) { echo(', '.$firstName); } ?>!</h2>
    <p>We received your request and will be reaching out to you within the next few days.</p>
    <p>We'll be speaking with you soon!<br /><br />
    <strong class="fancy-text">Contact Person</strong><br />Their Title</p>
</div>