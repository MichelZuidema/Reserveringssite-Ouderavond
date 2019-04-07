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
        $ownEmail = "83239@glr.nl";
        $subject = "Ouderavond: " . $kind;
        $headers = 'E-Mail van: ' . $email;

        try {
            mail($ownEmail, $subject, $bericht, $headers);
            return true;
        } catch (Exception $e) {
            $_SESSION['errormsg'] = $e;
            return false;
        }
    }
}

?>