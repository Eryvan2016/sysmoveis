<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>sysmoveis - Venda</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            var total = 0;
            function adicionarNoCarrinho(nome,descricao,quantidade,valor,situacao) {
                var linha = document.createElement("tr");
                var colunaNome= document.createElement("td");
                var colunaDescricao = document.createElement("td");
                var colunaQuantidade = document.createElement("td");
                var colunaValor = document.createElement("td");
                var colunaSituacao = document.createElement("td");
                colunaNome.appendChild(document.createTextNode(nome));
                colunaDescricao.appendChild(document.createTextNode(descricao));
                colunaValor.appendChild(document.createTextNode(valor));
                colunaSituacao.appendChild(document.createTextNode(situacao));
                colunaValor.setAttribute("class","valor");
                colunaQuantidade.innerHTML = "<input type='number' value='1' class='quantidade' onchange='atualizarValor(" + valor + ",this.value)' />";

                //adicionar colunas na linha;
                linha.appendChild(colunaNome);
                linha.appendChild(colunaDescricao);
                linha.appendChild(colunaQuantidade);
                linha.appendChild(colunaValor);
                linha.appendChild(colunaSituacao);
                //adicionar a linha na tabela.
                document.getElementById("tbodyCarrinho").appendChild(linha);

                adicionarPreco(valor, 1);
            }
            function adicionarPreco(valor, quantidade) {
                total += (valor * quantidade);
                document.getElementById("total").innerHTML = total;
            }

            function atualizarValor(valor, quantidade) {
                novoTotal=0;
                var valors=document.getElementsByClassName("valor");
                var quantidades=document.getElementsByClassName("quantidade");
                
                for (i=0;i<valors.length;i++){
                novoTotal+=(valors[i].innerHTML*quantidades[i].value);
                }
                document.getElementById("total").innerHTML = novoTotal;
            }

        </script>

    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Startmin</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/pages/menuLateral.php" ?>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Venda</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>


                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Listagem de Produtos
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Descrição</th>
                                                    <th>Quantidade</th>
                                                    <th>Valor</th>
                                                    <th>Situação</th>
                                                    <th>Adicionar </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/dao/ProdutoDAO.php";
                                                $dao = new ProdutoDAO();
                                                $lista = $dao->listarTodos();
                                                foreach ($lista as $produto) {
                                                    $textoDoCSS = "";
                                                    if ($produto->getQuantidade() <= 0) {
                                                        $textoDoCSS = "style='background-color:red'";
                                                    } else if ($produto->getQuantidade() <= 5) {
                                                        $textoDoCSS = "style='background-color:yellow'";
                                                    }
                                                    echo "<tr class='odd ' " . $textoDoCSS . ">";
                                                    echo "<td>" . $produto->getNome() . "</td>";
                                                    echo "<td>" . $produto->getDescricao() . "</td>";
                                                    echo "<td>" . $produto->getQuantidade() . "</td>";
                                                    echo "<td>" . $produto->getValor() . "</td>";
                                                    echo "<td>" . $produto->getSituacao() . "</td>";
                                                    echo "<td><button class ='btn btn-success btn-circle' onclick='adicionarNoCarrinho(\"" . $produto->getNome() . "\",\"" . $produto->getDescricao() . "\"," . $produto->getQuantidade().",". $produto->getValor(). ",\"".$produto->getSituacao()."\")'>\n<i class='fa fa-cart-plus'></i></button></td>";
                                                    echo "</tr>";
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->


                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <div class="row">
                                <div class="col-lg-6"> 
                                    <!-- /.panel -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Carrinho de Compras
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>Nome</th>
                                                            <th>Descrição</th>
                                                            <th>Quantidade</th>
                                                            <th>Valor</th> 
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbodyCarrinho">


                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->


                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h2> Total: R$ <span id="total"></span></h2>
                                </div>
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->


                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

    </body>
</html>
