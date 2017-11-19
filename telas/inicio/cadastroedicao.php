<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet">
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- https://bootsnipp.com/snippets/3kerp -->
	<!-- CSS e JS do layout -->
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="js/cadastroedicao.js"></script>
    
<head>
	<title>FIFA SCOUT - CADASTRO DE EDICAO</title>

</head>
<body>
    <br>
    <P align="center" class="col-sm-10 col-sm-offset-1"  >
      <a type="button" href="telas/inicio/ondeencontrar.php" target="_blank" class="btn btn-primary"> Onde encontrar? </a>
        
    </p>
    

    
    <hr class="col-sm-10 col-sm-offset-1">
    <div class="container col-sm-9 col-sm-offset-2">
    	<form>
        <!-- SELECIONAR O PAIS SEDE -->
            <div class="form-group col-sm-3">
                <label for="etapa">PAIS/COUNTRY: </label>
                <input type="text" class="form-control" id="pais" name="pais">
            </div>
         <!-- SELECIONAR O PAIS SEDE -->
            <div class="form-group col-sm-3">
                <label for="etapa">ANO/YEAR: </label>
                <input type="text" class="form-control" id="ano" name="ano">
            </div>

            <br><br><br><br>
            <hr>
            <div class="form-group col-sm-12">
                <label for="etapa">TIMES/TEAMS: </label>
                
                <br><br>
                <div class="form-group col-sm-3">
                        <label for="text">A</label>
                        <input type="text" class="form-control" id="grupoTime" name="grupoAtime1">
                        <input type="text" class="form-control" id="grupoTime" name="grupoAtime2">
                        <input type="text" class="form-control" id="grupoTime" name="grupoAtime3">
                        <input type="text" class="form-control" id="grupoTime" name="grupoAtime4">
                </div>

                <div class="form-group col-sm-3">
                        <label for="text">B</label>
                        <input type="text" class="form-control" id="grupoTime" name="grupoBtime1">
                        <input type="text" class="form-control" id="grupoTime" name="grupoBtime2">
                        <input type="text" class="form-control" id="grupoTime" name="grupoBtime3">
                        <input type="text" class="form-control" id="grupoTime" name="grupoBtime4">
                </div>

                 <div class="form-group col-sm-3">
                        <label for="text">C</label>
                        <input type="text" class="form-control" id="grupoTime" name="grupoCtime1">
                        <input type="text" class="form-control" id="grupoTime" name="grupoCtime2">
                        <input type="text" class="form-control" id="grupoTime" name="grupoCtime3">
                        <input type="text" class="form-control" id="grupoTime" name="grupoCtime4">
                </div>

                 <div class="form-group col-sm-3">
                        <label for="text">D</label>
                        <input type="text" class="form-control" id="grupoTime" name="grupoDtime1">
                        <input type="text" class="form-control" id="grupoTime" name="grupoDtime2">
                        <input type="text" class="form-control" id="grupoTime" name="grupoDtime3">
                        <input type="text" class="form-control" id="grupoTime" name="grupoDtime4">
                </div>

                <div class="form-group col-sm-3">
                        <label for="text">E</label>
                        <input type="text" class="form-control" id="grupoTime" name="grupoEtime1">
                        <input type="text" class="form-control" id="grupoTime" name="grupoEtime2">
                        <input type="text" class="form-control" id="grupoTime" name="grupoEtime3">
                        <input type="text" class="form-control" id="grupoTime" name="grupoEtime4">
                </div>

                <div class="form-group col-sm-3">
                        <label for="text">F</label>
                        <input type="text" class="form-control" id="grupoTime" name="grupoFtime1">
                        <input type="text" class="form-control" id="grupoTime" name="grupoFtime2">
                        <input type="text" class="form-control" id="grupoTime" name="grupoFtime3">
                        <input type="text" class="form-control" id="grupoTime" name="grupoFtime4">
                </div>

                <div class="form-group col-sm-3">
                        <label for="text">G</label>
                        <input type="text" class="form-control" id="grupoTime" name="grupoGtime1">
                        <input type="text" class="form-control" id="grupoTime" name="grupoGtime2">
                        <input type="text" class="form-control" id="grupoTime" name="grupoGtime3">
                        <input type="text" class="form-control" id="grupoTime" name="grupoGtime4">
                </div>

                <div class="form-group col-sm-3 ">
                        <label for="text">H</label>
                        <input type="text" class="form-control" id="grupoTime" name="grupoHtime1">
                        <input type="text" class="form-control" id="grupoTime" name="grupoHtime2">
                        <input type="text" class="form-control" id="grupoTime" name="grupoHtime3">
                        <input type="text" class="form-control" id="grupoTime" name="grupoHtime4">
                </div>
            </div>
             <br><br><br><br>
            
            <hr class="col-sm-12"><!-- 
            <div class="form-group col-sm-2">
            <label for="etapa">CIDADES/CITYS </label>
            </div> -->
            <br><br>
            <div class="col-sm-12"><br><br>
                <div class="form-group col-sm-3">
                    <label for="text">CIDADES/CITYS</label>   
                </div>

                <div class="form-group col-sm-3">
                    <label for="text">ESTADIO/STADIUM</label>   
                </div>
            </div>

            <div class="col-sm-12">
                <div id = cidades class="form-group col-sm-3">               
                    <input type="text" class="form-control" id="cidades" name="cidade1">              
                </div>

                <div id = estadios class="form-group col-sm-3">             
                    <input type="text" class="form-control" id="estadios" name="estadio1">
                </div>
            </div>
            <br>
             <div class="col-sm-12 ">
                    &nbsp&nbsp&nbsp
                    <button type="button" class="btn btn-primary" onclick="addCampo()">+</button>
                    <br><br><br>
                    <p><font color="red"> *Primeiro adicione todos os campos necessários para depois preencher!</font></p>
            </div>

            <div class="col-sm-12"><br><br>
                <button type="submit" class="btn btn-primary">SALVAR</button>
            </div>
        </form>
    </div>

</body>
</html>
