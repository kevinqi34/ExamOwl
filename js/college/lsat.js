function calculate() {
  var q = parseInt(document.getElementById('R1').value);
  var score_array = [
    120,
    120,
    120,
    120,
    120,
    120,
    120,
    120,
    120,
    120,
    120,
    120,
    120,
    120,
    120,
    120,

    121,
    122,
    123,
    124,
    125,
    126,
    127,
    128,
    129,
    129,

    130,
    131,
    132,
    132,

    133,
    134,
    135,
    135,
    136,
    137,
    137,

    138,
    139,
    139,
    140,
    140,

    141,
    142,
    142,
    143,
    143,
    144,
    145,
    145,
    146,
    146,

    147,
    148,
    148,
    149,
    149,
    150,

    151,
    151,
    152,
    152,
    153,
    153,
    154,
    155,
    155,
    156,
    156,
    157,

    158,
    158,
    159,
    159,
    160,
    160,
    161,
    162,
    162,

    163,
    164,
    164,
    165,
    165,
    166,
    167,

    168,
    168,
    169,
    170,
    171,
    172,
    173,
    174,
    175,
    176,
    177,
    178,
    179,
    180,
    180,
    180
  ];


  var scaled = score_array[q];
  document.getElementById("score1").innerHTML = q;
  document.getElementById("score2").innerHTML = scaled + '/180';
  choosecolors();



}


$(document).ready(function () {
  calculate();
});
