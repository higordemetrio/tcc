var i = 1;

function addCampo() {
    i++;
    var campoTime1 = " <div class='col-sm-12'> <div class='col-sm-3' style='text-align: center;'> <input type='text' class='form-control' name='time1report"+i+"'> </div>";
    var campoSubs1 = '<div class="col-sm-2" style="text-align: center;"> <select class="form-control" name="time1tipo'+i+'"> <option>Goal Scored</option> <option>Own Goal</option><option>Penalty Scored</option><option>Penalty Missed</option><option>Yellow Card</option><option>2Y = R</option><option>Red Card</option><option>Substitution</option></select></div>';
    var campoMin = '<div class="col-sm-2" style="text-align: center;"><input type="text" class="form-control"  name="minreport'+i+'"></div>';
    var campoSubs2 = '<div class="col-sm-2" style="text-align: center;"> <select class="form-control" name="time2tipo'+i+'"> <option>Goal Scored</option> <option>Own Goal</option><option>Penalty Scored</option><option>Penalty Missed</option><option>Yellow Card</option><option>2Y = R</option><option>Red Card</option><option>Substitution</option></select></div>';
    var campoTime2 = " <div class='col-sm-3' style='text-align: center;'> <input type='text' class='form-control' name='time2report"+i+"'> </div></div>";
 
    var campo = campoTime1+campoSubs1+campoMin+campoSubs2+campoTime2;
    document.getElementById('campos').innerHTML += campo;    
}