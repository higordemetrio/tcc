
<body>
     <br>
    <P align="center" class="col-sm-12"  >
        <a type="button" href="../partida/ondeencontrar/taticallineup_ondeencontrar.php" target="_blank" class="btn btn-primary"> Onde encontrar? </a> 
        
    </p>
    
    <hr class="col-sm-12">
        <div class="col-sm12">
        <p align="center" >
            <font color="red" size="3"> Para o preenchimento destes dados você deverá utilizar uma plataforma desenvolvida especialmente para isso.</font>
            <br>
             <a  href="pegarposicao/lineup/recorte/upload.php" target="_blank" class="btn btn-primary">Pegar posição</a>
        </p>
    </div>

    <hr class="col-sm-12">

    <div class="container col-sm-12">
        <form>
            <div class="col-sm-7">
                <div class="form-group col-sm-2">
                    <label for="tamanho_campo">W: </label>
                    <input type="text" class="form-control" id="w" name="w">
                </div>

                <div class="form-group col-sm-2">
                    <label for="tamanho_campo">H: </label>
                    <input type="text" class="form-control" id="h" name="h">
                </div>
            </div>

            <br><br><br><br>
         
            
            <hr class="col-sm-12">
            <!-- TIME 1 -->

            <br><br>
            <div id= time1 class="col-sm-6"><br><br>
                <div class="col-sm-12">
                    <label><?php echo $time1 ?></label>   
                </div>
                    
                <div class="col-sm-10">
                    <div class="form-group col-sm-3">
                        <label for="text">#</label>   
                    </div>

                    <div class="form-group col-sm-3">
                        <label for="text">X</label>   
                    </div>

                    <div class="form-group col-sm-3">
                        <label for="text">Y</label>   
                    </div>
                </div>
                 <?php
                    for ($i=1; $i < 12; $i++) { 
                        echo '   
                        <div class="col-sm-10">
                        <div id = numero class="form-group col-sm-3">               
                            <input type="text" class="form-control" id="time1_numero" name="time1_numero'.$i.'">              
                        </div>

                        <div id = nome class="form-group col-sm-3">             
                            <input type="text" class="form-control" id="time1_x" name="time1_x'.$i.'">
                        </div>

                        <div id = nome class="form-group col-sm-3">             
                            <input type="text" class="form-control" id="time1_y" name="time1_y'.$i.'">
                        </div>
                        </div>
                        ';
                    }
                ?>
                
            </div>

            <!-- TIME 2 -->
            <div id= time2 class="col-sm-6"><br><br>
                <div class="col-sm-12">
                    <label><?php echo $time2 ?></label>      
                </div>
                
                <div class="col-sm-10">
                    <div class="form-group col-sm-3">
                        <label for="text">#</label>   
                    </div>

                    <div class="form-group col-sm-3">
                        <label for="text">X</label>   
                    </div>

                    <div class="form-group col-sm-3">
                        <label for="text">Y</label>   
                    </div>
                </div>
                <?php

                for ($i=1; $i < 12; $i++) { 
                    echo '   
                    <div class="col-sm-10">
                    <div id = numero class="form-group col-sm-3">               
                        <input type="text" class="form-control" id="time2_numero" name="time2_numero'.$i.'">              
                    </div>

                    <div id = nome class="form-group col-sm-3">             
                        <input type="text" class="form-control" id="time2_x" name="time2_x'.$i.'">
                    </div>

                    <div id = nome class="form-group col-sm-3">             
                        <input type="text" class="form-control" id="time2_y" name="time2_y'.$i.'">
                    </div>
                    </div>
                    ';
                    }
            
                ?>
            </div>
           
            

            
            <hr class="col-sm-12">
            <div class="col-sm-12"><br><br>
                <button type="submit" class="btn btn-primary">SALVAR</button>
            </div>
        </form>
    </div>

</body>
</html>
