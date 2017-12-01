var i1 = 11;
var i2 = 11;
/*
function addCampoTime1() {
    iTime1++;
    var campo_num = '<div class="col-sm-10"> <div id = numero class="form-group col-sm-3"> <input type="text" class="form-control" id="time1_numero" name="time1_numero'+iTime1+'"> </div>';
    var campo_x = '<div id = numero class="form-group col-sm-3"> <input type="text" class="form-control" id="time1_x" name="time1_x'+iTime1+'"> </div>';
    var campo_y = '<div id = numero class="form-group col-sm-3"> <input type="text" class="form-control" id="time1_y" name="time1_y'+iTime1+'"> </div>';
    var campo_dnptem = '<div id = nome class="form-group col-sm-3"> <input type="checkbox" class="form-control"  name="time1_dnptem'+iTime1+'"></div></div>';

    var posicao = campo_num+campo_x+campo_y+campo_dnptem;
    document.getElementById('camposPosicaoTime1').innerHTML += posicao;    
}

var iTime2 = 11;

function addCampoTime2() {
    iTime2++;
    var campo_num = '<div class="col-sm-10" id=campoPosicaoTime1_'+i+'> <div id = numero class="form-group col-sm-3"> <input type="text" class="form-control" id="time2_numero" name="time2_numero'+iTime2+'"> </div>';
    var campo_x = '<div id = numero class="form-group col-sm-3"> <input type="text" class="form-control" id="time2_x" name="time2_x'+iTime2+'"> </div>';
    var campo_y = '<div id = numero class="form-group col-sm-3"> <input type="text" class="form-control" id="time2_y" name="time2_y'+iTime2+'"> </div>';
    var campo_dnptem = '<div id = nome class="form-group col-sm-3"> <input type="checkbox" class="form-control"  name="time2_dnptem'+iTime2+'"></div></div>';

    var posicao = campo_num+campo_x+campo_y+campo_dnptem;
    document.getElementById('camposPosicaoTime2').innerHTML += posicao;    
}*/

$(document).ready(function(){
    $("#addCampoTime1").click(function(){
        i1++;
        
        var campo_num = '<div class="col-sm-10" id="campoPosicaoTime1_'+i1+'"> <div id = numero class="form-group col-sm-3"> <input type="text" class="form-control" id="time1_numero" name="time1_numero'+i1+'"> </div>';
        var campo_x = '<div id = numero class="form-group col-sm-3"> <input type="text" class="form-control" id="time1_x" name="time1_x'+i1+'"> </div>';
        var campo_y = '<div id = numero class="form-group col-sm-3"> <input type="text" class="form-control" id="time1_y" name="time1_y'+i1+'"> </div>';
        var campo_dnptem = '<div id = nome class="form-group col-sm-3"> <input type="checkbox" class="form-control"  name="time1_dnptem'+i1+'"></div></div>';

        var posicao = campo_num+campo_x+campo_y+campo_dnptem;
       
        $("#camposPosicaoTime1").append(posicao);

    });

    $("#subCampoTime1").click(function(){
        $("#campoPosicaoTime1_"+i1).remove();
         i1--;
    });
});

$(document).ready(function(){
    $("#addCampoTime2").click(function(){
        i2++;
        
        var campo_num = '<div class="col-sm-10" id="campoPosicaoTime2_'+i2+'"> <div id = numero class="form-group col-sm-3"> <input type="text" class="form-control" id="time1_numero" name="time1_numero'+i2+'"> </div>';
        var campo_x = '<div id = numero class="form-group col-sm-3"> <input type="text" class="form-control" id="time1_x" name="time1_x'+i2+'"> </div>';
        var campo_y = '<div id = numero class="form-group col-sm-3"> <input type="text" class="form-control" id="time1_y" name="time1_y'+i2+'"> </div>';
        var campo_dnptem = '<div id = nome class="form-group col-sm-3"> <input type="checkbox" class="form-control"  name="time1_dnptem'+i2+'"></div></div>';

        var posicao = campo_num+campo_x+campo_y+campo_dnptem;
       
        $("#camposPosicaoTime2").append(posicao);

    });

    $("#subCampoTime2").click(function(){
        $("#campoPosicaoTime2_"+i2).remove();
         i2--;
    });
});
