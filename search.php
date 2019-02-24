<?php
require 'includes/helpers.php';
require 'Book.php';
require 'Form.php';

use Foobooks0\Book;
use DWA\Form;

session_start();

$book = new Book('books.json');
$form = new Form($_POST);

# Get data from form request
$searchTerm = $form->get('searchTerm');
$caseSensitive = $form->has('caseSensitive');

$errors = $form->validate([
    'searchTerm' => 'required'
]);

if (!$form->hasErrors) {
    $books = $book->getByTitle($caseSensitive, $searchTerm);
}

# Store our data in the session
$_SESSION['results'] = [
    'errors' => $errors,
    'hasErrors' => $form->hasErrors,
    'searchTerm' => $searchTerm,
    'books' => $books,
    'bookCount' => count($books),
    'caseSensitive' => $caseSensitive,
];

# Redirect back to the form
header('location: index.php');