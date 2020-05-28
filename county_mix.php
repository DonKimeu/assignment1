<?php
/**Counties in the Republic of Kenya,Governors and their Political Parties.*/

$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
9. Mandera. – Ali Ibrahim Roba – Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – CCM,
17. Makueni – Kivutha Kibwana – WDM K.,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – John Nyangarama Obiena – ODM,
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";

/**You should not modify anything above this line*/

// @TODO : Your code starts here
$dividedCountyData = explode(",",$county_data);

$arrlength = count($dividedCountyData);
$nonrequired = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9",".");

$jub=0;
$odm=0;
$kan=0;
$ford=0;
$ccm=0;
$wdm=0;
$ind=0;
$nar=0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 1</title>
  
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
  <style>

	
    table, th, td {

      border:0.2px solid black;
    }
	
  </style>
</head>

	
	
	
<body>
<div class="has-background-white">
<div class="container is-fluid">
  <table style="width:100%" class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth
">
  <div class="is-block">
  <div class="notification">
  <thead>
    <tr class="has-background-primary">
      <th>#	</th>
      <th>Name</th>
      <th>Governor</th>
      <th>Website</th>
    </tr>
    </thead>
    <tbody>
	

    <?php 
	
	
    $n=1; 
    for($j = 0; $j < $arrlength; $j++) {?>
      <?php $splitStringData = explode(" – ",$dividedCountyData[$j]);
      $datalength = count($splitStringData);?>
      <tr>
      <td><?php echo $n++?></td>  <!--  column for county numbers-->
	  <!-- column for the county names -->

      <td> 
	  
      <?php
	  
          $modifieDstring = str_replace($nonrequired,"", $splitStringData[0]);
          echo $modifieDstring;?>
		  
      </td>

	  <!-- for the county Governors           	 echo $splitStringData[2];   -->
      <td> 
      <?php 
	  
          if(!empty($splitStringData[2])){ 
		  
            echo $splitStringData[1];
		
			if($splitStringData[2]=="ODM"){
					$odm++;
			?>
			
            <img width="5%" height="20%" src="images/odm.png">
			<?php }
			
			if($splitStringData[2]=="Independent"){
					$ind++;
			?>
			
            <img width="5%" height="20%" src="images/INDEPENDENT.png">
			<?php }
			
			if($splitStringData[2]=="Jubilee"){
				$jub++;
			?>
			
            <img width="5%" height="20%" src="images/JUBILEE.png">
			<?php }


						if($splitStringData[2]=="Narc Kenya"){
				$nar++;
			?>
			
            <img width="5%" height="20%" src="images/NARC.jpeg">
			<?php }
			
			
			if($splitStringData[2]=="CCM"){
				$ccm++;
			?>
			
            <img width="5%" height="20%" src="images/CCM.jpg">
			<?php }
			
			if($splitStringData[2]=="KANU"){
				
				$kan++;
			?>
			
            <img width="5%" height="20%" src="images/KANU.png">
			<?php }
			
		    if($splitStringData[2]=="FORD Kenya"){
					$ford++;
			?>
			
            <img width="5%" height="20%" src="images/FORD.jpg">
			<?php }
			
			if($splitStringData[2]=="WDM K"){
				$wdm++;
			?>
			

			
            <img width="5%" height="20%" src="images/WDM.png">
			<?php } 
			
    if($splitStringData[2]=="WDM K."){
				$wdm++;
			?>
			
            <img width="5%" height="20%" src="images/WDM.png">
			<?php }
			
		  }

        ?>
      </td>
      <?php 
       $modifieDstring = str_replace($nonrequired, "", $splitStringData[0]);
       $nospacedlink = strtolower(str_replace(' ', '', $modifieDstring));?>
       <td><a target="_BLANK" href="http://<?php echo $nospacedlink?>.go.ke"><?php echo "http://".$nospacedlink.".go.ke";?></a></td>
    </tr>

    <?php 
      

	  }


							    
						
    ?>
	</div>
    </tbody>
  </table>
  	<div class="$footer-padding">
<footer class="footer">
  <div class="content has-text-centered">
  <?php
  		    echo "     The number of governors in jubilee is 	:	".$jub ."   <br> ";
			    echo "     The number of governors in ODM is 	:	".$odm."   <br> ";
				    echo "         The number of governors in Ford Kenya is	:	 ".$ford."   <br> ";
					    echo "   The number of governors in KANU is 	:	".$kan."   <br> ";
						   echo "The number of governors in CCM is 	:	".$ccm."   <br> ";
						      echo "  The number of governors in WDM is 	:	".$wdm."   <br> ";
							echo "   The number of governors in NARC kenya is	:	 ".$nar."   <br> ";
							  	      echo "   The number of Independent governors is 	:	".$ind."   <br> ";
									  
  ?>
    </div>
	</footer>
  </div>
    </div>
	  </div>
	   </div>
</body>

</html>