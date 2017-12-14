
<!DOCTYPE html>
<html>
    <script type="text/javascript" src="../../js/VanillaMasker.js"></script>  
<head>
</head>
<body>
    <br>
    <P align="center" class="col-sm-10 col-sm-offset-1"  >
         <a type="button" href="../edicao/ondeencontrar/cadastroselecao_ondeencontrar.php" target="_blank" class="btn btn-primary"> Onde encontrar? </a>
        
    </p> 
    <hr class="col-sm-12">
    <div class="container col-sm-12">
        <form>
        <!-- SELECIONAR O PAIS SEDE -->
           <div class="form-group col-sm-3">
                <label for="etapa">SELEÇÃO</label>
                <select class="form-control" id="etapa" name="etapa">
                    <option>BRAZIL</option>
                    <option>GERMANY</option>
                </select>
            </div>
            <br><br><br><br>
            <hr>         
            <br><br>
            <div class="col-sm-12"><br><br>
                <div class="form-group col-sm-1">
                    <label for="text">#</label>   
                </div>

                <div class="form-group col-sm-3">
                    <label for="text">Name</label>   
                </div>

                <div class="form-group col-sm-2">
                    <label for="text">Pos</label>   
                </div>

                <div class="form-group col-sm-2">
                    <label for="text">DOB</label>   
                </div>

            </div>          
            <?php
            for ($i=1; $i < 24; $i++) { 
                echo '   
                <div class="col-sm-12">
                    <div id = numero class="form-group col-sm-1">               
                        <input type="text" class="form-control" id="numero" name="numero'.$i.'">              
                    </div>

                    <div id = nome class="form-group col-sm-3">             
                        <input type="text" class="form-control" id="nome" name="nome'.$i.'">
                    </div>

                    <div id = posicao class="form-group col-sm-2">             
                        <div class="form-group">
                            <select class="form-control" id="posicao" name="posicao'.$i.'">
                                <option>GK</option>
                                <option>DF</option>
                                <option>MF</option>
                                <option>FW</option>
                            </select>
                        </div>
                    </div>

                    
                     
                    <div id = date class="form-group col-sm-2">
                        <input type="text" class="form-control" id="datanasc" name="data'.$i.'"/>
                        
                    </div>
                </div>
            ';
            }
            ?>
            <hr>
            <div id = nome class="form-group col-sm-12"> 
                <div class="col-sm-4">
                    <label>Couch Name</label>            
                    <input type="text" class="form-control" id="nome" name="nomecouch">
                </div>

                <div class="col-sm-2">
                    <label>Nacionalidade</label>            
                    <input type="text" class="form-control" id="nome" name="naccouch">
                </div>
            </div>
            <input type="hidden" name="edicao" value=<?php echo '"'.$edicao.'"'?>>           
            <hr class="col-sm-12">
            <div class="col-sm-12"><br><br>
                <button type="submit" class="btn btn-primary">SALVAR</button>
            </div>
        </form>
    </div>

</body>
</html>
