
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
    <title>FIFA SCOUT - CADASTRO DE CABECALHO</title>

</head>
<body>
 <br>
    <P align="center" class="col-sm-10 col-sm-offset-1"  >
      <button type="button" class="btn btn-primary"> Onde encontrar? </button>
        
    </p>
    <hr class="col-sm-12">

    <div class="col-sm-6">
            
    </div>

    <div class="col-sm-6">
    </div>
        
    </div>
        <div class="form-group col-sm-3">
            <label for="etapa">STAGE: </label>
            <select class="form-control" id="etapa" name="etapa">
                <option>Goal</option>
                <option>Group B</option>
                <option>Group C</option>
                <option>Group D</option>
                <option>Group E</option>
                <option>Group F</option>
                <option>Group G</option>
                <option>Group H</option>
                <option>Round of 16</option>
                <option>Quarter-finals</option>
                <option>Semi-finals</option>
                <option>Final</option>
                <option>Match for third place</option>
            </select>
        </div>

        <br><br><br><br>

        <div class="col-md-offset-4">
         <!-- SELECIONAR O TIME 1 -->
            <div class="form-group col-sm-5">
                <label for="text">TEAM:</label>
                <select class="form-control" id="time1" name="time1">
                    <option>BRAZIL</option>
                    <option>GERMANY</option>
                </select>

            </div>
             <!-- VERSUS -->
            <div class="col-sm-2" align="center">
            <label><font size="20px">X</font></label>
            </div>
             <!-- SELECIONAR O TIME 2 -->
            <div class="form-group col-sm-5">
                <label for="text"> TEAM:</label>
                <select class="form-control" id="time2" name="time2">
                    <option>BRAZIL</option>
                    <option>GERMANY</option>
                </select>
            </div>
        </div>

        <br><br><br><br><br><br>
         <!-- INPUT DO NUMERO DO JOGO -->
        <div class="form-group col-sm-2">
            <label for="text">#</label>
            <input type="text" class="form-control" id="num" name="num"">

        </div>

        <!-- DATA DO JOGO -->
        <div class="form-group col-sm-5">
            <label for="text">DATA & HOUR </label>
            
             <div >
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker'>
                        <input type='text' class="form-control" name="datetime"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker({
                    defaultDate: "08/02/2016",

                    locale: 'pt-br'
                });
            });
            </script>

        </div>
        <!-- CIDADE DO JOGO -->
        <div class="form-group col-sm-5">
                <label for="text">CITY:</label>
                <select class="form-control" id="cidade" name="cidade">
                    <option>RIO DE JANEIRO</option>
                    <option>SAO PAULO</option>
                </select>
        </div>
        <input type="hidden" name="edicao" value=<?php echo '"'.$edicao.'"'?>>
        <br>
        <br><br>
        <br><br>
        <br><br>
        <hr class="col-sm-12">
        <button type="submit" class="btn btn-primary">PROXIMO</button>
    </form>
</div>

</body>
</html>
