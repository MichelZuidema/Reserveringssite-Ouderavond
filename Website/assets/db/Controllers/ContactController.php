<?php
// Start session
if (session_id() == '') {
    session_start();
}

class ContactController
{
    public function __construct($voornaam, $achternaam, $email, $telefoonnummer, $kind, $bericht)
    {
        $this->SendMail($voornaam, $achternaam, $email, $telefoonnummer, $kind, $bericht);
    }

    public function SendMail($voornaam, $achternaam, $email, $telefoonnummer, $kind, $bericht)
    {
        $ownEmail = "michelgzuidema@gmail.com";
        $subject = "GLR Ouderavond Contact - " . $kind;

        $headers = "Content-Type: text/html; charset=UTF-8\r\n";

        $template = "<b>Nieuw contact formulier van de ouderavond website!</b>";
        $template .= "<p>Voornaam: " . $voornaam . ".</p>";
        $template .= "<p>Achternaam: " . $achternaam . ".</p>";
        $template .= "<p>Telefoonnummer: " . $telefoonnummer . ".</p>";
        $template .= "<p>Betreft: " . $kind . ".</p>";
        $template.= "<p>Origineel Bericht: " . $bericht . "</p>";


        try {
            mail($ownEmail, $subject, $template, $headers);
            $_SESSION['succmsg'] = "Uw email is verstuurd!";
            return true;
        } catch (Exception $e) {
            $_SESSION['errormsg'] = $e;
            return false;
        }
    }
}

?>