<?php
// Start session
if (session_id() == '') {
    session_start();
}

class ContactController extends Database
{
    private $ownEmail = "michelgzuidema@gmail.com";

    public function SendMailContact($voornaam, $achternaam, $email, $telefoonnummer, $kind, $bericht)
    {
        $subject = "GLR Ouderavond Contact - " . $kind;

        $headers = "Content-Type: text/html; charset=UTF-8\r\n";

        $template = "<b>Nieuw contact formulier van de ouderavond website!</b>";
        $template .= "<p>Voornaam: " . $voornaam . ".</p>";
        $template .= "<p>Achternaam: " . $achternaam . ".</p>";
        $template .= "<p>Telefoonnummer: " . $telefoonnummer . ".</p>";
        $template .= "<p>Betreft: " . $kind . ".</p>";
        $template .= "<p>Origineel Bericht: " . $bericht . "</p>";

        try {
            mail($this->ownEmail, $subject, $template, $headers);
            $_SESSION['succmsg'] = "Uw email is verstuurd!";
            return true;
        } catch (Exception $e) {
            $_SESSION['errormsg'] = $e;
            return false;
        }
    }

    public function SendMailConfirmation($mentor_id, $tijdstip_id, $personen, $opmerking)
    {
        $subject = "GLR Ouderavond - Confirmatie Reservering";
        $headers = "Content-Type: text/html; charset=UTF-8\r\n";

        // Get mentor name
        $query = "SELECT naam FROM mentor WHERE id = '$mentor_id'";
        $result = mysqli_query($this->mysqli, $query);
        $mentor_name = mysqli_fetch_array($result)['naam'];

        // Get tijdstip times
        $query = "SELECT tijd_start, tijd_einde FROM tijdstip WHERE id = '$tijdstip_id'";
        $result = mysqli_query($this->mysqli, $query);
        $tijdRow = mysqli_fetch_array($result);
        $tijd_start = $tijdRow['tijd_start'];
        $tijd_einde = $tijdRow['tijd_einde'];

        $templateVariables = array();

        $templateVariables['mentor'] = $mentor_name;
        $templateVariables['tijd_start'] = $tijd_start;
        $templateVariables['tijd_einde'] = $tijd_einde;
        $templateVariables['personen'] = $personen;
        $templateVariables['opmerking'] = $opmerking;

        $template = file_get_contents("../../include/confirmatieTemplate.html");

        foreach($templateVariables as $key => $value)
        {
            $template = str_replace('{{ '.$key.' }}', $value, $template);
        }

        try {
            mail($this->ownEmail, $subject, $template, $headers);
            $_SESSION['succmsg'] = "Uw email is verstuurd!";
            return true;
        } catch (Exception $e) {
            $_SESSION['errormsg'] = $e;
            return false;
        }
    }
}

?>

