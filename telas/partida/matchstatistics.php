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
