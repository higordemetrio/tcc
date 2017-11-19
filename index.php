<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet">
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- https://bootsnipp.com/snippets/3kerp -->
	<!-- CSS e JS do layout -->
    <script src="bootstrap/layout/jquery/jquery-1.11.1.min.js"></script>
    <link href="bootstrap/layout/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/layout/js/bootstrap.min.js"></script>
<head>
	<title>FIFA SCOUT</title>

</head>
<body>

<div class="container">
	<div class="row">
		<h1> Sistema de inserção de dados da copa do mundo</h1>
        <div role="tabpanel">
            <div class="col-sm-2">
                <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                    <li role="presentation" class="brand-nav active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Sobre</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Cadastrar uma Edição</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Editar uma Edição</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Como funciona</a></li>
                </ul>
            </div>
            <div class="col-sm-10">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">                        
                        <?php include 'telas/inicio/sobre.php'; ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <?php include 'telas/inicio/cadastroedicao.php'; ?> 
                       
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                        
                        <?php include 'telas/inicio/editaredicao.php'; ?> 
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab4">
                        <?php include 'telas/inicio/comofunciona.php'; ?> 
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

</body>
</html>
