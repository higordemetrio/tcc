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
	<title>FIFA SCOUT - CADASTRO DE CABECALHO</title>

</head>
<body>

<div class="container">
	<form>
    <!-- SELECIONAR A ETAPA DA COMPETICAO -->
        <div class="form-group col-sm-2">
            <label for="etapa">ETAPA: </label>
            <select class="form-control" id="etapa">
                <option>-</option>
                <option>Classificação</option>
                <option>Quartas de finais</option>
                <option>Semi Finais</option>
            </select>
        </div>

        <br><br><br><br>

        <div class="col-md-offset-3">
         <!-- SELECIONAR O TIME 1 -->
            <div class="form-group col-sm-2">
                <label for="text">TIME 1:</label>
                <select class="form-control" id="time1">
                    <option>-</option>
                    <option>BRAZIL</option>
                    <option>GERMANY</option>
                </select>

            </div>
             <!-- VERSUS -->
            <div class="col-sm-1">
            <label><font size="20px"> X </font></label>
            </div>
             <!-- SELECIONAR O TIME 2 -->
            <div class="form-group col-sm-2">
                <label for="text"> TIME 2:</label>
                <select class="form-control" id="time2">
                    <option>-</option>
                    <option>BRAZIL</option>
                    <option>GERMANY</option>
                </select>
            </div>
        </div>

        <br><br><br><br>

         <!-- INPUT DO NUMERO DO JOGO -->
        <div class="form-group col-sm-1">
            <label for="text">#</label>
            <input type="text" class="form-control" id="num">
        </div>

        <!-- DATA DO JOGO -->
        <div class="form-group col-sm-1">
            <label for="text">DATA</label>
            <input type="text" class="form-control" id="num">
        </div>

        <div class="input-group date" data-provide="datepicker">
    <input type="text" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
    </form>
</div>

</body>
</html>
