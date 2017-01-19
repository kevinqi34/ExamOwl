<?php
  include('./template/models/tool.php');


  $menu = new tool_menu();
  $menu->pushtoArray("AP|GPA|IB|ACT|SAT|COLLEGE", "ids");
  $menu->pushtoArray("AP Score Calculators|GPA/Final Exam Tools|IB Score Calculators|ACT/SAT Score Calculators|SAT Subject Tests Calculators|College Tests Calculators", "items");
  $menu->pushtoArray("AP.jpg|GPA.jpg|IB.jpg|test.png|sats.png|college.png", "urlList");

?>

<div class="menu" id="menu1" >
  <h2>Please Select a Tool Category</h2>
  <?php $menu->createMenu($menu->ids, $menu->urlList, $menu->items, $menu->url); ?>
</div>



<?php


  $APcat = new tool_menu();
  $APcat->pushtoArray("Science|Math|History|Government|Language|Music", "ids");
  $APcat->pushtoArray("Science|Mathematics|History|Government|Language|Music", "items");
  $APcat->pushtoArray("Science.png|Math.png|History.png|Government.jpg|Language.png|Music.png", "urlList");
  $APcat->createSubMenu("APcat", "menu1");


  $IBcat = new tool_menu();
  $TOK = new tool_menu();
  $TOK->pushtoArray("TOK","ids");
  $TOK->pushtoArray("TOK and Extended Essay", "items");
  $TOK->pushtoArray("essay.png","urlList");
  $TOK->pushtoArray("./tools/ibtests/tokextendedessay.php","url");
  $IBcat->pushtoArray("World|Lang|Individual|Sciences|Math2", "ids");
  $IBcat->pushtoArray("Group 1 - World Languages|Group 2 - Languages and Literature|Group 3 - Individuals and Society|Group 4 - Sciences| Group 5 - Mathematics", "items");
  $IBcat->pushtoArray("Globe.png|Language.png|Government.jpg|Science.png|Math.png", "urlList");

?>
  <div class="menu" id="IBcat" style="display:none">
  <img src='./images/menu/return.png' alt='return' class='return' onclick='back("#IBcat", "#menu1");'>
  <h2>Please Select Option</h2>

<?php
  $TOK->createMenu($TOK->ids, $TOK->urlList, $TOK->items, $TOK->url);
  $IBcat->createMenu($IBcat->ids, $IBcat->urlList, $IBcat->items, $IBcat->url);
?>

  </div>


<?php

  $COLLEGEcat = new tool_menu();
  $COLLEGEcat->pushtoArray("MCAT|GMAT|LSAT", "ids");
  $COLLEGEcat->pushtoArray("MCAT|GMAT|LSAT","items");
  $COLLEGEcat->pushtoArray("MCAT.jpg|GMAT.jpg|LSAT.jpg", "urlList");
  $COLLEGEcat->pushtoArray("./tools/college/mcat.php|./tools/college/gmat.php|./tools/college/lsat.php","url");
  $COLLEGEcat->createSubMenu("COLLEGEcat","menu1");

  $ACTcat = new tool_menu();
  $ACTcat->pushtoArray("ACT2|SAT2|PSAT", "ids");
  $ACTcat->pushtoArray("ACT|SAT|PSAT", "items");
  $ACTcat->pushtoArray("ACT.jpg|SAT.png|PSAT.jpg", "urlList");
  $ACTcat->pushtoArray("./tools/othertests/act.php|./tools/othertests/sat.php|./tools/othertests/psat.php","url");
  $ACTcat->createSubMenu("ACTcat", "menu1");


  $SATScat = new tool_menu();
  $SATScat->pushtoArray("ScienceM|Histo|Langu", "ids");
  $SATScat->pushtoArray("Science and Math|History|Language", "items");
  $SATScat->pushtoArray("Science.png|History.png|Language.png", "urlList");
  $SATScat->createSubMenu("SATcat", "menu1");



  $GPAcat = new tool_menu();
  $GPAcat->pushtoArray("GPA|Final", "ids");
  $GPAcat->pushtoArray("GPA Calculator|Final Grade Calculator", "items");
  $GPAcat->pushtoArray("GPA.png|Final.png", "urlList");
  $GPAcat->pushtoArray("./tools/othertests/gpa.php|./tools/othertests/finalgrade.php","url");
  $GPAcat->createSubMenu("GPAcat", "menu1");


  $APScience = new tool_menu();
  $APScience->pushtoArray("Micro|Macro|EnvironmentSci|HuGeo|Psych|Biology|Chem|PhysicsB|Physics1|Physics2|PhysicsCMech|PhysicsCElec", "ids");
  $APScience->pushtoArray("Microeconomics|Macroeconomics|Environmental Science|Human Geography|Psychology|Biology|Chemistry|Physics B|Physics 1|Physics 2|Physics C Mechanics|Physics C Electricity", "items");
  $APScience->pushtoArray("Money.png|Money.png|Environment.png|Globe.png|Brain.png|DNA.jpg|Science.png|Physics.png|Physics.png|Physics.png|Mechanics.png|Electricity.png", "urlList");
  $APScience->pushtoArray("./tools/aptests/microeconomics.php|./tools/aptests/macroeconomics.php|./tools/aptests/environmentalscience.php|./tools/aptests/humangeography.php|./tools/aptests/psychology.php|./tools/aptests/biology.php|./tools/aptests/chemistry.php|./tools/aptests/physicsb.php|./tools/aptests/physics1.php|./tools/aptests/physics2.php|./tools/aptests/physicscmechanics.php|./tools/aptests/physicscelectricity.php","url");
  $APScience->createSubMenu("APScience", "APcat");


  $APMath = new tool_menu();
  $APMath->pushtoArray("Stat|CalcAB|CalcBC|CompSci","ids");
  $APMath->pushtoArray("Statistics|Calculus AB|Calculus BC|Computer Science","items");
  $APMath->pushtoArray("Stat.png|Calc.png|Calc.png|Computer.png","urlList");
  $APMath->pushtoArray("./tools/aptests/statistics.php|./tools/aptests/calculusab.php|./tools/aptests/calculusbc.php|./tools/aptests/computerscience.php","url");
  $APMath->createSubMenu("APMath", "APcat");



  $APHistory = new tool_menu();
  $APHistory->pushtoArray("Euro|ArtHis|USHis|WorldHis","ids");
  $APHistory->pushtoArray("European History|Art History|U.S. History|World History","items");
  $APHistory->pushtoArray("History.png|Art.jpg|USAHis.jpg|Globe.png","urlList");
  $APHistory->pushtoArray("./tools/aptests/europeanhistory.php|./tools/aptests/arthistory.php|./tools/aptests/ushistory.php|./tools/aptests/worldhistory.php","url");
  $APHistory->createSubMenu("APHistory", "APcat");

  $APGovernment = new tool_menu();
  $APGovernment->pushtoArray("USGov|CompGov","ids");
  $APGovernment->pushtoArray("U.S. Government|Comparative Government","items");
  $APGovernment->pushtoArray("USgov.jpg|Government.jpg","urlList");
  $APGovernment->pushtoArray("./tools/aptests/usgovernment.php|./tools/aptests/comparativegovernment.php","url");
  $APGovernment->createSubMenu("APGovernment", "APcat");



  $APLanguage = new tool_menu();
  $APLanguage->pushtoArray("EnglishLan|EnglishLit|FrenchLit|GermanLit|SpanishLan|SpanishLit|Latin:Vergil","ids");
  $APLanguage->pushtoArray("English Language|English Literature|French Language|German Language|Spanish Language|Spanish Literature|Latin: Vergil","items");
  $APLanguage->pushtoArray("English.png|English.png|French.gif|Germany.jpeg|Spain.jpeg|Spain.jpeg|Italy.png","urlList");
  $APLanguage->pushtoArray("./tools/aptests/englishlanguage.php|./tools/aptests/englishliterature.php|./tools/aptests/frenchlanguage.php|./tools/aptests/germanlanguage.php|./tools/aptests/spanishlanguage.php|./tools/aptests/spanishliterature.php|./tools/aptests/latinvergil.php","url");
  $APLanguage->createSubMenu("APLanguage", "APcat");


  $APMusic = new tool_menu();
  $APMusic->pushtoArray("Music","ids");
  $APMusic->pushtoArray("Music Theory","items");
  $APMusic->pushtoArray("Music.png","urlList");
  $APMusic->pushtoArray("./tools/aptests/musictheory.php","url");
  $APMusic->createSubMenu("APMusic", "APcat");



  $SATScienceM = new tool_menu();
  $SATScienceM->pushtoArray("SATMath1|SATMath2|SATBio|SATPhysics|SATChem","ids");
  $SATScienceM->pushtoArray("Math 1|Math 2|Biology|Physics|Chemistry","items");
  $SATScienceM->pushtoArray("Math.png|Math.png|DNA.jpg|Mechanics.png|Science.png","urlList");
  $SATScienceM->pushtoArray("./tools/satsubjecttests/SATmath1.php|./tools/satsubjecttests/SATmath2.php|./tools/satsubjecttests/SATbiology.php|./tools/satsubjecttests/SATphysics.php|./tools/satsubjecttests/SATchemistry.php","url");
  $SATScienceM->createSubMenu("SATScienceM", "SATcat");


  $SATHisto = new tool_menu();
  $SATHisto->pushtoArray("SATUS|SATWorld","ids");
  $SATHisto->pushtoArray("US History|World History","items");
  $SATHisto->pushtoArray("USAHis.jpg|Globe.png","urlList");
  $SATHisto->pushtoArray("./tools/satsubjecttests/SATushistory.php|./tools/satsubjecttests/SATworldhistory.php","url");
  $SATHisto->createSubMenu("SATHisto", "SATcat");

  $SATLangu = new tool_menu();
  $SATLangu->pushtoArray("SATLit|SATSpanish|SATFrench","ids");
  $SATLangu->pushtoArray("Literature|Spanish|French","items");
  $SATLangu->pushtoArray("Language.png|Spain.jpeg|French.gif","urlList");
  $SATLangu->pushtoArray("./tools/satsubjecttests/SATliterature.php|./tools/satsubjecttests/SATspanish.php|./tools/satsubjecttests/SATfrench.php","url");
  $SATLangu->createSubMenu("SATLangu", "SATcat");

  $IBWorld = new tool_menu();
  $IBWorld->pushtoArray("IBArab|IBEng|IBSpan","ids");
  $IBWorld->pushtoArray("Arabic A1 HL/SL|English A1 HL/SL|Spanish A1 HL/SL","items");
  $IBWorld->pushtoArray("Arabic.jpg|English.png|Spain.jpeg","urlList");
  $IBWorld->pushtoArray("./tools/ibtests/arabic.php|./tools/ibtests/englisha1.php|./tools/ibtests/spanisha1.php","url");
  $IBWorld->createSubMenu("IBWorld", "IBcat");



  $IBLang = new tool_menu();
  $IBLang->pushtoArray("IBEnglisha2","ids");
  $IBLang->pushtoArray("English A2 HL/SL","items");
  $IBLang->pushtoArray("English.png","urlList");
  $IBLang->pushtoArray("./tools/ibtests/englisha2.php","url");
  $IBLang->createSubMenu("IBLang", "IBcat");

  $IBIndividual = new tool_menu();
  $IBIndividual->pushtoArray("IBEcon|IBGeograp|IBHistor|IBPsych","ids");
  $IBIndividual->pushtoArray("Economics HL/SL|Geography HL/SL|History HL/SL|Psychology HL/SL","items");
  $IBIndividual->pushtoArray("Money.png|Globe.png|History.png|Brain.png","urlList");
  $IBIndividual->pushtoArray("./tools/ibtests/economics.php|./tools/ibtests/geography.php|./tools/ibtests/history.php|./tools/ibtests/psychology.php","url");
  $IBIndividual->createSubMenu("IBIndividual", "IBcat");


  $IBSciences = new tool_menu();
  $IBSciences->pushtoArray("IBBio|IBChem|IBPhysics","ids");
  $IBSciences->pushtoArray("Biology HL|Chemistry HL|Physics HL","items");
  $IBSciences->pushtoArray("DNA.jpg|Science.png|Mechanics.png","urlList");
  $IBSciences->pushtoArray("./tools/ibtests/biology.php|./tools/ibtests/chemistry.php|./tools/ibtests/physics.php","url");
  $IBSciences->createSubMenu("IBSciences", "IBcat");


  $IBMath2 = new tool_menu();
  $IBMath2->pushtoArray("IBComp|IBMath2","ids");
  $IBMath2->pushtoArray("Computer Science HL/SL|Mathematics HL/SL","items");
  $IBMath2->pushtoArray("Computer.png|Math.png","urlList");
  $IBMath2->pushtoArray("./tools/ibtests/computers.php|./tools/ibtests/mathematics.php","url");
  $IBMath2->createSubMenu("IBMath2", "IBcat");

?>
