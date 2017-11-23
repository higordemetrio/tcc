
function addTableTime1() {
    document.getElementById('disc').innerHTML += "<label>#</label>";


    var qnt = document.getElementById('campo');

    if(qnt.value > 10){
        var tudo = "";
        var j = 1;
        var i = 1;
        for (i = 1; i <= qnt.value; i++) {
            var t1 = "<table><tr><th><input type='text' class='form-control' name='time1_numero"+i+"'> </th>";
            tudo += t1;
            for (j = 1; j <= qnt.value; j++) {

                var t2 = "<td><input type='text' class='form-control' name='time1_pass"+i+"_"+j+"'> </td>";
                tudo += t2;
            }
            var t3 = "</tr></table>";
            tudo += t3;
        }

        document.getElementById('tableTimePass1').innerHTML += tudo;
    
        addTableTime2();

    }
 
}


function addTableTime2() {
    var qnt = document.getElementById('campo');

    if(qnt.value > 10){
        var tudo = "";
        var j = 1;
        var i = 1;
        for (i = 1; i <= qnt.value; i++) {
            var t1 = "<table><tr><td><input type='text' class='form-control' name='time1_pass"+i+"_"+j+"'> </td>";
            tudo += t1;
            for (j = 1; j <= 5; j++) {
                var t2 = "<td><input type='text' class='form-control' name='time1_pass"+i+"_"+j+"'> </td>";
                tudo += t2;
            }
            var t3 = "</tr></table>";
            tudo += t3;
        }

        document.getElementById('tableTimePass2').innerHTML += tudo;
    }
 
}


