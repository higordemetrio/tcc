<?php 
    $etapa = $_GET['etapa'];
    $time1 = $_GET['time1'];
    $time2 = $_GET['time2'];
    $num = $_GET['num'];
    $datetime = $_GET['datetime'];
    $cidade = $_GET['cidade'];
    $edicao = $_GET['edicao'];

    

?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- https://bootsnipp.com/snippets/3kerp -->
    <!-- CSS e JS do layout -->
    <script src="../../bootstrap/layout/jquery/jquery-1.11.1.min.js"></script>
    <link href="../../bootstrap/layout/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../bootstrap/layout/js/bootstrap.min.js"></script>
    <script src="../../js/jquery-3.2.1.min.js"></script>
<head>
    <title>FIFA SCOUT</title>

</head>
<body>

<div class="container">
    <div class="row">
        <h4> <?php echo $etapa;?> </h4>
        <h1> <?php echo $time1." - ".$time2;?></h1>
        <h3> <?php echo "#".$num." &nbsp ".$datetime." &nbsp  ".$cidade;  ?></h3>
        <div role="tabpanel">
            <div class="col-sm-2">
                <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                    <li role="presentation" class="brand-nav active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Start (Line-ups)</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Full Time (Match Report)</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Full Time (Match Statistics)</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Tactical Startlist Neutral (Tactical line-up)</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Actual Formation</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab">Team Statistic (Team Tracking Statistics)</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab">Player Statistic</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab8" aria-controls="tab8" role="tab" data-toggle="tab">Passing Distribution</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab9" aria-controls="tab9" role="tab" data-toggle="tab">Voltar</a></li>
                </ul>
            </div>
            <div class="col-sm-10">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        
                        <?php include 'start.php'; ?> 
                        <div class='col-sm-12' style="height: 40px;">    
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <?php include 'matchreport.php'; ?> 
                        <div class='col-sm-12' style="height: 40px;">    
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                        <?php include 'matchstatistics.php'; ?> 
                        <div class='col-sm-12' style="height: 40px;">    
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab4">
                        <?php include 'taticallineup.php'; ?> 
                        <div class='col-sm-12' style="height: 40px;">    
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab5">
                        <?php include 'actualformation.php'; ?> 
                        <div class='col-sm-12' style="height: 40px;">    
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab6">
                        <?php include 'teamtracking.php'; ?> 
                        <div class='col-sm-12' style="height: 40px;">    
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab7">
                        <?php include 'playerstatistics.php'; ?> 
                        <div class='col-sm-12' style="height: 40px;">    
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab8">
                        <?php include 'passingdistribution.php'; ?> 
                        <div class='col-sm-12' style="height: 40px;">    
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab9">
                        <p align="center">
                            <font size='4'> Você tem certeza que deseja voltar à edição?</font> <br><br>
                            <a <?php echo 'href="../inicio/edicao.php?edicao='.$edicao.'"';?> class="btn btn-primary">Sim</a>
                        </p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
