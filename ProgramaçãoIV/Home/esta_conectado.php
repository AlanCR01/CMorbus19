/*aqui ira verificar se o usuario esta logado para que nao consigam burlar o sistema digitando direto na url a página home*/
           
           
            session_start();
            if((!isset ($_SESSION['login']) == true) and (!isset($_SESSION['password']) == true)){
                unset($_SESSION['login']);
                unset($_SESSION['password']);
               header('Location: ../Cadastro_Login/Cadastro_Login.html');
            }
            $logado = $_SESSION['login'];
            
            include ("../Cadastro_Login/conecta.php");
            $codigo = $_SESSION['cod_usu'];