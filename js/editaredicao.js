var iedit = 1;

$(document).ready(function(){
    $("#addCidadeEdit").click(function(){
        iedit++;
        

        var campo1 = '<div class="col-sm-12" id=campoCidadesEdit'+iedit+'>';
        var campo2 = '<div id = cidades class="form-group col-sm-3">';  
        var campo3 = ' <input type="text" class="form-control" id="cidades" name="cidade'+iedit+'"> </div>';
        var campo4 = '<div id = estadios class="form-group col-sm-3">';
        var campo5 = '<input type="text" class="form-control" id="estadios" name="estadio'+iedit+'"></div></div>';
     
        var campo = campo1+campo2+campo3+campo4+campo5;
       
        $("#camposCidadesEdit").append(campo);

    });

    $("#subCidadeEdit").click(function(){
        $("#campoCidadesEdit"+iedit).remove();
         iedit--;
    });
});