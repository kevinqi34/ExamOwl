function calculate() {
  var gpa = document.getElementById('GPA').value;
      sec1 = parseInt(document.getElementById('SEC1').value);
      sec2 = parseInt(document.getElementById('SEC2').value);
      sec3 = parseInt(document.getElementById('SEC3').value);
      sec4 = parseInt(document.getElementById('SEC4').value);

  var mcat_score = 31;
      avg_gpa = 3.67;
      admission_index = 100 * (mcat_score + avg_gpa*10)/85;
      c_admission_index = Math.round(100 * 100 * (((sec1 + sec2 + sec3 + sec4) - 472) * 0.8 + gpa * 10)/85)/100;
      chance = Math.round(100*(c_admission_index/admission_index) * 100) / 100;


  document.getElementById("score1").innerHTML = c_admission_index;
  document.getElementById("score2").innerHTML = chance + '%';

  choosecolors();

}



$(document).ready(function () {
  calculate();
});
