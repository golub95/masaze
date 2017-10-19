<?php

	require_once("session.php");
	
	require_once("class.user.php");
	$auth_user = new USER();
	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
    <title>Stranica za masažu tijela</title>
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	
	
  
  </head>
  <body>
  
<!-- NAVBAR
================================================== -->
  

    <nav class="navbar-inverse navbar-fixed-top">
  <div class="container"> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="logo"><img class="img-responsive" src="slike/logo.png" alt="logo" width="120px" height="<1></1>"></div>
    </div>
     <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myNavbar">
      <li><a id="pocetak" href="#pocetna">POČETNA</a></li>
      <li><a id="cijena" href="#cjena">CJENIK</a></li>
      <li><a id="mapa" href="#lokacija">KONTAKT</a></li>
	  <li><a  onclick="location.href='logout.php?logout=true'">ODJAVA</a></li>
      
	 
    </ul>
    
  </div>
  
</nav>


   
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      
    
      <div class="carousel-inner" role="listbox"id="pocetna">
        <div class="item active">
          <img class="first-slide" src="slike/homepic.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              
              <h3>Bok, moje ime je Anamarija Golubović Matić i već od 2007 godine pružam usluge masaža, izrade prirodnih pripravaka, izvodim procese aromaterapije i održavam radionice sa temama iz istih područja.</h3> 
							
              <p><a class="btn btn-lg btn-primary" href="#marketing" role="button">Pogledaj masaže</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="slike/home3.png" alt="Second slide">    
          <div class="container">
            <div class="carousel-caption">
              <div class="ajax">
              <h3>Ova stranica je nastala kako bih svim svojim klijentima i onima koji me ne znaju pružila lakši način da dođu u kontak sa mnom, te da saznaju više o svim uslugama koje ja pružam.</h3>
              <h1><a class="btn btn-lg btn-primary hidden-xs" onclick="AjaxTest();this.style.visibility= 'hidden';" role="button" data-clipboard-text="Više o meni" data-toggle="tooltip" data-placement="bottom" >Više</a></h1>
            </div>
			</div>
          </div>
        </div>
		
		<script>
		function AjaxTest() {
		var xhttp;
		if (window.XMLHttpRequest) {
		xhttp = new XMLHttpRequest();
		} else {
		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		document.getElementsByClassName("ajax")[0].innerHTML = this.responseText;
		}
		};
		xhttp.open("GET", "ajax_info.html", true);
		xhttp.send();
		}
		</script>
		
        <div class="item">
          <img class="third-slide" src="slike/homepic1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              
              <h3>Sigurna sam da će mnogi od vas ovdje pronaći temu koja vam je zanimljiva i uslugu koja vam je potrebna i koju ste dugo tražili. Vidimo se uskoro.</h3>
              <p><a class="btn btn-lg btn-primary" href="#lokacija" role="button">Javi se za masažu</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
	  </a>
		
    </div>
		
	
	
	
    <div class="container marketing" id="marketing">

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Klasična masaža<span class="text-muted"></span></h2>
          <p class="lead">Klasična masaža otklanja napetosti u uzrokovane dugotrajnim sjedenjem, učestalim ponavljanjem nekog pokreta, lošim jastukom ili neudobnim krevetom ili stolicom posebno u području vrata i ramenog pojasa, te gornjeg dijela leđa i ponekad u listovima. Tokom ove masaže razbijaju se i nakupine mliječne kiseline u mišićima (takozvane miogeloze). Ove se nakupine mogu javiti bilo gdje na tijelu, a najčešće se javljaju u području lopatice. Pokreće se krvotok i optok limfe. Ovisno o jačini pritiska može biti energizirajuća ili opuštajuća..</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block img-rounded" src="slike/klasicna.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Opuštajuća masaža <span class="text-muted"></span></h2>
          <p class="lead">Opuštajuća masaža je masaža cijelog tijela uključujući stopala i trbuh. Pokreti koji se primjenjuju su spori i duboki. Ova masaža opušta sve mišiće, a pogotovo one iz donjih slojeva za koje ni ne znamo da ih imamo. Pokreti se izvode čitavim dlanom, prema srcu. Rezultat je potpuno smirenje zivčanog sustava koje rezultira smirenjem našeg uskovitlanog uma i emocija. Najbolje ju je provoditi u potpunoj tišini ili uz laganu glazbu.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block img-rounded" src="slike/opustajuca.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Sportska masaža <span class="text-muted">.</span></h2>
          <p class="lead">Sportska masaža uključuje masažu velikih skupina mišića tj. nogu i leđa. Primjenjuju se energični pokreti gnječenja mišića i lupkanja čiji je smisao poduzanje tonusa mišića. Ova masaža priprema tijelo za sportsku aktivnost. Ukoliko joj je prethodila sportska aktivnost ova masaža će pomoći otklanjanju napetosti ili grčeva u mišićima ili ukočenosti zglobova.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block img-rounded" src="slike/massage.jpg" alt="Generic placeholder image">
        </div>
      </div>
	  
	  <hr class="featurette-divider">
	   
   <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Medicinska masaža <span class="text-muted"></span></h2>
          <p class="lead">Medicinska masaža uključuje masažu cijelog tijela. Posebna pažnja se posvećuje specifičnim stanjima koštano mišićnog sustava sa ciljem smanjenja bolova, povećavanja pokretljivosti zglobova i prokrvljenosti područja koja su ukočena ili bolna.</p>
		  </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="slike/medicinska.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider"id="cjena">
	  
	  </div>
	  
	  
	  
	  
	  <div id="cjenik"class="container">
	  
		<h1> CJENIK <h1>
	  
		<table class="table table-striped">
			<tr>
			<th> Masaže </th>
			<th> Cijena </th>
			</tr>
		 
		<tr>
			<td>Klasična masaža </td>
			<td>60kn</td>
		 </tr>
		<tr>
			<td>Opuštajuća masaža</td>
			<td>70kn</td>
		 </tr>
		 <tr>
			<td>Sportska masaža</td>
			<td>75kn</td>
		 </tr>
		 <tr>
			<td>Medicinska masaža</td>
			<td>90kn</td>
		 </tr>
		 </table>
		 
		 </div>
		
		
	 	<div>
		<hr class="featurette-divider">
		</div>
			
		<div id="lokacija" class="container">
		<h1> Lokacija <h1>
	
		<script>
			function myMap() {
			var mapCanvas = document.getElementById("map");
			var mapOptions = {
			center: new google.maps.LatLng(51.5, -0.2),
			zoom: 10
			}
			var map = new google.maps.Map(mapCanvas, mapOptions);
			}	
		</script>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2817.2419788540174!2d18.701353904478392!3d45.0808859585467!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475c68e24ca2c90f%3A0xc32f605f68d8b870!2sUl.+Viktora+Sedeli%2C+32270%2C+%C5%BDupanja%2C+Croatia!5e0!3m2!1sen!2shr!4v1478700563105" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
			
		</div>
			
			

     


      <!-- FOOTER -->
	  
	  <footer>
	  <div class="container" id="footer">
	  
      <div class="col-md-4">
	  <h2> Adresa </h1>
	  <address>
		<strong>Županja</strong><br>
			Ulica Viktora Sedeli<br>
			32270<br>
		<abbr title="Phone">broj telefona:</abbr> (123) 456-7890
	  </address>
	</div>
		<div class="col-md-4">
		<h2> Radno vrijeme </h2>
		<address>
		<strong>
				Radnim danima od 14-21h
				<br>Subotom od 10-16h</br>
				Ostalo po dogovoru</strong><br>
		</address>
		</div>
		<div class="col-md-4">
			<h2> Kontaktirajte me </h2>
			<h4> Mobitel: <strong>099/411 5916 </strong></h4>
			<p><strong>e-mail: </strong><a href="mailto:#">luz.zu@gmail.com</a></p>
			<a class="pull-right" href="#pocetna"> Na vrh  </a>
			<p>&copy; 2016 golub793</p>
		
		</div>
      
	  </div>
	  
	</footer>
	
	<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

 
		
       </body>
</html>


	
