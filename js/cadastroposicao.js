var iTime1 = 11;

function addCampoTime1() {
    iTime1++;
    var campo_num = '<div class="col-sm-12"> <div id = numero class="form-group col-sm-2"> <input type="text" class="form-control" id="time1_numero" name="time1_numero'+iTime1+'"> </div>';
    var campo_x = '<div id = numero class="form-group col-sm-2"> <input type="text" class="form-control" id="time1_x" name="time1_x'+iTime1+'"> </div>';
    var campo_y = '<div id = numero class="form-group col-sm-2"> <input type="text" class="form-control" id="time1_y" name="time1_y'+iTime1+'"> </div></div>';

    document.getElementById('camposPosicaoTime1').innerHTML += campo_num;    
    document.getElementById('camposPosicaoTime1').innerHTML += campo_x;       
    document.getElementById('camposPosicaoTime1').innerHTML += campo_y;      
}

