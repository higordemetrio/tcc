
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

    <script type="text/javascript" src="../../js/playerstatistics.js"></script>

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
    <div class="col-sm-12"> 
        <div class="col-sm-12">
                <label for="tempo">Time:</label>
        </div>
        <div class="col-sm-4">
            <select class="form-control" id="tempo" name="tempo">
                <option><?php echo $time1 ;?></option>
                <option><?php echo $time2 ;?></option>
            </select>
        </div>
    </div>
    <div class="col-sm-12"> 
        <div class="col-sm-12">
                <label for="tempo">#</label>
        </div>
        <div class="col-sm-1">
            <input type='text' class='form-control' name='num'> 
        </div>
    </div>
    <hr class="col-sm-12">
    <div class='col-sm-12'>
        <div class='col-sm-6'>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Goal(s) scored</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='gs1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='gs2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Shots</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='sh1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='sh2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Assist(s)</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='as1h'>
                </div>
                <div class="col-sm-2">
                    <input  class='form-control' type='text' name='as2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Offsite(s)</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='gs1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='gs2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Save(s)</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='sv1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='sv2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Yellow card</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='yc1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='yc2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>2Y+R</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='2y1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='2y2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Red card</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='rc1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='rc2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Foul(s) committed</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='fc1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='fc2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Delivery attacking third</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='da1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='da2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Delivery penalty area</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='pa1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='pa2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Tackles gaining</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='tg1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='tg2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Tackles not gaining</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='tng1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='tng2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Tackles suffered losing</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='tsl1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='tsl2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Tackles suffered not losing</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='tsnl1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='tsnl2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Clearances completed</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='cc1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='cc2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-8'>
                    <label>Clearances attempted</label>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='ca1h'>
                </div>
                <div class='col-sm-2'>
                    <input  class='form-control' type='text' name='ca2h'>
                </div>
            </div>
        </div>
        <div class='col-sm-6'>
            <div class='col-sm-12'>
                <div class='col-sm-6'>
                    <label>Total time played(mins)</label>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='tt1h'>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='tt2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-6'>
                    <label>Low time</label>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='lat1h'>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='lat2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-6'>
                    <label>Medium time</label>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='mat1h'>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='mat2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-6'>
                    <label>High time</label>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='hat1h'>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='hat2h'>
                </div>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-6'>
                    <label>Distance covered</label>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='dc1h'>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='dc2h'>
                </div>
            </div>

             <div class='col-sm-12'>
                <div class='col-sm-6'>
                    <label>Low covered</label>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='lac1h'>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='lac2h'>
                </div>
            </div>
             <div class='col-sm-12'>
                <div class='col-sm-6'>
                    <label>Medium covered</label>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='mac1h'>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='mac2h'>
                </div>
            </div>
             <div class='col-sm-12'>
                <div class='col-sm-6'>
                    <label>High covered</label>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='hac1h'>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='hatc2h'>
                </div>
            </div>
             <div class='col-sm-12'>
                <div class='col-sm-6'>
                    <label>Top speed</label>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='ts1h'>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='ts2h'>
                </div>
            </div>
             <div class='col-sm-12'>
                <div class='col-sm-6'>
                    <label>Sprints</label>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='spts1h'>
                </div>
                <div class='col-sm-3'>
                    <input  class='form-control' type='text' name='spts2h'>
                </div>
            </div>
        </div>
    </div>
    <hr class="col-sm-12">
    <div class="col-sm-6" style="text-align: center;">
        <div class="col-sm-12"><label> Passing distribution</label></div>
            <div class="col-sm-9 col-sm-offset-3" >

                <table>
                    <tr>
                        <td>
                            <input type='text' class='form-control' name='quad1pass'> 
                            <input type='text' class='form-control' name='quad2pass'> 
                            <input type='text' class='form-control' name='quad3pass'> 
                        </td>
                        <td>
                            <input type='text' class='form-control' name='quad4pass'> 
                            <input type='text' class='form-control' name='quad5pass'> 
                            <input type='text' class='form-control' name='quad6pass'>   
                        </td>
                        <td>
                            <input type='text' class='form-control' name='quad7pass'> 
                            <input type='text' class='form-control' name='quad8pass'> 
                            <input type='text' class='form-control' name='quad9pass'>   
                        </td>
                        <td>
                            <input type='text' class='form-control' name='quad10pass'> 
                            <input type='text' class='form-control' name='quad11pass'> 
                            <input type='text' class='form-control' name='quad12pass'> 
                        </td>
                        <td>
                            <input type='text' class='form-control' name='quad13pass'> 
                            <input type='text' class='form-control' name='quad14pass'> 
                            <input type='text' class='form-control' name='quad15pass'>   
                        </td>
                        <td>
                            <input type='text' class='form-control' name='quad16pass'> 
                            <input type='text' class='form-control' name='quad17pass'> 
                            <input type='text' class='form-control' name='quad18pass'>   
                        </td>
                    </tr>

                </table>

        </div>
    </div>
        <div class="col-sm-6" style="text-align: center;">
            <div class="col-sm-12"><label> Received passing distribution</label></div>
                <div class="col-sm-9 col-sm-offset-3" >
                    <table>
                        <tr>
                            <td>
                                <input type='text' class='form-control' name='quad1rece'> 
                                <input type='text' class='form-control' name='quad2rece'> 
                                <input type='text' class='form-control' name='quad3rece'> 
                            </td>
                            <td>
                                <input type='text' class='form-control' name='quad4rece'> 
                                <input type='text' class='form-control' name='quad5rece'> 
                                <input type='text' class='form-control' name='quad6rece'>   
                            </td>
                            <td>
                                <input type='text' class='form-control' name='quad7rece'> 
                                <input type='text' class='form-control' name='quad8rece'> 
                                <input type='text' class='form-control' name='quad9rece'>   
                            </td>
                            <td>
                                <input type='text' class='form-control' name='quad10rece'> 
                                <input type='text' class='form-control' name='quad11rece'> 
                                <input type='text' class='form-control' name='quad12rece'> 
                            </td>
                            <td>
                                <input type='text' class='form-control' name='quad13rece'> 
                                <input type='text' class='form-control' name='quad14rece'> 
                                <input type='text' class='form-control' name='quad15rece'>   
                            </td>
                            <td>
                                <input type='text' class='form-control' name='quad16rece'> 
                                <input type='text' class='form-control' name='quad17rece'> 
                                <input type='text' class='form-control' name='quad18rece'>   
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
</div>
<hr class="col-sm-12">
    

<div class="col-sm-12 ">
    &nbsp&nbsp&nbsp
    <button type="button" class="btn btn-primary" onclick="addCampoPlayer()">+</button>
    <br><br><br>
    <p><font color="red"> *Primeiro adicione todos os campos necessários para depois preencher!</font></p>
</div>


<hr class="col-sm-12">
<button type="submit" class="btn btn-primary">PROXIMO</button>
</form>


</body>
</html>