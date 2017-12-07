<!DOCTYPE html>
<html>

    <script type="text/javascript" src="js/editaredicao.js"></script>
    
<head>
    
</head>
<body>
    <br>
    <P align="center" class="col-sm-10 col-sm-offset-1"  >
      <a type="button" href="telas/inicio/ondeencontrar.php" target="_blank" class="btn btn-primary"> Onde encontrar? </a>
        
    </p>
    <div class="col-sm-12">
        <div class="form-group col-sm-3 col-sm-offset-3">
        <BR>
            <label for="edicao">EDICÃO</label>

            <select class="form-control" id="edicao" name="edicao">
                <option>BRAZIL 2014</option>
                <option>AFRICA 2010</option>
            </select>           
        </div>      
    </div>
    <hr class="col-sm-10 col-sm-offset-1">
    <div class="container col-sm-9 col-sm-offset-2">
        <form>
            <div class="form-group col-sm-3">
                <label for="etapa">PAIS </label>
                <input type="text" class="form-control" id="pais" name="pais">
            </div>
            <div class="form-group col-sm-3">
                <label for="etapa">ANO </label>
                <input type="text" class="form-control" id="ano" name="ano">
            </div>

            <br><br><br><br>
            <hr>
            <div class="form-group col-sm-12">
                <label for="etapa">SELEÇÕES </label>
                
                <br><br>
                <div class="form-group col-sm-3">
                        <label for="text">A</label>
                         <select class="form-control" name="grupoAtime1">
                            <option>-</option>
                            <option>-</option>
                        </select>
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
            
            <hr class="col-sm-12">
            <br><br>
            <div class="col-sm-12"><br><br>
                <div class="form-group col-sm-3">
                    <label for="text">CIDADES</label>   
                </div>

                <div class="form-group col-sm-3">
                    <label for="text">ESTADIOS</label>   
                </div>
            </div>
            <div id=camposCidadesEdit >
                <div class="col-sm-12" id=campoCidadesEdit1>
                    <div id = cidades class="form-group col-sm-3">               
                        <input type="text" class="form-control" id="cidades" name="cidade1">              
                    </div>

                    <div id = estadios class="form-group col-sm-3">             
                        <input type="text" class="form-control" id="estadios" name="estadio1">
                    </div>
                </div>
            </div>
            <br>
             <div class="col-sm-12 ">
                    &nbsp&nbsp&nbsp
                    <button type="button" class="btn btn-primary" id=addCidadeEdit>+</button>
                    <button type="button" class="btn btn-primary" id=subCidadeEdit>-</button>
                    <br><br><br>
            </div>

            <hr class="col-sm-12">
            
            <div class="col-sm-12"><br><br>
                <button type="submit" class="btn btn-primary">SALVAR</button>
            </div>
        </form>
    </div>

</body>
</html>
