<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- https://bootsnipp.com/snippets/3kerp -->
    <!-- CSS e JS do layout -->
    <script src="bootstrap/layout/jquery/jquery-1.11.1.min.js"></script>
    <link href="bootstrap/layout/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/layout/js/bootstrap.min.js"></script>
<head>
    <title>FIFA SCOUT</title>

</head>
<body>

<div class="container">
    <div class="row">
        <h1> (EDICAO)</h1>
        <div role="tabpanel">
            <div class="col-sm-2">
                <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                    <li role="presentation" class="brand-nav active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Sobre</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Cadastrar uma Seleção</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Cadastrar uma Partida</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Como funciona</a></li>
                </ul>
            </div>
            <div class="col-sm-10">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt feugiat lorem, at ornare tellus faucibus ut.
                            Curabitur eget metus dapibus nibh laoreet lacinia eget id metus. Mauris quis convallis elit, ac convallis augue. 
                            Pellentesque ornare cursus nibh quis fermentum. Morbi faucibus at tortor sed volutpat. Etiam at ex molestie turpis aliquam auctor.
                            Nulla consequat tristique augue, vel venenatis massa fringilla sit amet. Morbi egestas turpis facilisis sem faucibus finibus.
                        </p>
                        <p>
                            Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem eleifend, vel eleifend massa rhoncus. 
                            Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur semper odio ut malesuada dapibus.
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <?php include 'cadastroselecao.php'; ?> 
                       
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                        <p>
                            Lorem ipsizzle dolor away amizzle, consectetuer pizzle elizzle. Nullizzle yo velizzle, check it out volutpizzle, quis, gravida vel, yo.
                            Ma nizzle eget tortor. Sizzle eros. My shizz izzle dolizzle gizzle turpis tempizzle fo shizzle mah nizzle fo rizzle, mah home g-dizzle.
                            Maurizzle pellentesque nibh izzle own yo'. Check it out in tortor. Pellentesque fizzle rhoncizzle nisi. 
                        </p>
                        <p>
                            In hac habitasse platea dictumst. Shizzlin dizzle dapibus. You son of a bizzle tellizzle urna, pretizzle fo shizzle mah nizzle fo rizzle, mah home g-dizzle,
                            ghetto ac, check it out vitae, nunc. Shizzlin dizzle suscipizzle. Integizzle sempizzle velit sizzle dizzle.
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab4">
                        <p>
                            Collaboratively administrate empowered markets via plug-and-play networks. 
                            Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without 
                            revolutionary ROI.
                        </p>
                        <p>
                            Efficiently unleash cross-media information without cross-media value. 
                            Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar 
                            solutions without functional solutions.
                        </p>
                        <p>
                            Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate 
                            one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service 
                            for state of the art customer service.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
