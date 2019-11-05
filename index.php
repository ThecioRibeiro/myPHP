<?php $nomeSistema = 'myPHP'; 
function CalcularArmazenamento($totalUsuarios){
    echo '<li>'.$totalUsuarios.' GB de armazenamento </li>';
}

$idade = 18;
function mudarEstiloBotao($idade){
    if ($idade < 18) {
        echo '<button type="button" class="btn btn-lg btn-block btn-outline-warning">Cadastre-se de graça</button>';
    } elseif($idade < 25) {
        echo '<button type="button" class="btn btn-lg btn-block btn-outline-primary">Cadastre-se de graça</button>';
    }else{
        echo '<button type="button" class="btn btn-lg btn-block btn-outline-success">Cadastre-se de graça</button>';
    }  
}



function calcularDesconto($tipoAssinatura){

$pro = 10;
$premium = 2;
$tempoAssinatura = 12;

    switch ($tipoAssinatura) {
        case 'pro':
        if ($tempoAssinatura < 6) {
            echo $pro;
        } elseif($tempoAssinatura < 12) {
            echo $pro - $pro * 0.25;
        } else{
            echo $pro - $pro * 0.5;
        }
        
        break;
        case 'premium':
        echo $pro / 2;
        break;    
        
        default:
        echo $premium;
        break;
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title><?php echo($nomeSistema); ?></title>
</head>


<body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Nome da companhia</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Premium</a>
            <a class="p-2 text-dark" href="#">Suporte</a>
            <a class="p-2 text-dark" href="#">Preços</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Cadastro</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Preços</h1>
        <p class="lead">Construa uma tabela de preços para seus potenciais clientes, com esse exemplo Bootstrap. Além do
            mais, é feito com componentes padrões, utilitários e um pouquinho de customização.</p>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Grátis</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mês</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 usuários</li>
                        <?php CalcularArmazenamento(10);?>
                        <li>Suporte por email</li>
                        <li>Acesso ao centro de ajuda</li>
                    </ul>
                    <?php mudarEstiloBotao(25);?>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$<?php calcularDesconto('pro') ?> <small class="text-muted">/ mês</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 usuários</li>
                        <?php CalcularArmazenamento(20);?>
                        <li>Suporte por email prioritário</li>
                        <li>Acesso ao centro de ajuda</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Conhecer</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Premium</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mês</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30 usuários</li>
                        <?php CalcularArmazenamento(30);?>
                        <li>Suporte por email e telefone</li>
                        <li>Acesso ao centro de ajuda</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Contate-nos</button>
                </div>
            </div>
        </div>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="../../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                    <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Algo legal</a></li>
                        <li><a class="text-muted" href="#">Feature aleatória</a></li>
                        <li><a class="text-muted" href="#">Recursos para times</a></li>
                        <li><a class="text-muted" href="#">Coisas para desenvolvedores</a></li>
                        <li><a class="text-muted" href="#">Outra coisa legal</a></li>
                        <li><a class="text-muted" href="#">Último item</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Fontes</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Fonte</a></li>
                        <li><a class="text-muted" href="#">Nome da fonte</a></li>
                        <li><a class="text-muted" href="#">Outra fonte</a></li>
                        <li><a class="text-muted" href="#">Fonte final</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Sobre</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Equipe</a></li>
                        <li><a class="text-muted" href="#">Locais</a></li>
                        <li><a class="text-muted" href="#">Privacidade</a></li>
                        <li><a class="text-muted" href="#">Termos</a></li>
                    </ul>
                </div>
            </div>
            <h1>Exemplo whille.</h1>
            <?php 
            $i = 0; $f = 99;
            while ($i <= $f) {
                $i++;
                $f--;
                echo "i = $i  f = $f <br>";
            }
            ?>

<h1>Exemplo Do.</h1>
            <?php 
            $i = 0; $f = 99;
            do {
                $i++;
                $f--;
                echo "i = $i  f = $f <br>";
            } whille ($i <= $f); 

            ?>
            
        </footer>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

</html>