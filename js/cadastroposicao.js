var iTime1 = 11;

function addCampoTime1() {
    iTime1++;
    var campo_num = '<div class="col-sm-12"> <div id = numero class="form-group col-sm-2"> <input type="text" class="form-control" id="time1_numero" name="time1_numero'+iTime1+'"> </div>';
    var campo_x = '<div id = numero class="form-group col-sm-2"> <input type="text" class="form-control" id="time1_x" name="time1_x'+iTime1+'"> </div>';
    var campo_y = '<div id = numero class="form-group col-sm-2"> <input type="text" class="form-control" id="time1_y" name="time1_y'+iTime1+'"> </div></div>';

    var posicao = campo_num+campo_x+campo_y;
    document.getElementById('camposPosicaoTime1').innerHTML += posicao;    
}

var iTime2 = 11;

function addCampoTime2() {
    iTime2++;
    var campo_num = '<div class="col-sm-12"> <div id = numero class="form-group col-sm-2"> <input type="text" class="form-control" id="time2_numero" name="time2_numero'+iTime2+'"> </div>';
    var campo_x = '<div id = numero class="form-group col-sm-2"> <input type="text" class="form-control" id="time2_x" name="time2_x'+iTime2+'"> </div>';
    var campo_y = '<div id = numero class="form-group col-sm-2"> <input type="text" class="form-control" id="time2_y" name="time2_y'+iTime2+'"> </div></div>';

    var posicao = campo_num+campo_x+campo_y;
    document.getElementById('camposPosicaoTime2').innerHTML += posicao;    
}

