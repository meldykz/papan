<!DOCTYPE html>
<html>
    <head>
	<title>Agenda Pembelajaran</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="slide.css">
    <style>
        body{ background: white;}
        #table { width: 100%; }
        .th { font: 400 16px 'Open Sans', sans-serif; font-weight: 400; color:white ; border-right: 1px solid #035B71; border-bottom: 1px solid #035B71; border-top: 1px solid #035B71; letter-spacing: 2px; text-transform: uppercase; text-align: center; padding: 5px 5px 5px 5px; background: #00A2B9; }
		
        .td { font: 400 16px 'Open Sans', sans-serif; color: rgb(52, 102, 73); border-right: 0.1em solid #035B71; border-bottom: 0.1em solid #035B71; border-left: 0.1em solid #035B71; border-top: 0.1em solid #035B71; padding: 6px 6px 6px 6px; }
        .alt { background: #F5FAFA; color: #797268; font-size:1em; }
        .alts { background:#FFF; color: #797268; font-size:1em; }
        * html .threepxfix{ margin-left: 3px; }
		.td {
			height:70px;
		}

    .mySlides {display:none;}    
    </style>
    </head>
<body>       
<table id='table' cellspacing='0' align='center'>
<tr>
<td  style='width:100%;background:white;'>
<img src="kiri.jpg" align="left" style="width:304px;height:100px;">
<a href="input.php">
<img src="kanan.jpg" align="right" style="width:304px;height:100px;"></a>
</td>

</tr>
</table>

<table id='table' cellspacing='0' align='center'><tr><th class='th' style='background: #00AFF0'>
<marquee direction="left" behaviour="alternate"  scrollamount="2" scrolldelay="0.01" height="100%" >
VISI Menjadi pusat pendidikan setara kelas dunia dalam menyiapkan insan PLN yang profesional, bersemangat dan berintegritas guna mendukung penciptaan nilai korporasi yang berkelanjutan.</th>
</marquee>
</tr></table>

<table id='table' cellspacing='0' align='center'><tr><th class='th' style='background: #00AFF0'>
<marquee direction="left" behaviour="alternate"  scrollamount="2" scrolldelay="0.01" height="100%" >
MISI Mengembangkan, 
</th>
</marquee>
</tr></table>

<table id='table' cellspacing='0' align='center'><tr><th class='th' style='background: white'>

</tr></table>




<table id='table' cellspacing='0' align='center' border="1">
<tr>
<th class='td' style='width:100%; height: 600px' valign="top" >
<!--marquee align="up"  direction="up" height="600px" onmouseout="this.start()"  scrollamount="2" width="100%"-->
<img src="agenda.jpg" width="100%" height="100%"><!--img src="agenda.jpg" width="100%" height="100%"><img src="agenda.jpg" width="100%" height="100%">
  </marquee--> 
	</th>
</tr>
</table>


<!--div class="w3-content w3-section" ">
  <img class="mySlides" src="kiri.jpg" style="width:100%">
  <img class="mySlides" src="" style="width:100%">
  <img class="mySlides" src="" style="width:100%">
</div-->

</body>
<html>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 10000); // Change image every 2 seconds
}
</script>
