<?

    $nome         = $_POST['nome'];
    $empresa      = $_POST['empresa'];
    $profissao    = $_POST['profissao'];
    $atividade    = $_POST['atividade'];
    $endereco     = $_POST['endereco'];
    $bairro       = $_POST['bairro'];
    $cep          = $_POST['cep'];
    $cidade       = $_POST['cidade'];
    $estado       = $_POST['estado'];
    $cpf          = $_POST['cpf'];
    $rg           = $_POST['rg'];
    $orgao        = $_POST['orgao'];
    $rne          = $_POST['rne'];
    $nascimento   = $_POST['nascimento'];
    $email        = $_POST['email'];
    $site         = $_POST['site'];
    $facebook     = $_POST['facebook'];
    $twitter      = $_POST['twitter'];
    $linkedin     = $_POST['linkedin'];
    $outra_social = $_POST['outra_social'];

    $boundary = 'ACE-' . md5(time()) . '-ECA';

    $headers  = "MIME-Version: 1.1 \r\n\r\n";
    $headers .= "X-Mailer: PHP " . phpversion() . "\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: Link2u - Coworking <contato@link2u.com.br>\r\n";
    $headers .= "Reply-To: $email\r\n";
    

    $body  = "<strong>Nome Completo:</strong> $nome<br/>";
    $body .= "<strong>Empresa:</strong> $empresa<br/>";
    $body .= "<strong>Profiss&atilde;o:</strong> $profissao<br/>";
    $body .= "<strong>Atividade:</strong> $atividade<br/>";
    $body .= "<strong>Endere&ccedil;o:</strong> $endereco<br/>";
    $body .= "<strong>Bairro:</strong> $bairro<br/>";
    $body .= "<strong>CEP:</strong> $cep<br/>";
    $body .= "<strong>Cidade:</strong> $cidade<br/>";
    $body .= "<strong>Estado:</strong> $estado<br/>";
    $body .= "<strong>CPF:</strong> $cpf<br/>";
    $body .= "<strong>RG:</strong> $rg<br/>";
    $body .= "<strong>&Oacute;rg&atilde;o Expedidor:</strong> $orgao<br/>";
    $body .= "<strong>RNE N&ordm;:</strong> $rne<br/>";
    $body .= "<strong>Data de Nascimento:</strong> $nascimento<br/>";
    $body .= "<strong>E-mail:</strong> $email<br/>";
    $body .= "<strong>Site:</strong> $site<br/>";
    $body .= "<strong>Facebook:</strong> $facebook<br/>";
    $body .= "<strong>Twitter:</strong> $twitter<br/>";
    $body .= "<strong>LinkedIn:</strong> $linkedin<br/>";
    $body .= "<strong>Outra Rede Social:</strong> $outra_social<br/>";
    
    mail('contato@link2u.com.br', 'Link2u - Coworking | Contato através do site', $body, $headers);

    header( 'Location: http://www.link2u.com.br/cadastro/cadastro_pf.html?sm=ok' );
    
?>