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
    <script type="text/javascript" src="js/cadastroposicao.js"></script>
    
<head>
    <title>FIFA SCOUT - ACTUAL FORMATION</title>

</head>
<body>
    <br>
    <P align="center" class="col-sm-10 col-sm-offset-1"  >
        <font size="2">
            INFORMAÇÕES DA COPA, ex:
            <br>
        </font>
        <font size="7">
            FIFA WORLD CUP
        </font>
        <br>
    </p>
    <p align="left" class="col-sm-10 col-sm-offset-1 ">
        <font size="2">CADASTRO POSICAO </font>
    </p>

    <button align="left" class="btn btn-primary col-sm-1 col-sm-offset-1">VOLTAR/BACK</button>
    <hr class="col-sm-10 col-sm-offset-1">
    <div class="container col-sm-9 col-sm-offset-2">
        <form>
        <!-- SELECIONAR O PAIS SEDE -->
           <div class="form-group col-sm-1">
                <label for="tamanho_campo">W: </label>
                <input type="text" class="form-control" id="w" name="w">
            </div>

            <div class="form-group col-sm-1">
                <label for="tamanho_campo">H: </label>
                <input type="text" class="form-control" id="h" name="h">
            </div>

            <br><br><br><br>
         
            
            <hr class="col-sm-12">
            <!-- TIME 1 -->

            <br><br>
            <div id= time1 class="col-sm-6"><br><br>
                <div class="col-sm-12">
                    <label for="text">BRAZIL</label>   
                </div>
                

                <div class="form-group col-sm-2">
                    <label for="text">Numero</label>   
                </div>

                <div class="form-group col-sm-2">
                    <label for="text">X</label>   
                </div>

                <div class="form-group col-sm-2">
                    <label for="text">Y</label>   
                </div>
                <div id=camposPosicaoTime1 >
                 <?php
                    for ($i=1; $i < 12; $i++) { 
                        echo '   
                        <div class="col-sm-12">
                        <div id = numero class="form-group col-sm-2">               
                            <input type="text" class="form-control" id="time1_numero" name="time1_numero'.$i.'">              
                        </div>

                        <div id = nome class="form-group col-sm-2">             
                            <input type="text" class="form-control" id="time1_x" name="time1_x'.$i.'">
                        </div>

                        <div id = nome class="form-group col-sm-2">             
                            <input type="text" class="form-control" id="time1_y" name="time1_y'.$i.'">
                        </div>
                        </div>
                        ';
                    }
                ?>
                </div>
                <div class="col-sm-6 ">
                    &nbsp&nbsp&nbsp
                    <button type="button" class="btn btn-primary" onclick="addCampoTime1()">+</button>
                    <br><br><br>
                    <p><font color="red"> *Primeiro adicione todos os campos necessários para depois preencher!</font></p>
                </div>
            </div>

            <!-- TIME 2 -->
            <div id= time2 class="col-sm-6"><br><br>
                <div class="col-sm-12">
                    <label for="text">GERMANY</label>   
                </div>
                

                <div class="form-group col-sm-2">
                    <label for="text">Numero</label>   
                </div>

                <div class="form-group col-sm-2">
                    <label for="text">X</label>   
                </div>

                <div class="form-group col-sm-2">
                    <label for="text">Y</label>   
                </div>

                <?php

                for ($i=1; $i < 12; $i++) { 
                    echo '   
                    <div class="col-sm-12">
                    <div id = numero class="form-group col-sm-2">               
                        <input type="text" class="form-control" id="time2_numero" name="time2_numero'.$i.'">              
                    </div>

                    <div id = nome class="form-group col-sm-2">             
                        <input type="text" class="form-control" id="time2_x" name="time2_x'.$i.'">
                    </div>

                    <div id = nome class="form-group col-sm-2">             
                        <input type="text" class="form-control" id="time2_y" name="time2_y'.$i.'">
                    </div>
                    </div>
                    ';
                    }
            
                ?>

                <div class="col-sm-6 ">
                    &nbsp&nbsp&nbsp
                    <button type="button" class="btn btn-primary" onclick="addCampoTime2()">+</button>
                    <br><br><br>
                    <p><font color="red"> *Primeiro adicione todos os campos necessários para depois preencher!</font></p>
                </div>
            </div>
            <div class="col-sm-6">
           
            

            
            
            <br>
            <div class="col-sm-12"><br><br>
                <button type="submit" class="btn btn-primary">PROXIMO/NEXT</button>
            </div>
        </form>
    </div>

</body>
</html>
