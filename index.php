<?php
header('Content-Type: charset=utf-8');
require_once("Cliente.php");


$objCliente1 = new Cliente(1, 'Rafaela Cavalcanti Ferreira', 'rafa_c_ferreira@gmail.com', '(65) 6977-5350', 'Rua Bianco Filho, 1014');
$objCliente2 = new Cliente(2, 'Fernando Daniel Ribeiro', 'fdribeiro@gmail.com', '(38) 4301-5610', 'Travessa Martins Teixeira, 865');
$objCliente3 = new Cliente(3, 'Nicole Rocha Sousa', 'nrs@gmail.com', '(62) 8361-5004', 'Rua das Oliveiras, 1094');
$objCliente4 = new Cliente(4, 'Júlia Costa Pinto', 'juliacosta@gmail.com', '(81) 9944-8781', 'Avenida Fator, 456');
$objCliente5 = new Cliente(5, 'Alex Rocha Barros', 'alexrb@gmail.com', '(91) 7167-6031', 'Alameda N, 1799');
$objCliente6 = new Cliente(6, 'José Almeida Santos', 'josesantos@gmail.com', '(11) 8927-2070', 'Rua Paraibuna, 425');
$objCliente7 = new Cliente(7, 'Maria Carvalho Cunha', 'mariacunha@gmail.com', '(21) 3808-4841', 'Rua Reinaldo Lópes, 299');
$objCliente8 = new Cliente(8, 'Fernanda Ribeiro Pinto', 'feripi@gmail.com', '(46) 4233-3405', 'Rua das Hortênsias, 773');
$objCliente9 = new Cliente(9, 'Nicolas Goncalves Cavalcanti', 'gonca@gmail.com', '(43) 3098-5985', 'Rua Anu, 1258');
$objCliente10 = new Cliente(10, 'Thiago Pereira Cardoso', 'cardoso@gmail.com', '(11) 5948-6115', 'Praça Ministro Salgado Filho, 1997');


$arrObjetos = [$objCliente1, $objCliente2, $objCliente3, $objCliente4, $objCliente5, $objCliente6, $objCliente7, $objCliente8, $objCliente9, $objCliente10];

?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" >
<!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Lista de Clientes | Aula PHPOO</title>

        <!-- Bootstrap -->
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                <h1>Lista de Clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Endereço</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($arrObjetos as $cliente) { ?>
                            <tr>
                                <td><?php echo $cliente->id; ?></td>
                                <td><?php echo $cliente->nome; ?></td>
                                <td><?php echo $cliente->email; ?></td>
                                <td><?php echo $cliente->telefone; ?></td>
                                <td><?php echo $cliente->endereco; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>