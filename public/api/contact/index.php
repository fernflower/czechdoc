<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
// require ReCaptcha class
require('../../recaptcha-master/src/autoload.php');

$disableRecaptcha = getenv('DISABLE_RECAPTCHA') ?: false;

// an email address that will receive the email with the output of the form
$sendTo = getenv('EMAIL_TO') ?: "info@czechdoc.cz";

// subject of the email
$subject = 'New message from contact form';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Name',
                'name_translit' => 'Name transliteration',
                'phone' => 'Phone',
                'email' => 'Email',
                'dateOfBirth' => 'Date of Birth',
                'citizenship' => 'Citizenship',
                'school' => 'School',
                'graduation' => 'Graduation Date',
                'specialization' => 'Specialization',
                'work' => 'Work',
                'approbacia' => 'Has approbation',
                'attestacia' => 'Has attestation');

// message that will be displayed when everything is OK :)
$okMessage = 'Спасибо, ваша анкета отправлена!';

// If something goes wrong, we will display this message.
$errorMessage = 'Возникла проблема при отправке анкеты.';

# XXX FIXME Should NOT be here in the open!!!
// ReCaptch Secret
$recaptchaSecret = '6LdsebwUAAAAALe-as9lQp8tQjLp3rTMk6EYteSO';

// let's do the sending


try {
    if (!empty($_POST)) {

	if (!$disableRecaptcha) {

            // validate the ReCaptcha, if something is wrong, we throw an Exception,
            // i.e. code stops executing and goes to catch() block

            if (!isset($_POST['g-recaptcha-response'])) {
                throw new \Exception('ReCaptcha is not set.');
            }

            // do not forget to enter your secret key from https://www.google.com/recaptcha/admin

            $recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());

            // we validate the ReCaptcha field together with the user's IP address

            $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

            if (!$response->isSuccess()) {
                throw new \Exception('ReCaptcha was not validated.');
	    }
	}

        // everything went well, we can compose the message, as usually

        $emailText = "You have a new message from your contact form\n=============================\n";

        foreach ($_POST as $key => $value) {
            // If the field exists in the $fields array, include it in the email
            if (isset($fields[$key])) {
                $emailText .= "$fields[$key]: $value\n";
            }
        }

        // All the neccessary headers for the email.
        $headers = array('Content-Type: text/plain; charset="UTF-8";');
        // Send email
        mail($sendTo, $subject, $emailText, implode("\n", $headers));

        $responseArray = array('type' => 'success', 'message' => $okMessage);
    }
} catch (\Exception $e) {
    $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
} else {
    echo $responseArray['message'];
}
