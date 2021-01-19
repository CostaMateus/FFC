<?php

//Configuracao do Banco de dados
$host      = "localhost:8080";
$user      = "root";
$pass      = "root";
$dbname    = "m_testes";

//Titulo do seu livro Caixa, geralmente seu nome
$lc_titulo = "Costa";

//Autenticacao simples
$usuario   = "admin";
$senha     = "123";

//////////////////////////////////////
//Nao altere a partir daqui!
//////////////////////////////////////
$conn      = mysqli_connect($host, $user, $pass, $dbname) or die("Erro na conexгo com a base de dados");
$db        = mysqli_select_db($conn, $dbname) or die("Erro na seleзгo da base de dados");
mysqli_set_charset( $conn, 'utf8' );

if ( isset( $_SESSION['logado'] ) )
{
    $logado = $_SESSION['logado'];
}
else
{
    $logado = "";
}

$senha_    = md5($senha);

if ( isset( $_POST['login'] ) && $_POST['login'] != '' )
{
    if ( $_POST['login'] == $usuario && $_POST['senha'] == $senha )
    {
        $logado = $_SESSION['logado'] = md5( $_POST['senha'] );
        header( "Location: ./" );
        exit();
    }
}

if ( $logado != $senha_ && !isset( $pagina_login ) )
{
    header( "Location: login.php" );
    exit();
}
