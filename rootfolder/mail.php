<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // access
        $secretKey = '6LdsebwUAAAAALe-as9lQp8tQjLp3rTMk6EYteSO';
        $captcha = $_POST['g-recaptcha-response'];

        if(!$captcha){
          echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
          exit;
        }

        # FIX: Replace this email with recipient email
        $mail_to = "holko.ani@gmail.com";
        
        # Sender Data
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        $dateOfBirth = trim($_POST["dateOfBirth"]);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $citizenship = trim($_POST["citizenship"]);
        $phone = trim($_POST["phone"]);
        $school = trim ($_POST["school"]);
        $graduation = trim($_POST["graduation"]);
        $specialization = trim($_POST["specialization"]);
        $work = trim($_POST["work"]);
        $approbacia = trim($_POST["approbacia"]);
        $attestacia = trim($_POST["attestacia"]);
        
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($dateOfBirth) OR empty($email) OR empty($citizenship)) OR empty($phone) OR empty($school) OR empty($graduation) OR empty($specialization){
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo '<p class="alert alert-warning">Please complete the form and try again.</p>';
            exit;
        }

        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);

        if(intval($responseKeys["success"]) !== 1) {
          echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
        } else {
            # Mail Content
            $content = "Name: $name\n";
            $content = "Date of birth: $dateOfBirth\n";
            $content .= "Email: $email\n\n";
            $content .= "Citizenship: $citizenship\n\n";
            $content .= "Phone: $phone\n";
            $content .= "School:\n$school\n";
            $content .= "Graduation:\n$graduation\n";
            $content .= "Specialization:\n$specialization\n";
            $content .= "Work:\n$work\n";
            $content .= "Approbation:\n$approbacia\n";
            $content .= "Attestation:\n$attestacia\n";

            # email headers.
            $headers = "From: $name <$email>";

            # Send the email.
            $success = mail($mail_to, $content, $headers);
            if ($success) {
                # Set a 200 (okay) response code.
                http_response_code(200);
                echo '<p class="alert alert-success">Thank You! Your message has been sent.</p>';
            } else {
                # Set a 500 (internal server error) response code.
                http_response_code(500);
                echo '<p class="alert alert-warning">Oops! Something went wrong, we couldnt send your message.</p>';
            }
        }

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo '<p class="alert alert-warning">There was a problem with your submission, please try again.</p>';
    }

?>
