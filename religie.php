<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Religia</title>
<?php include("includes/header.html");?>
    
  </head>

<body>

<?php include("includes/navigation.html");?>
<div class="main cultura container">
<br>
<h1 class="title">Religia</h1>
<ul>
	<li>Era politeistă</li>
	<li>Nu era o reigie pacifistă</li>
	<li>Nu a existat o preoțime sau un monopol al statului asupra religiei grecești.</li>
</ul>
<br>	
<h3>Zeii greci</h3>
<p>   Vechii greci au stabilit resedinta zeilor lor in Olimp, cel mai inalt munte din Grecia continentala. In felul acesta, zeii erau deasupra si, in acelasi timp, aproape de ei.. Zeii olimpieni nu erau egali, ci exista o ierarhie bine stabilita. Asemenea oamenilor, si zeii traiau in familii asupra carora Zeus isi exercita autoritatea suprema.</p>
<p> Principala diferenta dintre zei si oameni consta in faptul ca prin venele zeilor nu curgea sange, ci un lichid mai fluid, numit “icor”, care facea ca trupul lor sa fie de neatins si nemuritor. Hrana zeilor consta in diferite arome si parfumuri, nectar si ambrozie ( substanta necunoscuta ), precum si din fumul care se ridica de la jertfele de animale aduse de oameni.</p>
<div style="max-width:100%; text-align:center">

<div id="img-container">
<img style="max-width:100%;" src="images/zei.jpg" id="imagine" usemap="#Map" />
<map name="Map" id="Map">
  
	<area class="zeu"  alt="" title="" shape="poly" coords="75,1302,244,1306,261,921,71,920" />
    <area class="zeu"   title=""  shape="poly" coords="523,909,531,1310,649,1308,660,924" />
    <area class="zeu"  title=""  shape="poly" coords="284,524,287,838,387,836,379,535" />
    <area class="zeu" title="" shape="poly" coords="523,503,519,836,627,835,635,514" />
    <area class="zeu"  title=""  shape="poly" coords="671,881,757,876,777,458,643,477" />
    <area class="zeu" title="" shape="poly" coords="504,394,624,403,649,36,403,30" />
    <area class="zeu"  title=""  shape="poly" coords="735,66,895,78,883,399,755,395" />
 
</map>
<br>

</div>
<br>
<a class="btn btn-lg btn-danger" role="button" href="https://bibliotecapemobil.ro/content/scoala/pdf/Legendele_Olimpului_-_Mitru_Alexandru.pdf">Legendele Olimpului</a>

</div>
</br>
	

<script>

	var zei = [
	'În mitologia greacă, Poseidon era zeul mării, fiul lui Cronos și al Rheei. Ca și ceilalți frați ai săi, când s-a născut, Poseidon a fost înghițit de către tatăl său și apoi dat afară.',
	'Hades, zeul infernului, fiul lui Cronos și al Rheei. Ca și ceilalți frați ai săi, când s-a născut, Hades a fost înghițit de tatăl său, apoi dat afară. Mai târziu a participat la lupta dusă de olimpieni împotriva titanilor',
	'Apollo este, în mitologia greacă (la fel ca și în mitologia romană), zeul zilei, al luminii și al artelor, protector al poeziei și al muzicii, conducătorul corului muzelor, personificare a Soarelui. Era numit și Phoebus-Apollo.',
	'Atena era una dintre cele mai mari divinități ale mitologiei grecești, identificată de romani cu zeița Minerva. Era zeița înțelepciunii, pe care grecii o mai numeau și Pallas Athena sau, pur și simplu, Pallas.',
	'Ares este zeul războiului în mitologia greacă. În literatura greacă el reprezintă deseori aspectul fizic, violent și neîmblânzit al războiului.',
	'Zeus este "Tatăl zeilor și oamenilor" și conducătorul zeilor de pe Muntele Olimp. El este zeul cerului și fulgerelor în mitologia greacă. Omologul său roman este Jupiter, omologul hindus este Indra și omologul etrusc este Tinia.',
	'Hera este în mitologia greacă zeița protectoare a căsniciei, a căminului și a femeilor măritate, precum și regina zeilor și a oamenilor. La romani este identificată cu Iunona.'
	];

	 $(".zeu").mouseenter(function (){
	var p = document.createElement("div");
	var n = document.createTextNode(zei[$('.zeu').index(this)]);
	var e = p.appendChild(n);
	document.getElementById("img-container").appendChild(p);
	$(p).addClass("exp");
    $(".zeu").mouseout(function(){
    p.remove();
	
});
	
	});
	
</script>




</div>



<?php include("includes/footer.html");?>

</body>
</html>