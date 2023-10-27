const express = require('express');
const multer = require('multer');
const mysql = require('mysql2/promise');
const fs = require('fs');

const app = express();
const port = 3000;

// Multer middleware to handle file uploads
const upload = multer({ dest: 'uploads/' });

// Database connection configuration
const dbConfig = {
    host: '127.0.0.1',
    user: 'root', // Replace with your database username
    password: '', // Replace with your database password
    database: 'noarahbsar'
};

// Route to handle PDF uploads
app.post('/upload', upload.single('pdfFile'), async (req, res) => {
    const pdfData = fs.readFileSync(req.file.path);

    // Create a connection pool
    const pool = await mysql.createPool(dbConfig);

    try {
        // Insert data into the database
        const insertQuery = 'INSERT INTO pdf (file_name, type, file_data) VALUES (?, ?, ?)';
        const fileValues = [req.file.originalname, req.file.mimetype, pdfData];

        const [rows] = await pool.query(insertQuery, fileValues);

        res.status(200).send('PDF uploaded successfully!');
    } catch (error) {
        console.error('Error uploading PDF file:', error);
        res.status(500).send('Internal Server Error');
    } finally {
        // Close the connection pool
        await pool.end();

        // Delete the temporary file
        fs.unlinkSync(req.file.path);
    }
});

app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});