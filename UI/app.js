
var express = require('express');
var path = require('path');
var bodyParser = require('body-parser');
var mongodb = require('mongodb');

var dbConn = mongodb.MongoClient.connect('mongodb://localhost:27017/MediAssitance');

var app = express();

app.use(bodyParser.urlencoded({ extended: false }));
app.use(express.static(path.resolve(__dirname, 'public')));

app.post('/patient', function (req, res) {
    dbConn.then(function(db) {
        delete req.body._id; // for safety reasons
        db.collection('patient').insertOne(req.body);
    });
    res.send('Data received:\n' + JSON.stringify(req.body));
});

app.get('/view-patient',  function(req, res) {
    dbConn.then(function(db) {
        db.collection('patient').find({}).toArray().then(function(patient) {
            res.status(200).json(patient);
        });
    });
});

app.listen(process.env.PORT || 3000, process.env.IP || '0.0.0.0' );
var health=angular.module('health',['angular-loading-bar'])
health.controller('healthcontroller',function($scope,$http){
  
	 setTimeout(function(){
  $http.get("http://localhost/hospital/tojson.php")
  .success(function (data) {
	
		$scope.data = data;
  console.log($scope.data)
 
  	  console.log(data[0].sreport);
    console.log(data[1].sreport);
  for(i=0;i<data.length;i++){
  	if(data[i].sreport==""){
  		 $scope.sreport="Pending";
  	}
  	
  	console.log(data[i].sreport);
  	if(data[i].sreport!=""){
	  	$scope.sreport=data[i].sreport;
	  	 	console.log($scope.sreport);
	
	  }
	  
	  console.log($scope.sreport);
  }
  
   });
},1000);

})
