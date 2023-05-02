<?php 

	$java 	= 50;
	$Pyhton = 50;
	$Jquery = 50;
	$js 	= 50;
	$css 	= 50;

	echo "Java Marks    :" .$java   ."<br/>";
	echo "Python Marks  :" .$Pyhton ."<br/>";
	echo "Jquery Marks  :" .$Jquery ."<br/>";
	echo "js Marks      :" .$js     ."<br/>";
	echo "css Marks     :" .$css    ."<br/>";
	
	$Total_Marks  = 500;
	$Obtain_Marks = $java+$Pyhton+$Jquery+$js+$css;
	$Percentage   = $Obtain_Marks / $Total_Marks * 100;

	if ($java < 50 || $Pyhton < 50 || $Jquery < 50 || $js < 50 || $css < 50) {
		echo "faild";
	}
	else{
		
	if($Percentage      >= 80 && $Percentage <= 100) {
		echo "Grade A  " ."<br/>";
	}
	elseif ($Percentage >= 60 && $Percentage <= 79) {
		echo "Grade B  " ."<br/>";
	}
	elseif ($Percentage >= 50 && $Percentage  <= 59) {
		echo "Grade C  " ."<br/>";		
	}
	echo "Obtain Marks :"  ." $Obtain_Marks" ."<br/>";
	echo "Percentage   :" ."$Percentage";
	}

 ?>