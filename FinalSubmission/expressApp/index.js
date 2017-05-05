var http = require('http');
var express = require('express');
var router = express.Router();
var bodyParser = require('body-parser');
var stormpath = require('express-stormpath');
var path = require("path");
var app = express();
var jsonParser = bodyParser.json();
var pug = require('pug');
var mysql = require('mysql');


app.set('view engine', 'pug');


//function connection() {
//	return mysql.createConnection({
//		host:'localhost',
//		user:'root',
//		database:'class'
//	});
//}

//router.get('/dashboard', function(req, res, next){
//	var con=connection();
//	conn.query('select * from class', function(mysqlRes){
//		res.render('add',{mysql:mysqlRes})
//	})
//});





//cleardb mysql intiallization

//var db_config = {
 //   host: 'us-cdbr-iron-east-03.cleardb.net',
 //   user: 'b2c9100997d307',
  //  password: 'bc9c08e2',
  //  database: 'heroku_3d932304dfa6a83'
//};

//connection.connect();

//connection.query('SELECT 1 + 1 AS solution', function (error, results, fields) {
//  if (error) throw error;
 // console.log('The solution is: ', results[0].solution);
//});

//connection.end();


// load env vars
require('dotenv').load();

var port = process.env.PORT || 8000;

console.log("running on port"+port);



app.use(express.static('public'));
app.use(express.static('files'));

//iniatialize stormpath

app.use(stormpath.init(app,{
	application: process.env.STORMPATH_URL,
	web: {
		login:{
			enabled:true,
			nextUri:'/dashboard'
		}	
	}
	})
);



app.server = http.createServer(app);
app.server.listen(port);


app.route('/')
	.get(function(req,res,next){
		res.render('index');
		next()}
	);
app.route('/dashboard')
	.get(stormpath.loginRequired, function(req,res,next){
		res.render('addClass');
		}
	);
		
app.route('/router')
	.get(stormpath.loginRequired, function(req,res,next){
		res.render('router');
		}
	);

//dashboard page
//app.get('/dashboard', stormpath.loginRequired, function(req, res){
//	res.json(req.user);
//	res.sendFile(path.join(__dirname+'/dashboard.html'));
//	res.json(req.user);
//	res.send('Welcome to CUThere');
//});
// Generate a simple dashboard page.
//app.get('/dashboard', stormpath.loginRequired, function(req, res) {
 // res.send('Hi: ' + req.user.email + '. Logout <form action="/logout" method="POST"><button type="submit">Logout</button></form>');
//});

console.log(stormpath);
//console.log(stormpath.web.login.uri);

module.exports = router;
