<?php
require 'includes/helpers.php';
require 'Book.php';

use Foobooks0\Book;

session_start();

$book = new Book('books.json');

# Get data from form request
$searchTerm = $_POST['searchTerm'];
$caseSensitive = isset($_POST['caseSensitive']);

$books = $book->getByTitle($caseSensitive, $searchTerm);

# Store our data in the session
$_SESSION['results'] = [
    'searchTerm' => $searchTerm,
    'books' => $books,
    'bookCount' => count($books),
    'caseSensitive' => $caseSensitive,
];

# Redirect back to the form
header('location: index.php');