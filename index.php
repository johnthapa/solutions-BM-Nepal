<?php 
include( 'phpQuestions.php' );

$phpQuestions = new PHPQuestions();

// PHP Question 1
	// Uncomment for results
$jsonResp = $phpQuestions->xmlToJson('http://ftp.geoinfo.msl.mt.gov/Documents/Metadata/GIS_Inventory/35524afc-669b-4614-9f44-43506ae21a1d.xml');

// echo $jsonResp;

// PHP Question 2 
	// Uncomment for results
$resp = $phpQuestions->filterItemWithPrice( 100 );

// echo '<pre>';
// print_r($resp->item);
// echo '</pre>';

// echo $resp->sumTotal;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="elementID" data-name="awsomeDiv" class="changeMe">
		<p>This page source code includes JS/PHP answer implementations.</p>
	</div>
	<div>
		  <input type="text" id="fname" name="fname" value="John"><br><br>
		  <select name="cars" id="cars">
		    <option value="volvo">Volvo</option>
		    <option value="saab">Saab</option>
		    <option value="mercedes">Mercedes</option>
		    <option value="audi">Audi</option>
		  </select>
		  <br><br>
		  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
		  <label>Default was not checked</label>
	</div>
</body>

<script src="functions.js"></script>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) { 
  		
  				// Question 1 a.
		  		JSL.changeClassName('elementID' , 'changedClassName');

		  		// Question 1 b.
		  		var dataset = JSL.getDatasetsByelemID('elementID' , 'data-name'); 
		  		console.log(dataset);

		  		// Question 1 c. 
		  		JSL.injectNewDomElem('p');

		  		// Question 1 d.
		  		JSL.ajaxAndGetRequest('https://jsonplaceholder.typicode.com/todos/1');

		  		// Question 1 e.
		  		// input
		  		var inputText = JSL.getSetValInputType('fname', 'input', 'get');
		  		console.log(inputText);

		  		JSL.getSetValInputType('fname' , 'input', 'set' , 'newInputValue');

		  		// dropdown
		  		var dropdownGet = JSL.getSetValInputType('cars', 'dropdown', 'get');
		  		console.log(dropdownGet);

		  		JSL.getSetValInputType('cars' , 'dropdown', 'set' , 'mercedes');

		  		// checkbox
		  		var checkboxGet = JSL.getSetValInputType('vehicle1', 'checkbox', 'get');
		  		console.log(checkboxGet);

		  		JSL.getSetValInputType('vehicle1' , 'checkbox', 'set' , true);

  				// Question 2
  				JSL.threePostRequestResolveSameTime();

	});
</script>
</html>