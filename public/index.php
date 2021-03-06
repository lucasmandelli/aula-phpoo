<?php
include_once('dados.php');
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="pt-br" >
<!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Lista de Clientes | Aula PHPOO</title>

        <!-- Bootstrap -->
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <!-- Bootstrap Table -->
        <link href="vendor/bootstrap-table-master/dist/bootstrap-table.min.css" rel="stylesheet">

        <!-- Style -->
        <link href="css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap-table-master/dist/bootstrap-table.min.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                <div class="page-header">
                    <h1>Lista de Clientes</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                <div class="table-responsive">
                    <table data-toggle="table" class="table table-hover">
                        <thead>
                        <tr>
                            <th data-sortable="true">#</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th data-sortable="true">Importância</th>
                            <th>Pessoa</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($arrObjetos as $cliente) { ?>
                            <tr>
                                <td><?php echo $cliente->getId(); ?></td>
                                <td><a href="clientes.php?id=<?php echo $cliente->getId(); ?>"><?php echo $cliente->getNome(); ?></a></td>
                                <td><?php echo $cliente->getEmail(); ?></td>
                                <td><?php echo $cliente->getTelefone(); ?></td>
                                <td><?php echo $cliente->getImportancia(); ?></td>
                                <?php if($cliente instanceof ClientePf) { ?>
                                <td>Física</td>
                                <?php }else{ ?>
                                <td>Jurídica</td>
                                <?php } ?>
                                <td>
                                    <a href="clientes.php?id=<?php echo $cliente->getId(); ?>">
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>