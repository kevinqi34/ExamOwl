function calculate() {
  var q = parseInt(document.getElementById('Q11').value);
      v =parseInt( document.getElementById('V11').value);
      e = document.getElementById('curve1').checked;
      if (e) {
      total_score  = q + v;
      var score_array = [
        // 2015 curve
        470,
        470,
        470,
        480,
        490,
        500,
        500,
        510,
        520,
        530,
        540,
        550,
        560,
        560,
        570,
        580,
        580,
        590,
        600,
        610,
        610,
        620,
        630,
        640,
        640,
        650,
        660,
        670,
        670,
        680,
        690,
        690,
        700,
        710,
        720,
        720,
        730,
        740,
        750,
        750,
        760,
        770,
        780,
        780,
        800,
        800,
        800,
        800

      ];



      var percentile = 0;
      var predicted_score = score_array[total_score - 55];
      if (predicted_score <= 200 && predicted_score >= 0) {
        percentile = 0;
      } else if (predicted_score > 200 && predicted_score <= 300) {
        percentile = 2;
      } else if (predicted_score > 300 && predicted_score <= 350) {
        percentile = 3;
      } else if (predicted_score > 350 && predicted_score <= 400) {
        percentile = 6;
      } else if (predicted_score > 400 && predicted_score <= 450) {
        percentile = 11;
      } else if (predicted_score > 450 && predicted_score <= 500) {
        percentile = 19;
      } else if (predicted_score > 500 && predicted_score <= 550) {
        percentile = 30;
      } else if (predicted_score > 550 && predicted_score <= 600) {
        percentile = 43;
      } else if (predicted_score > 600 && predicted_score <= 650) {
        percentile = 59;
      } else if (predicted_score > 650 && predicted_score <= 700) {
        percentile = 76;
      } else if (predicted_score > 700 && predicted_score <= 750) {
        percentile = 89;
      } else if (predicted_score > 750 && predicted_score < 800) {
        percentile = 98;
      } else if (predicted_score == 800) {
        percentile = 99;
      } else {
        return false;
      }

      document.getElementById("score1").innerHTML = predicted_score;
      document.getElementById("score2").innerHTML = percentile + '%';


      }

}

$(document).ready(function () {
  calculate();
});
