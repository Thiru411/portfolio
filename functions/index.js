const functions = require('firebase-functions');
const express = require('express');
const { exec } = require('child_process');
const path = require('path');

const app = express();

// Serve static files from the public directory
app.use(express.static(path.join(__dirname, '../public')));

// Route all other requests to the PHP environment
app.get('*', (req, res) => {
    // Path to the PHP index.php file
    const phpIndexPath = path.join(__dirname, 'php', 'public', 'index.php');

    exec(`php ${phpIndexPath}`, (err, stdout, stderr) => {
        if (err) {
            console.error(`Error executing PHP: ${stderr}`);
            return res.status(500).send('Internal Server Error');
        }

        res.send(stdout);
    });
});

// Export the cloud function
exports.app = functions.https.onRequest(app);