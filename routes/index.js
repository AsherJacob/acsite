const express = require('express');
const router = express.Router();

 
 
router.get('/', (req,res) => {
  res.render('index');
});
 

router.post('/', (req,res) => {
    const name = req.body.fname;
    console.log(`name is ${name}`);
    res.redirect('/');
}); 

 
module.exports = router;