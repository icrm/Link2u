<?

    $emailTo      = $_POST['emailTo'];
    $nomeFrom     = $_POST['nomeFrom'];
    $emailFrom    = $_POST['emailFrom'];
    $comments     = $_POST['comments'];
    $link         = $_POST['link'];
    $copyme      = $_POST['copyme'];

    $boundary = 'ACE-' . md5(time()) . '-ECA';

    $headers  = "MIME-Version: 1.1 \r\n\r\n";
    $headers .= "X-Mailer: PHP ' . phpversion() . '\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: Link2u - Coworking  <contato@link2u.com.br>\r\n";
    if ($copyme==='copyme') {
        $headers .= "Cc: $emailFrom\r\n";
    }
    $headers .= "Reply-To: $emailFrom\r\n";

    $body  = "Ol&aacute;,<br /><br />";
    $body .= "$nomeFrom deseja compartilhar uma p&aacute;gina do site <a href=\"http://www.link2u.com.br\">Link2u Coworking</a> com voc&ecirc;.<br />";
    $body .= "Para vizualizar a p&aacute;gina, por favor, clique no link abaixo:<br /><br />";
    $body .= "$link<br /><br />";
    $body .= "$comments<br /><br />";
    $body .= "$nomeFrom.";
    
    mail($emailTo, "$nomeFrom quer compartilhar um link com você", $body, $headers);

    header( "Location: http://www.link2u.com.br/share_email.php?url=$link&sm=ok" );
    
?>