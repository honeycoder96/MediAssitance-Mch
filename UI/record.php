﻿<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="symptom_selector/selector.css?v=1">
    <link rel="stylesheet" type="text/css" href="symptom_selector/fontawesome/assets/css/font-awesome.min.css" />
    <script src="libs/jquery-1.12.2.min.js"></script>
    <script src="libs/json2.js"></script><!-- json for ie7 -->
    <script src="libs/jquery.imagemapster.min.js?v=1.1"></script>
    <script src="libs/typeahead.bundle.js"></script>
    
    <script src="symptom_selector/selector.js?v=3.3"></script>

	<?php 

	
	if ( !isset( $_SESSION['userToken']) || !isset( $_SESSION['tokenExpireTime']) || time() >= $_SESSION['tokenExpireTime'] )
	{
		require 'token_generator.php';
		$tokenGenerator = new TokenGenerator("honey.singhroi@gmail.com","Rk7t8YDf9a3LQn6z2","https://sandbox-authservice.priaid.ch/login");
		$token = $tokenGenerator->loadToken();
		$_SESSION['userToken'] = $token->{'Token'};
		$_SESSION['tokenExpireTime'] = time() + $token->{'ValidThrough'};
	}

	$token = $_SESSION['userToken'];
	?>

	<script type="text/javascript">

		var userToken = <?php echo "'".$token."'" ?>;
		
        $(document).ready(function () {
            $("#symptomSelector").symptomSelector(
            {
                mode: "diagnosis",
                webservice: "https://sandbox-healthservice.priaid.ch",
                language: "en-gb",
                specUrl: "sample_specialisation_page",
                accessToken: userToken
            });
        });
    </script>

	
</head>
<body bgcolor="#5BCD95">
    <table class="container-table">
        <tr>
        	<td valign="middle" colspan="2" class="td-header box-white bordered-box width50">
			<h4 class="header" id="selectSymptomsTitle">
			<span class="badge pull-left badge-primary visible-lg margin5R">1</span>
			</h4>
		</td>
		<td valign="middle" class="td-header bordered-box box-white width25">
			<h4 class="header" id="selectedSymptomsTitle">
			<span class="badge pull-left badge-primary visible-lg margin5R">2</span>
			</h4>
		</td>
            	<td valign="middle" class="td-header bordered-box box-white width25">
			<h4 class="header" id="possibleDiseasesTitle">
			<span class="badge pull-left badge-primary visible-lg margin5R">3</span>
			</h4>
		</td>
        </tr>
        <tr>
		<td valign="top" class="selector_container bordered-box box-white width25"><div id="symptomSelector"></div></td>
		<td valign="top" class="selector_container bordered-box box-white width25"><div id="symptomList"></div></td>
		<td valign="top" class="selector_container bordered-box box-white width25"><div id="selectedSymptomList"></div></td>
		<td valign="top" class="selector_container bordered-box box-white width25"><div id="diagnosisList"></div></td>
        </tr>


    </table>
</body>
</html>
