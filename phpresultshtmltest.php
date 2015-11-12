<!DOCTYPE HTML>
<!--
  Alpha by HTML5 UP
  html5up.net | @n33co
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->





<html>
  <head>
    <title>Startup LaunchLab</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="resultsfrontendtests.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67040222-1', 'auto');
  ga('send', 'pageview');

</script>

 <script>
  window.console = window.console || function(t) {};
</script>


        <!--progress knob-->

        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      .knob-scroll {
  position: fixed;
  right: 45px;
  bottom: -23px;
  width: 100px;
  height: 100px;
}

/* Hide input to avoid FOUC */
/* Will be shown when JS runs */
.knob-scroll input {
  display: none;
}

    </style>

    
        <script src="js/prefixfree.min.js"></script>


  </head>

<?php

{
$stage = $_REQUEST['stage'];

if ($_REQUEST['stage'] == "1") {
  $stage = "('Mentor/Education', 'Community/Coworking Space')";
}
elseif ($_REQUEST['stage'] == "2") {
  $stage = "('Mentor/Education', 'Community/Coworking Space', 'Incubator/Accelerator', 'Angel/Seed', 'Reward Crowdfunding')";
}
elseif ($_REQUEST['stage'] == "3") {
  $stage = "('Community/Coworking Space','Angel/Seed','Incubator/Accelerator','Reward Crowdfunding','Equity Crowdfunding','Debt','Grant','VC')";
}
elseif ($_REQUEST['stage'] == "4") {
  $stage = "('Angel/Seed','VC','Incubator/Accelerator','Community/Coworking Space')";
}
elseif ($_REQUEST['stage'] == "5") {
  $stage = "('VC','Equity Crowdfunding')";
}
elseif ($_REQUEST['stage'] == "6") {
  $stage = "('Debt','VC')";
}

$ftes = $_REQUEST['ftes'];
$bizmodel = $_REQUEST['bizmodel'];
$officespace = $_REQUEST['officespace'];
$investment = $_REQUEST['investment'];


/*
Stage -> type mapping reference
'Community/Coworking Space',
'Angel/Seed',
'Incubator/Accelerator',
'Mentor/Education',
'Reward Crowdfunding',
'Equity Crowdfunding',
'Debt',
'Grant',
'VC',
*/



$bizmodel = $_REQUEST['bizmodel'];
$industry = $_REQUEST['industry'];
$region = $_REQUEST['region'];
$country = $_REQUEST['country'];
$city = $_REQUEST['city'];
$profit = $_REQUEST['nonprofit'];

$runway = $_REQUEST['funding'];
$runway = $_REQUEST['runway'];
$foundersex = $_REQUEST['foundersex'];
$founderrace = $_REQUEST['founderage'];
$founderage = $_REQUEST['founderrace'];

}


{   //Connect and Test MySQL and specific DB (return $dbSuccess = T/F)
        
      include "connect.php";



      $dbConnected = @mysql_connect($hostname, $username, $password);
      $dbSelected = @mysql_select_db($databaseName,$dbConnected);

      $dbSuccess = true;
      if ($dbConnected) {
        if (!$dbSelected) {
          echo "DB connection FAILED<br /><br />";
          $dbSuccess = false;
        }   
      } else {
        echo "MySQL connection FAILED<br /><br />";
        $dbSuccess = false;
      }
}  
?>

  <body class="landing">
    <div id="page-wrapper">

      <!-- Header -->
        <header id="header" class="alt">
          <h1 id="startup">Launch<a href="https://startit.today"></a></h1><h1 id="launchlab">Lab</h1>
          <nav id="nav">
            <ul>
              <li>
                <a href="#" class="icon fa-angle-down">More</a>
                <ul>
                  <li><a href="generic.html">About</a></li>
                  <li><a href="contact.html">Blog</a></li>
                  <li><a href="contact.html">Other Resources</a></li>
                  <li><a href="elements.html">Add your Organization</a></li>
                  <li><a href="generic.html">Github</a></li>
                  <li><a href="contact.html">Contact</a></li>
                              
                  <!--<li>
                    <a href="#">Submenu</a>
                    <ul>
                      <li><a href="#">Option One</a></li>
                      <li><a href="#">Option Two</a></li>
                      <li><a href="#">Option Three</a></li>
                      <li><a href="#">Option Four</a></li>
                    </ul>
                  </li>-->
                </ul>
              </li>
              <!--<li><a href="http://www.startit.today/about" class="button">More</a></li>-->
            </ul>
          </nav>
        </header>

      <!-- Banner -->
        <section id="banner">
          <h2>Results:</h2>
          <p> Below is a list of the most appropriate resources for your startup, algorithmically ranked by their fit <br /> for your specific traits.  The most effective way to use this list would be to scour LinkedIn/Facebook/Twitter <br /> for any connections to people who work at one of the organizations below and <br />ask your mutual contact for an introduction.  Best of luck, don't take no for an answer!</p>
          


        </section>





      <!-- Main -->






      <h4 id="scroll">&nbsp;scroll</h4>
<svg id="scroll-button" enable-background="new 0 0 141.73 141.73"  id="Warstwa_1" version="1.1" viewBox="0 0 141.73 141.73"  xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M101.628,40.092c-8.22-8.22-19.149-12.746-30.774-12.746c-11.624,0-22.553,4.526-30.772,12.746   c-16.968,16.969-16.967,44.578,0.001,61.546c8.22,8.22,19.149,12.747,30.773,12.747s22.553-4.526,30.772-12.746   s12.747-19.148,12.747-30.773S109.848,48.312,101.628,40.092z M100.214,100.225c-7.842,7.842-18.269,12.16-29.358,12.16   s-21.517-4.319-29.359-12.161c-16.188-16.188-16.188-42.529-0.001-58.718c7.842-7.842,18.269-12.16,29.358-12.16   c11.091,0,21.518,4.318,29.36,12.16c7.842,7.843,12.161,18.269,12.161,29.359S108.056,92.382,100.214,100.225z"/><path d="M65.893,55.983c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l13.466,13.466L64.478,84.331   c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293L80.065,71.57   c0.391-0.391,0.391-1.023,0-1.414L65.893,55.983z"/></g>
</svg>

<div class="knob-scroll" >
  <input value="0">
</div>

        <section id="main" class="container">

          <section class="box special">



<div>
<?
if ($dbSuccess) {
  
      $crunchiot_SQLselect = "SELECT ";
      $crunchiot_SQLselect .="numMatches, ";
      $crunchiot_SQLselect .="id, ";
      $crunchiot_SQLselect .="name, ";
      $crunchiot_SQLselect .="url, ";
      $crunchiot_SQLselect .="type, ";
      $crunchiot_SQLselect .="investment, ";
      $crunchiot_SQLselect .="equity, ";
      $crunchiot_SQLselect .="equitymin, ";
      $crunchiot_SQLselect .="equitymax, ";
      $crunchiot_SQLselect .="cashmin, ";
      $crunchiot_SQLselect .="cashmax, ";
      $crunchiot_SQLselect .="officespace, ";
      $crunchiot_SQLselect .="women, ";
      $crunchiot_SQLselect .="agecollege, ";
      $crunchiot_SQLselect .="race, ";
      $crunchiot_SQLselect .="nonprofit, ";
      $crunchiot_SQLselect .="length, ";
      $crunchiot_SQLselect .="description, ";
      $crunchiot_SQLselect .="type1, ";
      $crunchiot_SQLselect .="type2, ";
      $crunchiot_SQLselect .="type3, ";
      $crunchiot_SQLselect .="city1, ";
      $crunchiot_SQLselect .="city2, ";
      $crunchiot_SQLselect .="city3, ";
      $crunchiot_SQLselect .="city4, ";
      $crunchiot_SQLselect .="stateprov, ";
      $crunchiot_SQLselect .="country1, ";
      $crunchiot_SQLselect .="country2, ";
      $crunchiot_SQLselect .="country3, ";
      $crunchiot_SQLselect .="region1, ";
      $crunchiot_SQLselect .="region2, ";
      $crunchiot_SQLselect .="region3, ";
      $crunchiot_SQLselect .="industry1, ";
      $crunchiot_SQLselect .="industry2, ";
      $crunchiot_SQLselect .="industry3, ";
      $crunchiot_SQLselect .="industry4, ";
      $crunchiot_SQLselect .="industry5 ";
      $crunchiot_SQLselect .= "FROM( ";
      $crunchiot_SQLselect .= "SELECT( "; 
      $crunchiot_SQLselect .="CASE WHEN type1 IN $stage THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN type2 IN $stage THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN type3 IN $stage THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN city1 = '$city' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN city2 = '$city' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN city3 = '$city' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN city4 = '$city' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN country1 = '$country' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN country2 = '$country' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN country3 = '$country' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN region1 = '$region' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN region2 = '$region' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN region3 = '$region' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN industry1 = '$industry' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN industry2 = '$industry' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN industry3 = '$industry' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN industry4 = '$industry' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN industry5 = '$industry' THEN 1 ELSE 0 END + ";
      $crunchiot_SQLselect .="CASE WHEN officespace = '$officespace' THEN 1 ELSE 0 END +";
      $crunchiot_SQLselect .="CASE WHEN investment = '$investment' THEN 1 ELSE 0 END ";
      $crunchiot_SQLselect .= ") AS numMatches, "; 
      $crunchiot_SQLselect .="id AS id, ";
      $crunchiot_SQLselect .="name AS name, ";
      $crunchiot_SQLselect .="url AS url, ";
      $crunchiot_SQLselect .="type AS type, ";
      $crunchiot_SQLselect .="investment AS investment, ";
      $crunchiot_SQLselect .="equity AS equity, ";
      $crunchiot_SQLselect .="equitymin AS equitymin, ";
      $crunchiot_SQLselect .="equitymax AS equitymax, ";
      $crunchiot_SQLselect .="cashmin AS cashmin, ";
      $crunchiot_SQLselect .="cashmax AS cashmax, ";
      $crunchiot_SQLselect .="officespace AS officespace, ";
      $crunchiot_SQLselect .="women AS women, ";
      $crunchiot_SQLselect .="agecollege AS agecollege, ";
      $crunchiot_SQLselect .="race AS race, ";
      $crunchiot_SQLselect .="nonprofit AS nonprofit, ";
      $crunchiot_SQLselect .="length AS length, ";
      $crunchiot_SQLselect .="description AS description, ";
      $crunchiot_SQLselect .="type1 AS type1, ";
      $crunchiot_SQLselect .="type2 AS type2, ";
      $crunchiot_SQLselect .="type3 AS type3, ";
      $crunchiot_SQLselect .="city1 AS city1, ";
      $crunchiot_SQLselect .="city2 AS city2, ";
      $crunchiot_SQLselect .="city3 AS city3, ";
      $crunchiot_SQLselect .="city4 AS city4, ";
      $crunchiot_SQLselect .="stateprov AS stateprov, ";
      $crunchiot_SQLselect .="country1 AS country1, ";
      $crunchiot_SQLselect .="country2 AS country2, ";
      $crunchiot_SQLselect .="country3 AS country3, ";
      $crunchiot_SQLselect .="region1 AS region1, ";
      $crunchiot_SQLselect .="region2 AS region2, ";
      $crunchiot_SQLselect .="region3 AS region3, ";
      $crunchiot_SQLselect .="industry1 AS industry1, ";
      $crunchiot_SQLselect .="industry2 AS industry2, ";
      $crunchiot_SQLselect .="industry3 AS industry3, ";
      $crunchiot_SQLselect .="industry4 AS industry4, ";
      $crunchiot_SQLselect .="industry5 AS industry5 ";
      $crunchiot_SQLselect .= "FROM "; 
      $crunchiot_SQLselect .= "launchlab3) ";  
      $crunchiot_SQLselect .= "AS matchRankings "; 
      $crunchiot_SQLselect .= "WHERE ";
      $crunchiot_SQLselect .= "numMatches >0 ";
      $crunchiot_SQLselect .= "ORDER BY ";
      $crunchiot_SQLselect .= "numMatches ";
      $crunchiot_SQLselect .= "DESC ";
  
  $crunchiot_SQLselect_Query = mysql_query($crunchiot_SQLselect); 

$indx = 1; 
$allMatches = 10;
$percentage = 100;
$cashmultiple = 1000;
$yes = 'Yes';
$no = 'no';
  while($row = mysql_fetch_array($crunchiot_SQLselect_Query, MYSQL_ASSOC)) {
    $numMatchesEcho = $row['numMatches'];
    $idEcho = $row['id'];
    $nameEcho = $row['name'];
    $urlEcho = $row['url'];
    $typeEcho = $row['type'];
    
      if ($row['investment'] == "T") {
    $investmentEcho = "Yes";
      }
      elseif ($row['investment'] == "F") {
    $investmentEcho = "No";
      }

      if ($row['equity'] == "T") {
    $equityEcho = "Yes";
      }
      elseif ($row['equity'] == "F") {
    $equityEcho = "No";
      }  

      if ($row['officespace'] == "T") {
    $officespaceEcho = "Yes";
      }
      elseif ($row['officespace'] == "F") {
    $officespaceEcho = "No";
      }

     if ($row['race'] == "T") {
    $raceEcho = "Yes";
      }
      elseif ($row['race'] == "F") {
    $raceEcho = "No";
      }      

     if ($row['length'] == "0") {
    $lengthEcho = "1 year or more";
      }
      elseif ($row['length'] <> "0") {
    $lengthEcho = ($row['length']." weeks");
      }

    $equityminEcho = $row['equitymin'];
    $equitymaxEcho = $row['equitymax'];
    $cashminEcho = $row['cashmin'];
    $cashmaxEcho = $row['cashmax'];
    $womenEcho = $row['women'];
    $agecollegeEcho = $row['agecollege'];
    $nonprofitEcho = $row['nonprofit'];
    $descriptionEcho = $row['description'];
    $typeEcho = $row['type1'];
    $cityEcho = $row['city1'];
    $stateprovEcho = $row['stateprov'];
    $countryEcho = $row['country1'];
    $regionEcho = $row['region1'];
    $industry1Echo = $row['industry1'];

 if ($indx <10){

?>

<div class="row uniform 50%" id="result"> 
        <div class="1u 12u">
            <h3 class="rank"><? echo $indx;?></h3>
        </div>

        <div class="9u 6u">
            <h3><?

   
      echo $nameEcho; ?></h3>
        </div> 

        <div class="2u 12u">
            <h4 class="match">85% match</h4>
        </div>
</div>

    <div class="row uniform 50%">  
        <div class="2u 12u">
            <h4>URL</h4>
        </div>

        <div class="9u 12u">
            <p><a href="http://<?php echo $urlEcho; ?>"><?php echo $urlEcho; ?></a></p>
        </div>  
    </div>

    <div class="row uniform 50%">  
        <div class="2u 12u">
            <h4>Type</h4>
        </div>

        <div class="9u 12u">
            <p><?php echo $typeEcho; ?></p>
        </div>  
    </div>

    <div class="row uniform 50%">  
        <div class="2u 12u">
            <h4>Headquarters</h4>
        </div>

        <div class="9u 12u">
            <p><?php echo $cityEcho.", ".$countryEcho.", ".$regionEcho; ?></p>
        </div>  
    </div>   

    <div class="row uniform 50%">  
        <div class="2u 12u">
            <h4>Office Space</h4>
        </div>

        <div class="9u 12u">
            <p><?php echo $officespaceEcho; ?></p>
        </div>  
    </div>

    <div class="row uniform 50%">  
        <div class="2u 12u">
            <h4>Provides capital</h4>
        </div>

        <div class="9u 12u">
            <p><?php echo $investmentEcho; ?></p>
        </div>  
    </div>

    <div class="row uniform 50%">  
        <div class="2u 12u">
            <h4>Takes equity</h4>
        </div>

        <div class="9u 12u">
            <p><?php echo $equityEcho; ?></p>
        </div>  
    </div>

    <div class="row uniform 50%">  
        <div class="2u 12u">
            <h4>Investment range</h4>
        </div>

        <div class="9u 12u">
            <p><?php echo "$".$cashminEcho." - $".$cashmaxEcho; ?></p>
        </div>  
    </div>   

    <div class="row uniform 50%">  
        <div class="2u 12u">
            <h4>Equity range</h4>
        </div>

        <div class="9u 12u">
            <p><?php echo "%".$equityminEcho." - %".$equitymaxEcho; ?></p>
        </div>  
    </div>

    <div class="row uniform 50%">  
        <div class="2u 12u">
            <h4>Length</h4>
        </div>

        <div class="9u 12u">
            <p><?php echo $lengthEcho; ?></p>
        </div>  
    </div>

    <div class="row uniform 50%">  
        <div class="2u 12u">
            <h4>Diversity Mandate</h4>
        </div>

        <div class="9u 12u">
            <p><?php echo $raceEcho; ?></p>
        </div>  
    </div> 

    <div class="row uniform 50%">  
        <div class="2u 12u">
            <h4>Description</h4>
        </div>

        <div class="9u 12u">
            <p><?php echo $descriptionEcho; ?>
            </p>
        </div>     
    </div> 

       
           <hr />

        

<?

      $indx++; }

      
 

  } 

    mysql_free_result($crunchiot_SQLselect_Query);  

}
 

{ //Echo and Execute the SQL and test for success   
    echo "<strong><u>SQL:<br /></u></strong>";
    echo $crunchiot_SQLselect."<br /><br />";
      
    if (mysql_query($crunchiot_SQLselect))  {        
      echo "was SUCCESSFUL.<br /><br />";
    } else {
      echo "FAILED.<br /><br />";   
    }

  }

?>



</div>
 

            
</section>

   </div> 






<script type="text/javascript">

    $(window).scroll(function () {
  var height = $("body").height();
  var scrollTop = $("body").scrollTop();
  var opacity = 1;

  if(scrollTop < 100)
    {opacity = 1-Math.floor(scrollTop)/100;}
    else
    {opacity = 0.0;}

  $("#scroll-button").css("opacity", opacity);
  $("#scroll-button").hover(function(){
    $(this).css("opacity", 1);
    },function(){
    $(this).css("opacity", 0.0);
    });
});


</script>

<script type="text/javascript">

    $(window).scroll(function () {
  var height = $("body").height();
  var scrollTop = $("body").scrollTop();
  var opacity = 1;

  if(scrollTop < 100)
    {opacity = 1-Math.floor(scrollTop)/100;}
    else
    {opacity = 0.0;}

  $("#scroll").css("opacity", opacity);
  $("#scroll").hover(function(){
    $(this).css("opacity", 1);
    },function(){
    $(this).css("opacity", 0.0);
    });
});


</script>


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.rawgit.com/aterrien/jQuery-Knob/master/js/jquery.knob.js'></script>

        <script>
;(function( $, $w, $d ) {

  var $ks = $('.knob-scroll input'),
        h = function( e ) { return e.height() };

  $w.on('load scroll', function(){
    var d = h( $d ),
        w = h( $w ),
        s = Math.round( $w.scrollTop() / ( d - w ) * 100 );
    $ks.val( s ).trigger('change');
  });

  function knobToScroll( val ) {
    var d = h( $d ), 
        w = h( $w );
    $w.scrollTop( val * ( d - w ) / 100 );
  }

  $ks.knob({
    'thickness' : '.1',
    'fgColor'   : 'rgba(50,50,50,1)',
    'bgColor'   : 'rgba(0,0,0,0)',
    'width'     : '44',
    release : function ( val ) {
      knobToScroll( val );
    }// Show input:
  }).find('input').hide();

})( jQuery, jQuery( window ), jQuery( document ) );


        </script>

            <!-- Top Menu Dropdown Scripts -->
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery.dropotron.min.js"></script>
      <script src="js/jquery.scrollgress.min.js"></script>
      <script src="js/skel.min.js"></script>
      <script src="js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="js/main.js"></script>


  </body>
</html>