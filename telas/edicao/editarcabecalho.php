<?php include '../../imports/import.php';?>
<body>
<div class="col-sm-12">
        <div class="form-group col-sm-5 col-sm-offset-3">
        <BR>
            <label for="edicao">PARTIDA:</label>

            <select class="form-control"  name="idpartida">
                <option>#1 | GROUP A | BRAZIL X CROATIA </option>
            </select>

             
        </div>
        
    </div>

<hr class="col-sm-12"> 
<br>    

    <P align="center" class="col-sm-10 col-sm-offset-1"  >
      <a type="button" href="../edicao/ondeencontrar/cadastrocabecalho_ondeencontrar.php" target="_blank" class="btn btn-primary"> Onde encontrar? </a>       
    </p>
<hr class="col-sm-10 col-sm-offset-1">
<div class="container col-sm-9 col-sm-offset-2">
    <form action="../partida/partida.php" method="get">
    <!-- SELECIONAR A ETAPA DA COMPETICAO -->
        <div class="form-group col-sm-3">
            <label for="etapa">STAGE </label>
            <select class="form-control" id="etapa" name="etapa">
                <option>Group A</option>
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
                <label for="text">CIDADE</label>
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
