var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' }
  next());
});
router.get('/dashboard',stormpath.loginRequired,function(req,res,next){
	res.send("Hi User")}
);

module.exports = router;
