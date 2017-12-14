

    <script type="text/javascript" src="../../js/matchreport.js"></script>


<body>
 <br>
<P align="center" class="col-sm-10 col-sm-offset-1"  >
  <a type="button" href="../partida/ondeencontrar/matchreport_ondeencontrar.php" target="_blank" class="btn btn-primary"> Onde encontrar? </a> 
    
</p>
<hr class="col-sm-12">
<div class="col-sm-12">
    <div class="col-sm-6">
        <div class="col-sm-4">
            <label> First half</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="firsthalf">
            </div>
        </div>
        <div class="col-sm-4">
            <label> Second half</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="secondhalf">
            </div>
        </div>
    </div>
</div>

<hr class="col-sm-12">

<div class="col-sm-12">
    <div class="col-sm-3" style="text-align: center;">
        <label> <?php echo $time1 ?></label>
    </div>

    <div class="col-sm-2" style="text-align: center;">
        <label> Tipo</label>
    </div>


    <div class="col-sm-2" style="text-align: center;">
        <label>Minuto</label>
    </div>
        

    <div class="col-sm-2" style="text-align: center;">
        <label>Tipo</label>
    </div>


    <div class="col-sm-3" style="text-align: center;">
        <label> <?php echo $time2 ?></label>
    </div>
</div>
<hr class="col-sm-12">
    
<div id = mrcampos>
    <div class="col-sm-12" id=mrcampo1>
        <div class="col-sm-3" style="text-align: center;">
            <input type="text" class="form-control" name="time1report1">
        </div>

        <div class="col-sm-2" style="text-align: center;">
            <select class="form-control" name="time1tipo">
                <option>Goal Scored</option>
                <option>Own Goal</option>
                <option>Penalty Scored</option>
                <option>Penalty Missed</option>
                <option>Yellow Card</option>
                <option>2Y = R</option>
                <option>Red Card</option>
                <option>Substitution</option>
            </select>
        </div>


        <div class="col-sm-2" style="text-align: center;">
            <input type="text" class="form-control"  name="minreport1">
        </div>
                

        <div class="col-sm-2" style="text-align: center;">
            <select class="form-control" name="time2tipo">
                <option>Goal Scored</option>
                <option>Own Goal</option>
                <option>Penalty Scored</option>
                <option>Penalty Missed</option>
                <option>Yellow Card</option>
                <option>2Y = R</option>
                <option>Red Card</option>
                <option>Substitution</option>
            </select>
        </div>


        <div class="col-sm-3" style="text-align: center;">
            <input type="text" class="form-control"  name="time1report1">
        </div>
    </div>
</div>

<div class="col-sm-12 ">
    &nbsp&nbsp&nbsp
    <button type="button" class="btn btn-primary" id="addCampoMatchReport">+</button>
    <button type="button" class="btn btn-primary" id="subCampoMatchReport">-</button>
</div>

<hr class="col-sm-12">
<button type="submit" class="btn btn-primary">SALVAR</button>
</form>


</body>
</html>
