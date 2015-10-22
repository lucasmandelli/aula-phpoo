<?php
include('dados.php');

if(isset($_GET['id']) && $_GET['id'] >= 0) {
    $id = $_GET['id'];
    ?>
    <!DOCTYPE html>
    <!--[if IE 8]>
    <html class="no-js lt-ie9" lang="en"> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html lang="en">
    <!--<![endif]-->
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>Cliente: <?php echo $arrObjetos[$id]->nome; ?> | Aula PHPOO</title>

            <!-- Bootstrap -->
            <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
            <link href="vendor/bootstrap-table-master/dist/bootstrap-table.min.css" rel="stylesheet">

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        </head>
        <body>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                    <div class="page-header">
                        <h1>Cliente: <?php echo $arrObjetos[$id]->nome; ?></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-3 col-md-3 text-center">
                                    <i class="glyphicon glyphicon-user" style="font-size: 18rem;"></i>
                                </div>
                                <div class="col-xs-9 col-md-9">
                                    <div class="list-group">
                                        <li class="list-group-item">
                                            <i class="glyphicon glyphicon-user"></i>
                                            <strong> Nome: </strong><?php echo $arrObjetos[$id]->nome; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="glyphicon glyphicon-envelope"></i>
                                            <strong> E-mail: </strong><?php echo $arrObjetos[$id]->email; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="glyphicon glyphicon-phone"></i>
                                            <strong> Telefone: </strong><?php echo $arrObjetos[$id]->telefone; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="glyphicon glyphicon-road"></i>
                                            <strong> Endereço: </strong><?php echo $arrObjetos[$id]->endereco; ?>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
<?php
}else{
?>
<script type="text/javascript">
    window.location = 'index.php';
</script>
    <?php
}
?>