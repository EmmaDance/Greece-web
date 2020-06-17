<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Grecia antica</title>
<?php include("includes/header.html");?>
    
  <script>
  var posElementDragged =-1;
  $( function() {
	
    $( ".draggable" ).draggable({
	 drag: function(){
		posElementDragged = $(this).attr('data-droppableTarget');
	}  
	});
    $( ".droppable" ).droppable({
      drop: function( event, ui ) {
        console.log($(this));
          if($(this).index()==posElementDragged) {
			  $( this ).addClass( "ui-state-highlight" );}
		  else {$( this ).addClass( "ui-state-error" )}
      },
    });
  } );
  </script>

   <script>

	drag: function(){
		posElementDragged = $(this).eq();
		console.log(posElementDragged);
	}
	
	</script>
 
 
  </head>
<body>

	<?php include("includes/navigation.html");?>

	<div class="main container">
	<br>
	<h1 class="title">Evaluare</h1>


 

	<h3 class="ex-t">I. Competaţi spaţiile libere cu informaţia istorică corespunzătoare:</h3>
	<ol class='ex-1'>
		<li>Orașul-stat în care  a apărut democraţia este<br><input class='ex1'  type="text" name="username" size="80"></li>
		<li>Reformatorul care a introdus remunerația funcțiilor publice este<br><input   class='ex1'  type="text" name="username" size="80"></li>
		<li>Războiul pentru supremaţie în Grecia, dintre Sparta şi Atena, s-a numit<br> <input  class='ex1'   type="text" name="username" size="80"></li>
		<li>Sparta afost întemeiat, de dorieni, în regiunea<br> <input  class='ex1'   type="text" name="username" size="80"></li>
	</ol>
	<p>Termeni: Laconia, Atena, Clistene, Războiul Peloponesizc, Războaiele medice, Atica, Sparta, Dracon</p>
	
	<h3 class="ex-t">II.</h3>
	<blockquote><em>
       <p>Cei nouă arhonţi se recrutau (în timpul lui Solon) prin tragere la sorţi dintr-o listă de candidaţi pe care îi prezenta fiecare gintă…Mai înainte, Areopagul convoca şi numea pe câte un an cei pe care îi socotea apţi pentru diferite funcţii….Consiliul a fost alcătuit din patru sute de membri, câte o sută de fiecare gintă. Areopagul era însărcinat de acesta cu paza legilor. - Aristotel, Statul atenian</p>
    </em></blockquote>
	<ol>
		<li>Precizați pe baza sursei o instituție politică. </li>
		<li>Menţionaţi, pe baza surselor istorice, o atribuţie a uneia dintre instituţiile amintite</li>
		<li>Comparaţi, pe baza textului, modalitatea de alegere a diferitelor funcţii, în perioada anterioară lui Solon şi după introducerea reformelor lui Solon</li>
		<li>Prezentaţi activitatea unui alt reformator care a contribuit la implementarea democraţiei în Atena.</li>
	</ol>
	<h3 class="ex-t">III. Ordonaţi cronologic:</h3> 
	 <div class="row col-md-12 drag">
	<div  data-droppableTarget='2' class="ui-widget-content draggable">
		<p>a.Razboaiele medice</p>
	</div>
	
	<div data-droppableTarget='4'  class="ui-widget-content draggable">
		<p>b.	Războiul peloponesiac</p>
	</div>
	
	<div  data-droppableTarget='3' class="ui-widget-content draggable">
		<p>c.	Reformele lui Pericle</p>
	</div>
	
	<div data-droppableTarget='1' class="ui-widget-content draggable">
		<p>d.	Legile lui Dracon</p>
	</div>
	
	<div  data-droppableTarget='0' class="ui-widget-content draggable">
		<p>e.	Marea colonizare greacă</p>
	</div>
	</div>
	
 <div class="row col-md-12 drop">
<div class="droppable ui-widget-header">
  <p>sec. VIII - VII î.Hr</p>
</div>

<div class="droppable ui-widget-header">
  <p>621 î.Hr</p>
</div>

<div class="droppable ui-widget-header">
  <p>499-497 î.Hr</p>
</div>

<div class="droppable ui-widget-header">
  <p>443 î.Hr</p>
</div>

<div class="droppable ui-widget-header">
  <p>431-404 î.Hr</p>
</div>
</div>
<br>
<h3 class="ex-t">IV. Alegeţi răspunsul corect pentru fiecare din afirmaţiile de mai jos:</h3> <!-- verify if correct -->
<ol>
<li>Marea colonizare greacă  s-a a debutat în secolul:</li>
<ol style="list-style-type:lower-alpha">
	<li><div class="verify">sec al X-lea î.Hr</div></li>
	<li><div class="verify true">sec al VIII-lea î.Hr</div></li>
	<li><div class="verify">sec al V-lea î.Hr</div></li>
</ol>
<li>Statul antic în care apare conceptul de monarhie militară:</li>
<ol style="list-style-type:lower-alpha">
<li><div class="verify true">Sparta</div></li>
<li><div class="verify">Atena</div></li>
<li><div class="verify">Corint</div></li>
 </ol>
<li>Populație indo-europeană, care se stabilește în Pen. Atica:</li>
<ol style="list-style-type:lower-alpha">
<li><div class="verify">dorieni</div></li>
<li><div class="verify true">ionieni</div></li>
<li><div class="verify">etrusci</div></li>
</ol>
</ol>




<style type="text/css">
	#rebus{
		font-size: 30px;
		margin-left:30px;
	}
	.square{
		height: 40px;
		width: 40px;
		text-align: center;
		text-transform: uppercase;
	}
	.hide {
		visibility: hidden;
		height: 40px;
		width: 40px;
	}
	.dark{
		background: #eee;
	}
	.desc{
		height: 40px;
		width: 40px;
		text-align: center;
		border-color: rgba(0, 0, 0, 0); 
		background-color: white;
	}
	</style>
<h3 class="ex-t">V. Rebus</h3>
<div id="container rebus">
<div><input class="hide"><input class="hide"><input class="hide"><input class="hide"><input class="hide"><span><strong>A</strong></span></div>
<div class="r"><input class="hide"><input class="hide"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"></div>
<div class="r"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"></div>
<div class="r"><input class="hide"><input class="hide"><input class="hide"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"></div>
<div class="r"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"></div>
<div class="r"><input class="hide"><input class="hide"><input class="hide"><input class="hide"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"></div>
<div ><input class="hide"><input class="hide"><input class="hide"><input class="hide"><input class="hide"><span><strong>B</strong></span></div>
</div>
<ol>
		<li>A făcut primele legi scrise</li>
		<li>A introdus ostracismul</li>
		<li>A fost cel mai mare strateg atenian</li>
		<li>A scris o constituţie şi a împărţit populaţia după avere</li>
		<li>Piaţa publică a oraşelor în Grecia</li>
	</ol>
<p>Coloana A-B: numele cetăţii polis unde  apărut democraţia pentru prima dată în istoria umanităţii</p>
<br>

<h3 class="ex-t">VI. Elaboraţi, în apoximativ două pagini, un eseu cu tema Grecii în antichitate, avand în vedere :</h3>
<ul>
	<li>Precizarea originii şi a spaţiului de locuire a vechilor greci </li>
	<li>Prezentarea structurii sociale </li>
	<li>Prcizarea  a trei modele de organizăre politică şi prezentarea a două dintre acestea</li>
	<li>Menționarea a două izvoare antice care îi menționează</li>
	<li>Formularea unui punct de vedere referitor la rolul democraţiei anteniene pentru formarea conştiinţei cetăţeneşti în sec XXI </li>
</ul>

</br>
</div>
<script type="text/javascript">
var keypress = function(c,prev,next){
	c.onkeyup = function(){
		if (c.value.length == 1 && next != null) {
			next.focus();
			next.select();						
		}else if(c.value.length == 0 && prev != null){
			prev.focus();
			prev.select();
		}
	};
}
window.onload = function(){
	var t=document.getElementsByClassName("verify");
for(var i=0;i<t.length;i++)
{
	t[i].onclick=function(){
		if (this.classList.contains(true))  
		this.style.backgroundColor = "rgb(179, 255, 179)";
	else
		this.style.backgroundColor = "#fddfdf";
	}
	
}
		var rs = document.getElementsByClassName('r');
		for (var i = 0; i < rs.length; i++) {
			var inputArray = rs[i].childNodes;
			/*
			Sunt selectate toate inputurile de pe fiecare rand (element div)
				celui de-al 6-lea element (al 5-lea cand numaratoarea incepe de la 0)
				i se atribui clasa 'dark', ce va marca linia A-B pe care se afla raspunsul
			*/
			for (var j = 0; j < inputArray.length; j++) {
				if (j == 5) {
					inputArray[j].setAttribute('class', 'square dark');
				}
			}
			/*
				Se selecteaza doar acele inputuri care au clasa 'square'
				fiecare e setat sa aiba lungimea maxima de caractere acceptate: 1;
				fiecare primeste un comportament la apasarea unei taste:
				astfel inputul urmator celui in care s-a tastat va intra in focus atunci cand lungimea textului e 1
				sau se va trece la inputul anterior cand lugimea textului e 0, adica a fost apasata tasta BACKSPACE sau DELETE pt stergere.
				Acest lucru e realizat de functia: keypress(c,prev,next); 
					c    - input curent in focus
					next - inputul urmator
					prev - inputul anterior

				Variabila next primeste valoarea obiect a urmatorului input din rand sau 
				daca focusul e pozitionat pe ultimul input din rand, variabila next va lua valoarea primului camp input de pe randul urmator
				(daca exista un rand urmator)

				Variabila prev primeste valoarea obiect a inputului anterior de pe acelasi rand, sau de pe randul urmator 
				(daca exista un rand anterior)
			*/
			inputArray = rs[i].getElementsByClassName('square');
			for (var j = 0; j < inputArray.length; j++) {
				inputArray[j].setAttribute('maxlength',1);
				if (j+1 >= inputArray.length) {
					if (i+1 < rs.length) {
						next = rs[i+1].getElementsByClassName('square')[0];
					}
				}else{
					var next = inputArray[j+1];
				}
				if (j-1 < 0 && i > 0) {
					if (i-1 >= 0) {
						var temp = rs[i-1].getElementsByClassName('square');
						prev = temp[temp.length-1];
					}
				}else{
					var prev = inputArray[j-1];
				}
				keypress(inputArray[j],prev,next);
			}
		}
		/* 
			Se seteaza toate inputurile ce au clasa 'desc' ca disabled(adica se dezactiveaza) si se autogenereaza cate un numar
			Acest numar reprezinta numarul randului/intrebarii/ghicitorii
		*/
		var desc = document.getElementsByClassName('desc');
		for (var i = 0; i < desc.length; i++) {
			desc[i].setAttribute('disabled','disabled');
			desc[i].value = i+1;
		}
}
function verifyRebus(){
	var solution =["a","t","e","n","a"];
	var rows = $('.r');
	var correct = true;
	var eLength = true;
	for(var i = 0; i < rows.length; i++){
		var child = rows.eq(i).children('input').eq(5).val(); //eu nu inteleg de ce nu e asta toata coloana ab
		if(child.length == 0){
			eLength = false;
		}else if(child.toLowerCase() != solution[i]){
			correct = false;
		}
		console.log(i+":"+child+"-"+solution[i]);
	}
	if(correct && eLength){
		rows.find('.dark').css('background','#dff0d8');
	}else if(!correct && eLength){
		rows.find('.dark').css('background','#f2dede');
	}
}
var solutionsExI = ["atena","pericle","razboiul peloponesiac","laconia"];
$(window).ready(function(){
	$('.square').keyup(function(){
		if($(this).val().length != 0){
			$(this).attr('disabled','disabled');
		}
		verifyRebus();
		console.log(this);
	
	});
	$('.ex1').keyup(function(){
		var pos = $('.ex1').index(this);
		if($(this).val().length >= solutionsExI[pos].length){
			if($(this).val().toLowerCase() == solutionsExI[pos]){
				$(this).css('background','#dff0d8');
			}else{
				$(this).css('background','#f2dede');
			}
		}
	});
});


	</script>
	
	
	
<?php include("includes/footer.html");?>
</body>
</html>