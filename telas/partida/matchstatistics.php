
<body>
    <br>
    <P align="center" class="col-sm-10 col-sm-offset-1"  >
        <a type="button" href="../partida/ondeencontrar/matchstatistics_ondeencontrar.php" target="_blank" class="btn btn-primary"> Onde encontrar? </a> 
        
    </p>
    
    <hr class="col-sm-12">
    <div class="container col-sm-12">
        <form>
        	<div class="col-sm-4" style="text-align: center;">
        		<label><?php echo $time1 ?></label>
        	</div>

        	<div class="col-sm-4" style="text-align: center;">
        		<label >Statistics</label>
        	</div>

        	<div class="col-sm-4" style="text-align: center;">
        		<label><?php echo $time2 ?></label>
        	</div>
            
            <hr class="col-sm-12">
            <!-- Shots/Shots on goal -->
            <div class="col-sm-12">
                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control"  name="time1shots">
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4" style="text-align: center;">
                    <label > Shots/Shots on goal</label>
                </div>

                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control"  name="time2shots">
                        </div>
                    </div>
                </div>  
            </div>
            <!-- Fouls -->
            <div class="col-sm-12">
                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time1houls">
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4" style="text-align: center;">
                    <label > Fouls </label>
                </div>

                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time2fouls">
                        </div>
                    </div>
                </div>  
            </div>
            <!-- Corner kicks -->
            <div class="col-sm-12">
                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time1corner">
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4" style="text-align: center;">
                    <label > Corner kicks</label>
                </div>

                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time2corner">
                        </div>
                    </div>
                </div>  
            </div>

            <!-- Direct free kicks leading to a goal  -->
            <div class="col-sm-12">
                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time1dfreekicks">
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4" style="text-align: center;">
                    <label > Direct free kicks leading to a goal </label>
                </div>

                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time2dfreekicks">
                        </div>
                    </div>
                </div>  
            </div>

            <!-- Indirect free kicks leading to a goal -->
            <div class="col-sm-12">
                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time1ifreekicks">
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4" style="text-align: center;">
                    <label > Indirect free kicks leading to a goal </label>
                </div>

                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time2ifreekicks">
                        </div>
                    </div>
                </div>  
            </div>

            <!-- Penalty kicks/Converted -->
            <div class="col-sm-12">
                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time1penalty">
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4" style="text-align: center;">
                    <label >Penalty kicks/Converted </label>
                </div>

                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time2penalty">
                        </div>
                    </div>
                </div>  
            </div>

            <!-- Offsides -->
            <div class="col-sm-12">
                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time1offsides">
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4" style="text-align: center;">
                    <label >Offsides </label>
                </div>

                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time2offsides">
                        </div>
                    </div>
                </div>  
            </div>

            <!-- Own goals  -->
            <div class="col-sm-12">
                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time1owngoals">
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4" style="text-align: center;">
                    <label >Own goals </label>
                </div>

                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time2owngoals">
                        </div>
                    </div>
                </div>  
            </div>

            <!-- Cautions -->
            <div class="col-sm-12">
                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time1cautions">
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4" style="text-align: center;">
                    <label >Cautions </label>
                </div>

                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time2cautions">
                        </div>
                    </div>
                </div>  
            </div>

            <!-- Expulsion due to second caution -->
            <div class="col-sm-12">
                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time1expulsionsc">
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4" style="text-align: center;">
                    <label > Expulsion due to second caution</label>
                </div>

                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time2expulsionsc">
                        </div>
                    </div>
                </div>  
            </div>

            <!-- Direct expulsion -->
            <div class="col-sm-12">
                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time1dexpulsion">
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4" style="text-align: center;">
                    <label >Direct expulsion </label>
                </div>

                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time2dexpulsion">
                        </div>
                    </div>
                </div>  
            </div>

            <!-- Ball possession -->
            <div class="col-sm-12">
                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time1ballpos">   
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4" style="text-align: center;">
                    <label >Ball possession (%) </label>
                </div>

                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time2ballpos">
                        </div>
                    </div>
                </div>  
            </div>

            <!--  Actual playing time -->
            <div class="col-sm-12">
                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time1time">
                        </div>
                    </div>
                </div>     

                <div class="col-sm-4" style="text-align: center;">
                    <label > Actual playing time </label>
                </div>

                <div class= "col-sm-4">
                    <div class="col-sm-12">
                        <div class="col-sm-4 col-sm-offset-4"> 
                            <input type="text" class="form-control" name="time2time">
                        </div>
                    </div>
                </div>  
            </div>
            <hr class="col-sm-12">


    </div>

            
            <div class="col-sm-12"><br><br>
                <button type="submit" class="btn btn-primary">SALVAR</button>
            </div>

        </form>
    

</body>
</html>
