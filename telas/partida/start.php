
<body>
    <br>
    <P align="center" class="col-sm-10 col-sm-offset-1"  >
        <a type="button" href="../partida/ondeencontrar/start_ondeencontrar.php" target="_blank" class="btn btn-primary"> Onde encontrar? </a> 
        
    </p>
    
    <hr class="col-sm-12">
    <div class="container col-sm-12">
        <form>
            <div class="col-sm-6">        
                <!-- Referee -->
                <div class="form-group col-sm-6">
                       <label for="text">Referee</label>
                    <input type="text" class="form-control" id="referee"  name="referee"/> 
                </div>
                <div class="form-group col-sm-3">
                       <label for="text">Nacionalidade</label>
                    <input type="text" class="form-control" id="refereenac"  name="refereenac"/> 
                </div>
                <!-- 4th Oficcial-->
                <div class="form-group col-sm-6">
                       <label for="text">4th official</label>
                    <input type="text" class="form-control" id="4thofficil"  name="4thofficil"/> 
                </div>
                <div class="form-group col-sm-3">
                       <label for="text">Nacionalidade</label>
                    <input type="text" class="form-control" id="4thofficilnac"  name="4thofficilnac"/> 
                </div>
                <!-- Match Commissioner-->
                <div class="form-group col-sm-6">
                       <label for="text">Match Commissioner</label>
                    <input type="text" class="form-control" id="matchcommissioner"  name="matchcommissioner"/> 
                </div>
                <div class="form-group col-sm-3">
                       <label for="text">Nacionalidade</label>
                    <input type="text" class="form-control" id="matchcommissionernac"  name="matchcommissionernac"/> 
                </div>
                <!-- General Coordinator -->
                <div class="form-group col-sm-6">
                       <label for="text">General Coordinator</label>
                    <input type="text" class="form-control" id="generalcoordinator"  name="generalcoordinator"/> 
                </div>
                <div class="form-group col-sm-3">
                       <label for="text">Nacionalidade</label>
                    <input type="text" class="form-control" id="generalcoordinatornac"  name="generalcoordinatornac"/> 
                </div>
            </div>

            <div class="col-sm-6">        
                <!-- Assistant referre 1-->
                <div class="form-group col-sm-6">
                       <label for="text">Assistant referee 1</label>
                    <input type="text" class="form-control" id="assistantreferee1"  name="assistantreferee1"/> 
                </div>
                <div class="form-group col-sm-3">
                       <label for="text">Nacionalidade</label>
                    <input type="text" class="form-control" id="assistantreferee1nac"  name="assistantreferee1nac"/> 
                </div>
                <!-- Assistant referre 2-->
                <div class="form-group col-sm-6">
                       <label for="text">Assistant referee 2</label>
                    <input type="text" class="form-control" id="assistantreferee2"  name="assistantreferee2"/> 
                </div>
                <div class="form-group col-sm-3">
                       <label for="text">Nacionalidade</label>
                    <input type="text" class="form-control" id="assistantreferee2nac"  name="assistantreferee2nac"/> 
                </div>
                <!-- Reserve assistant referee-->
                <div class="form-group col-sm-6">
                       <label for="text">Reserve assistant referee</label>
                    <input type="text" class="form-control" id="reserveassistantreferee"  name="reserveassistantreferee"/> 
                </div>
                <div class="form-group col-sm-3">
                       <label for="text">Nacionalidade</label>
                    <input type="text" class="form-control" id="reserveassistantrefereenac"  name="reserveassistantrefereenac"/> 
                </div>
            </div>
            <hr class="col-sm-12">
            <!-- TIME 1 -->
            <div class="form-group col-sm-3">
                <label for="etapa"><?php echo "<h4>".$time1."</h4>" ?></label>
            </div>
            <!-- Shirt-->
            <div class="form-group col-sm-2 col-sm-offset-1">
                   <label for="text">Shirt</label>
                <input type="text" class="form-control" id="shirt"  name="time1shirt"/> 
            </div>
            <!-- Short -->
            <div class="form-group col-sm-2">
                   <label for="text">Short</label>
                <input type="text" class="form-control" id="short"  name="time1short"/> 
            </div>
            <!-- Socks -->
            <div class="form-group col-sm-2">
                   <label for="text">Socks</label>
                <input type="text" class="form-control" id="socks"  name="time1socks"/> 
            </div>

            <br><br><br><br>
           
          
            
            <br><br>
            <div class="col-sm-6"><br><br>
                <div class="form-group col-sm-6">
                    <label for="text">Titulares</label> <br>  
                    <label for="text">&nbsp &nbsp &nbsp #</label>  
                </div>

                <?php 
                    for ($i=0; $i < 12; $i++) { 
                        echo '
                        <div class="col-sm-12">
                            <div class="col-sm-3">
                            <input type="text" class="form-control col-sm-1" name="time1titular'.$i.'">
                            </div>
                        </div>
                        ';  
                    }

                ?>
            </div>
            <div class="col-sm-6"><br><br>
                <div class="form-group col-sm-6">
                    <label for="text">Substitutes</label> <br>  
                    <label for="text">&nbsp &nbsp &nbsp #</label>  
                </div>

                <?php 
                    for ($i=0; $i < 14; $i++) { 
                        echo '
                        <div class="col-sm-12">
                            <div class="col-sm-3">
                            <input type="text" class="form-control col-sm-1" name="time1substitutes'.$i.'">
                            </div>
                        </div>
                        ';  
                    }

                ?>
            </div>

             <hr class="col-sm-12">
            <!-- TIME 2 -->
            <div class="form-group col-sm-3">
                <label for="etapa"><?php echo "<h4>".$time2."</h4>" ?></label>
            </div>
            <!-- Shirt-->
            <div class="form-group col-sm-2 col-sm-offset-1">
                   <label for="text">Shirt</label>
                <input type="text" class="form-control" id="shirt"  name="time2shirt"/> 
            </div>
            <!-- Short -->
            <div class="form-group col-sm-2">
                   <label for="text">Short</label>
                <input type="text" class="form-control" id="short"  name="s/time2short"/> 
            </div>
            <!-- Socks -->
            <div class="form-group col-sm-2">
                   <label for="text">Short</label>
                <input type="text" class="form-control" id="short"  name="time2short"/> 
            </div>

            <br><br><br><br>
            <hr>
          
            
            <br><br>
            <div class="col-sm-6"><br><br>
                <div class="form-group col-sm-6">
                    <label for="text">Titulares</label> <br>  
                    <label for="text">&nbsp &nbsp &nbsp #</label>  
                </div>

                <?php 
                    for ($i=0; $i < 12; $i++) { 
                        echo '
                        <div class="col-sm-12">
                            <div class="col-sm-3">
                            <input type="text" class="form-control col-sm-1" id="numero" name="time2titular'.$i.'">
                            </div>
                        </div>
                        ';  
                    }

                ?>
            </div>
            <div class="col-sm-6"><br><br>
                <div class="form-group col-sm-6">
                    <label for="text">Substitutes</label> <br>  
                    <label for="text">&nbsp &nbsp &nbsp #</label>  
                </div>

                <?php 
                    for ($i=0; $i < 14; $i++) { 
                        echo '
                        <div class="col-sm-12">
                            <div class="col-sm-3">
                            <input type="text" class="form-control col-sm-1" id="numero" name="time2substitutes'.$i.'">
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
