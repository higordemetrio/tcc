var i = 1;

function addCampo() {
    i++;
    var campo_cidade = '<input type="text" class="form-control" id="cidades" name="cidade'+i+'">';
    var campo_estadio = '<input type="text" class="form-control" id="estadios" name="estadio'+i+'">';

    document.getElementById('cidades').innerHTML += campo_cidade;    
    document.getElementById('estadios').innerHTML += campo_estadio;    
}
