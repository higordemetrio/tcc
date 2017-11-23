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
    <script type="text/javascript" src="../../js/passingdistribution.js"></script>
    
<head>
    <title>FIFA SCOUT - ACTUAL FORMATION</title>

</head>
<body>
     <br>
    <P align="center" class="col-sm-12"  >
      <button type="button" class="btn btn-primary"> Onde encontrar? </button>
        
    </p>
    
    <hr class="col-sm-12">
       
        
               
    <div class="col-sm-12">
        <label>Quantidade de jogadores</label>
    </div>
    <div class="col-sm-12"> 
        <div class="col-sm-1">
            <input type="text" class="form-control" id=campo name="qtdjogadores">
        </div>
        <div class="col-sm-11">
            <button class="btn-primary btn"  onclick="addTableTime1()"> Enviar </button>
        </div>
    </div>
    <br><br><br>
    <hr class="col-sm-12"> 
            <div class="col-sm-12" id="disc">
                
            </div>
            <div class="col-sm-8" id=tableTimePass1></div>
             
            <div class="col-sm-4" id=tableTimePass2></div>
        <form>

            
            <hr class="col-sm-12">
            <div class="col-sm-12"><br><br>
                <button type="submit" class="btn btn-primary">SALVAR</button>
            </div>
        </form>
    

</body>
</html>
