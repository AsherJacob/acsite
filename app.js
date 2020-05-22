const express = require('express'); 
const app = express();


// set the view engine to ejs
app.set('view engine', 'ejs');

// Express body parser
app.use(express.urlencoded({ extended: true }));



// Serve static files
app.use('/public', express.static('public'));




//Routes
app.get('/', (req,res) => res.render('index'));
app.get('/about', (req,res) => res.render('about'));




const port = 8080;

app.listen(port , console.log(`Server running on port ${port}`));