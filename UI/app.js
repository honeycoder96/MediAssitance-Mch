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