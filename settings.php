<?php


$mail_content="Hej roer\n\n".
    "For at �nske et b�dhold skal du bruge nedenst�ende link:\n".
    "www.dsr-event.dk/vinter/tilmeld3.php?email=$email&kode=$kode\n\n".
    "Hvis linket ikke virker skal du g� til siden:\n".
    "www.dsr-event.dk/vinter/tilmeld3.php og indtaste\n".
    "    Login $email\n".
    "    Kode $kode\n\n".
    "Har du problemer med at logge ind, s� pr�v at bestil en ny kode.\n\n".
    "Gem b�de link og kode da dette vil v�re din adgang til systemet.\n\n".
    "Tilmeldingen skal betragtes som en �nskeliste og materieludvalget forbeholder sig ret til at flytte medlemmer til et andet b�dhold. Det er muligt at bruge ovenst�ende link til at tilmelde sig et andet hold indtil 31/9. Herefter vil tilmeldingen v�re bindende.\n\n".
    "Med venlig hilsen\n".
    "Materieludvalget";

$mail_subject="Tilmelding til DSR vintervedligehold\n";

$mail_headers=array();
$mail_headers['From'] = "DSR Materieludvalg - svar ikke! <no-reply@dsr-butik.dk>";
$mail_headers['Content-Transfer-Encoding'] = "8bit";
$mail_headers['Date'] = "".date('r');
$mail_headers['Message-ID'] = "<".sha1(microtime(true))."@dsr-butik.dk>";
$mail_headers['MIME-Version'] = "1.0";
$mail_headers['X-Mailer'] = "PHP-Custom";
$mail_headers['Subject'] = "$mail_subject";


?>
