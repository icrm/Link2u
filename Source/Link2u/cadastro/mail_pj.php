<?

    $razao                  = $_POST['razao'];
    $fantasia               = $_POST['fantasia'];
    $cnpj                   = $_POST['cnpj'];
    $ie                     = $_POST['ie'];
    $telefone               = $_POST['telefone'];
    $endereco               = $_POST['endereco'];
    $bairro                 = $_POST['bairro'];
    $cep                    = $_POST['cep'];
    $cidade                 = $_POST['cidade'];
    $estado                 = $_POST['estado'];
    $email                  = $_POST['email'];
    $facebook               = $_POST['facebook_empresa'];
    $twitter                = $_POST['facebook_empresa'];
    $outra_social           = $_POST['outra_social_empresa'];
    $responsavel             = $_POST['nome_responsavel'];
    $telefone_responsavel   = $_POST['telefone_responsavel'];
    $cpf_responsavel        = $_POST['cpf_responsavel'];
    $email_responsavel      = $_POST['email_responsavel'];
    $nome_contato           = $_POST['nome_contato'];
    $profissao_contato      = $_POST['profissao_contato'];
    $cargo_contato          = $_POST['cargo_contato'];
    $cpf_contato            = $_POST['cpf_contato'];
    $rg_contato             = $_POST['rg_contato'];
    $rne_contato            = $_POST['rne_contato'];
    $email_contato          = $_POST['email_contato'];
    $site_contato           = $_POST['site_contato'];
    $nascimento_contato     = $_POST['nascimento_contato'];
    $facebook_contato       = $_POST['facebook_contato'];
    $twitter_contato        = $_POST['twitter_contato'];

    $boundary = 'ACE-' . md5(time()) . '-ECA';

    $headers  = "MIME-Version: 1.1 \r\n\r\n";
    $headers .= "X-Mailer: PHP " . phpversion() . "\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: Link2u - Coworking <contato@link2u.com.br>\r\n";
    $headers .= "Reply-To: $email\r\n";
    

    $body  = "<strong>Raz&atilde;o Social:</strong> $razao<br/>";
    $body .= "<strong>Nome Fantasia:</strong> $fantasia<br/>";
    $body .= "<strong>CNPJ:</strong> $cnpj<br/>";
    $body .= "<strong>Inscri&ccedil;&atilde;o Estadual:</strong> $ie<br/>";
    $body .= "<strong>Telefone:</strong> $telefone<br/>";
    $body .= "<strong>Endere&ccedil;o:</strong> $endereco<br/>";
    $body .= "<strong>Bairro:</strong> $bairro<br/>";
    $body .= "<strong>CEP:</strong> $cep<br/>";
    $body .= "<strong>Cidade:</strong> $cidade<br/>";
    $body .= "<strong>Estado:</strong> $estado<br/>";
    $body .= "<strong>E-mail:</strong> $email<br/>";
    $body .= "<strong>Facebook:</strong> $facebook<br/>";
    $body .= "<strong>Twitter:</strong> $twitter<br/>";
    $body .= "<strong>Outra Rede Social:</strong> $outra_social<br/>";
    $body .= "<h2>Informa&ccedil;&otilde;es do Respons&aacute;vel</h2>";
    $body .= "<strong>Nome Respons&aacute;vel:</strong> $responsavel<br/>";
    $body .= "<strong>Telefone Respons&aacute;vel:</strong> $telefone_responsavel<br/>";
    $body .= "<strong>CPF Respons&aacute;vel:</strong> $cpf_responsavel<br/>";
    $body .= "<strong>E-mail Respons&aacute;vel:</strong> $email_responsavel<br/>";
    $body .= "<h2>Contato de quem vai utilizar o espa&ccedil;o</h2>";
    $body .= "<strong>Nome Completo:</strong> $nome_contato<br/>";
    $body .= "<strong>Profiss&atilde;o:</strong> $profissao_contato<br/>";
    $body .= "<strong>Cargo:</strong> $cargo_contato<br/>";
    $body .= "<strong>CPF N&ordm;:</strong> $cpf_contato<br/>";
    $body .= "<strong>RG N&ordm;:</strong> $rg_contato<br/>";
    $body .= "<strong>RNE N&ordm;:</strong> $rne_contato<br/>";
    $body .= "<strong>E-mail:</strong> $email_contato<br/>";
    $body .= "<strong>Site:</strong> $site_contato<br/>";
    $body .= "<strong>Data Nascimento:</strong> $nascimento_contato<br/>";
    $body .= "<strong>Facebook:</strong> $facebook_contato<br/>";
    $body .= "<strong>Twitter:</strong> $twitter_contato<br/>";
    
    mail('contato@link2u.com.br', 'Link2u - Coworking | Contato através do site', $body, $headers);

    header( 'Location: http://www.link2u.com.br/cadastro/cadastro_pj.html?sm=ok' );
    
?>