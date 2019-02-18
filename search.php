<?php
session_start();

require 'includes/helpers.php';

# Get data from form request
$searchTerm = $_GET['searchTerm'];

# Load book data
$booksJson = file_get_contents('books.json');
$books = json_decode($booksJson, true);

# Filter book data according to search term
foreach ($books as $title => $book) {
    if ($title != $searchTerm) {
        unset($books[$title]);
    }
}

# Store our data in the session
$_SESSION['results'] = [
    'searchTerm' => $searchTerm,
    'books' => $books,
    'bookCount' => count($books)
];

# Redirect back to the form
header('location: index.php');
