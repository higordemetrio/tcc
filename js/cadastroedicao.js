var i = 1;

/*function addCampo() {
    i++;
    var campo_cidade = '<input type="text" class="form-control" id="cidades" name="cidade'+i+'">';
    var campo_estadio = '<input type="text" class="form-control" id="estadios" name="estadio'+i+'">';

    document.getElementById('cidades').innerHTML += campo_cidade;    
    document.getElementById('estadios').innerHTML += campo_estadio;    
}



var i = 1;*/


$(document).ready(function(){
    $("#addCidade").click(function(){
        i++;
        

        var campo1 = '<div class="col-sm-12" id=campoCidades'+i+'>';
        var campo2 = '<div id = cidades class="form-group col-sm-3">';  
        var campo3 = ' <input type="text" class="form-control" id="cidades" name="cidade'+i+'"> </div>';
        var campo4 = '<div id = estadios class="form-group col-sm-3">';
        var campo5 = '<input type="text" class="form-control" id="estadios" name="estadio'+i+'"></div></div>';
     
        var campo = campo1+campo2+campo3+campo4+campo5;
       
        $("#camposCidades").append(campo);

    });

    $("#subCidade").click(function(){
        $("#campoCidades"+i).remove();
         i--;
    });
});