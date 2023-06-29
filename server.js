const express = require('express');
const { MongoClient } = require('mongodb');

const app = express();
const port = 3000; // Replace with your desired port number

// Database connection URL
const uri = 'mongodb://localhost:27017'; // Replace with your MongoDB server URL
const client = new MongoClient(uri);

// Middleware to parse JSON data
app.use(express.json());

// Serve static files (optional)
app.use(express.static('public'));

// Handle form submission
app.post('/signup', (req, res) => {
  const formData = req.body;
  
  // Insert the form data into the database
  client.db('your-database-name').collection('users').insertOne(formData)
    .then(result => {
      res.redirect('/user.html'); // Redirect to the user.html page after successful signup
    })
    .catch(error => {
      console.error('Error inserting data:', error);
      res.status(500).send('Internal Server Error');
    });
});

// Start the server
app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});
