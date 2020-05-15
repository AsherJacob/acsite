const express = require('express'); 
const app = express();
const path = require('path');


// set the view engine to ejs
app.set('view engine', 'ejs');

// app.use(express.static('public'));
app.use(express.static('autorepair'));

// app.get('/', (req,res) => res.render('index'));
// app.get('/about', (req,res) => res.render('about'));



const port = 8080;

app.listen(port , console.log(`Server running on port ${port}`));