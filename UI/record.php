<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="symptom_selector/selector.css?v=1">
    <link rel="stylesheet" type="text/css" href="symptom_selector/fontawesome/assets/css/font-awesome.min.css" />
    
    <link rel="stylesheet" type="text/css" href="design.css"/>
<link rel="stylesheet" type="text/css" href="courses.css"/>
<link rel="icon" type="image/png" href="E:\csgen logo\favicon.ico">
<button id="butRefresh" class="headerButton" aria-label="Refresh"></button>
<button id="butAdd" class="headerButton" aria-label="Add"></button>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


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
<nav class="navbar navbar-inverse navbar-fixed-top" id="mynavbar">
		<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button> 
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
		<ul class="nav navbar-nav">
		<li> <a href="success.html">Home</a>
		                
		<li> <a href = "patient.html">Patients</a> </li>
		                
		<li> <a href = "hospitals.html">Hospitals</a> </li>
		                
		<li> <a href = "record.php">Symptoms</a> </li>

		</ul>
		</div>
		</nav>
<body bgcolor="#5BCD95">
    <table class="container-table">
    	<tr>
    		<td style="height:30px"></td>
    	</tr>	
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

<footer>
<p> &copy Dexter corporation India</p>
</footer>
<!-- Latest compiled and minified JavaScript -->
<script src="/scripts/course.js" async></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
