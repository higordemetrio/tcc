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
    
<head>
    <title>FIFA SCOUT - CADASTRO SELECAO</title>

</head>
<body>
    <br>
    <P align="center" class="col-sm-10 col-sm-offset-1"  >
      <button type="button" class="btn btn-primary"> Onde encontrar? </button>
        
    </p>
    
    <hr class="col-sm-10 col-sm-offset-1">
    <div class="container col-sm-10 col-sm-offset-2">
        <form>
        <!-- SELECIONAR O PAIS SEDE -->
           <div class="form-group col-sm-3">
                <label for="etapa">TEAM:</label>
                <select class="form-control" id="etapa" name="etapa">
                    <option>-</option>
                    <option>BRAZIL</option>
                    <option>GERMANY</option>
                </select>
            </div>

            <br><br><br><br>
            <hr>
          
            
            <br><br>
            <div class="col-sm-12"><br><br>
                <div class="form-group col-sm-2">
                    <label for="text">Numero</label>   
                </div>

                <div class="form-group col-sm-5">
                    <label for="text">Nome</label>   
                </div>

                <div class="form-group col-sm-3">
                    <label for="text">Posicao</label>   
                </div>
            </div> 
          
            <?php

            for ($i=1; $i < 25; $i++) { 
                echo '   
                <div class="col-sm-12">
                    <div id = numero class="form-group col-sm-2">               
                        <input type="text" class="form-control" id="numero" name="numero'.$i.'">              
                    </div>

                    <div id = nome class="form-group col-sm-5">             
                        <input type="text" class="form-control" id="nome" name="nome'.$i.'">
                    </div>

                    <div id = posicao class="form-group col-sm-3">             
                        <div class="form-group">
                            <select class="form-control" id="posicao" name="posicao'.$i.'">
                                <option>Goalkeeper</option>
                                <option>Defender</option>
                                <option>Midfielder</option>
                                <option>Forward</option>
                                <option>Coach</option>
                            </select>
                        </div>
                    </div>
                </div>
            ';
            }
         
            ?>
            <div class="col-sm-12"><br><br>
                <button type="submit" class="btn btn-primary">SALVAR</button>
            </div>

        </form>
    </div>

</body>
</html>
