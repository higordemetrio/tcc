
<script type="text/javascript" src="../../js/passingdistribution.js"></script>

<body>
     <br>
    <P align="center" class="col-sm-12"  >
      <a type="button" href="../partida/ondeencontrar/passingdistribution_ondeencontrar.php" target="_blank" class="btn btn-primary"> Onde encontrar? </a> 
        
    </p>
    
    <hr class="col-sm-12">
       
        
    <div class="col-sm-12"> 
        <div class="col-sm-12">
                <label >Time:</label>
        </div>
        <div class="col-sm-4">
            <select class="form-control" id="tempo" name="tempo">
                <option><?php echo $time1 ;?></option>
                <option><?php echo $time2 ;?></option>
            </select>
        </div>
    </div>           
    <div class="col-sm-12">
        <label>Quantidade de jogadores:</label>
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
