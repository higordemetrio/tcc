var i = 1;

function addCampoTracking() {

    i++;
    var campo1 = '<div class="col-sm-12"> <div class="col-sm-1" style="text-align: center;"><input type="text" class="form-control" name="num'+i+'"></div>';
    var campo2 = '<div class="col-sm-2" style="text-align: center;"><input type="text" class="form-control" name="inposs'+i+'"></div>';
    var campo3 = '<div class="col-sm-2" style="text-align: center;"><input type="text" class="form-control" name="notinposs'+i+'"></div>';
    var campo4 = '<div class="col-sm-2" style="text-align: center;"><input type="text" class="form-control" name="opphalf'+i+'"></div>';
    var campo5 = '<div class="col-sm-2" style="text-align: center;"><input type="text" class="form-control" name="att3rd'+i+'"></div>';
    var campo6 = '<div class="col-sm-2" style="text-align: center;"><input type="text" class="form-control" name="penarea'+i+'"></div></div>';
 

    var campo = campo1+campo2+campo3+campo4+campo5+campo6;
    document.getElementById('campostracking').innerHTML += campo;    
}