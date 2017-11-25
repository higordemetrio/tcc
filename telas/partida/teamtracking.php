
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
    <title>FIFA SCOUT - CADASTRO DE CABECALHO</title>

</head>
<body>
 <br>
<P align="center" class="col-sm-10 col-sm-offset-1"  >
  <button type="button" class="btn btn-primary"> Onde encontrar? </button>
    
</p>
<hr class="col-sm-12">

<div class="col-sm-12">
    <div class="col-sm-6" style="text-align: center;">
        <div class="col-sm-12"><label> Ball Possession heat map</label></div>
        <div class="col-sm-5 col-sm-offset-3" >
            <table>
                <tr>
                    <td>
                        <input type='text' class='form-control' name='quad1'> 
                        <input type='text' class='form-control' name='quad2'> 
                        <input type='text' class='form-control' name='quad3'> 
                    </td>
                    <td>
                        <input type='text' class='form-control' name='quad4'> 
                        <input type='text' class='form-control' name='quad5'> 
                        <input type='text' class='form-control' name='quad6'>   
                    </td>
                    <td>
                        <input type='text' class='form-control' name='quad7'> 
                        <input type='text' class='form-control' name='quad8'> 
                        <input type='text' class='form-control' name='quad9 '>   
                    </td>
                </tr>

            </table>
        </div>
    </div>

    <div class="col-sm-6" style="text-align: center;">
        <div class="col-sm-12"><label> Attack origin </label></div>
        <div class="col-sm-5 col-sm-offset-4">
             <table>
                <tr>
                    <td>
                        <input type='text' class='form-control' name='esq'> 
                    <td>
                    <td>
                        <input type='text' class='form-control' name='meio'> 
                    <td>
                    <td>
                        <input type='text' class='form-control' name='dir'> 
                    <td>
                </tr>
            </table>
         </div>
                   
    </div>


</div>
<hr class="col-sm-12">
    
<div id = campos>
    <div class="col-sm-12">
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


<hr class="col-sm-12">
<button type="submit" class="btn btn-primary">PROXIMO</button>
</form>


</body>
</html>