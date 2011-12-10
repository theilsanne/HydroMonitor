<?php
// check to see if verificaton code was correct
if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){
	// if verification code was correct send the message and show this page
	mail("you@email.com", 'Online Form: '.$subject, $_SERVER['REMOTE_ADDR']."\n\n".$message, "From: $from");
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
} else {
	// if verification code was incorrect then return to contact page and show error
	header("Location:".$_SERVER['HTTP_REFERER']."?subject=$subject&from=$from&message=$message&wrong_code=true#bottom");
	exit;
}
if (!isset($_POST['submit']) || $_SERVER['REQUEST_METHOD'] != "POST") {
    exit("<p>You did not press the submit button; this page should not be accessed directly.</p>");
} else {
    $exploits = "/(content-type|bcc:|cc:|document.cookie|onclick|onload|javascript|alert)/i";
    $profanity = "/(beastial|bestial|blowjob|clit|cock|cum|cunilingus|cunillingus|cunnilingus|cunt|ejaculate|fag|felatio|fellatio|fuck|fuk|fuks|gangbang|gangbanged|gangbangs|hotsex|jism|jiz|kock|kondum|kum|kunilingus|orgasim|orgasims|orgasm|orgasms|phonesex|phuk|phuq|porn|pussies|pussy|spunk|xxx)/i";
    $spamwords = "/(viagra|phentermine|tramadol|adipex|advai|alprazolam|ambien|ambian|amoxicillin|antivert|blackjack|backgammon|texas|holdem|poker|carisoprodol|ciara|ciprofloxacin|debt|dating|porn)/i";
    $bots = "/(Indy|Blaiz|Java|libwww-perl|Python|OutfoxBot|User-Agent|PycURL|AlphaServer)/i";

    if (preg_match($bots, $_SERVER['HTTP_USER_AGENT'])) {
        exit("<p>Known spam bots are not allowed.</p>");
    }
    foreach ($_POST as $key => $value) {
        $value = trim($value);

        if (empty($value)) {
            exit("<p>Empty fields are not allowed. Please go back and fill in the form properly.</p>");
        } elseif (preg_match($exploits, $value)) {
            exit("<p>Exploits/malicious scripting attributes aren't allowed.</p>");
        } elseif (preg_match($profanity, $value) || preg_match($spamwords, $value)) {
            exit("<p>That kind of language is not allowed through our form.</p>");
        }

        $_POST[$key] = stripslashes(strip_tags($value));
    }

    if (!ereg("^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,6})$",strtolower($_POST['email']))) {
        exit("<p>That e-mail address is not valid, please use another.</p>");
    }

    $recipient = "enquiries@lx1technology.com";
    $subject = "Email from LX1 Technology Limited® - from {$_POST['email']} \n";

    $message = "You received this e-mail through LX1: \n\n";
    $message .= "Name: {$_POST['name']} \n";
    $message .= "Email: {$_POST['email']} \n";
    $message .= "Subject: {$_POST['subject']} \n";
    $message .= "Message: {$_POST['message']} \n";
    $verif_box = $_REQUEST["verif_box"];

    $headers = "From: LX1 Technology Limited® <$recipient> \n";
    $headers .= "Reply-To: <{$_POST['email']}>";

    if (mail($recipient,$subject,$message,$headers)) {
        echo "<p>Thank you! Your mail was successfully sent to the webmaster. Thank you for your time. <br /><br /> Please <a href="/">click here</a> to go back to LX1 Technology Limited® Homepage.</p>";
    } else {
        echo "<p>Sorry, there was an error and your mail was not sent. Please find an alternative method of contacting the webmaster.</p>";
    }
}
?>