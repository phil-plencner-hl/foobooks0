<?php
session_start();

$hasErrors = false;

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $books = $results['books'];
    $searchTerm = $results['searchTerm'];
    $bookCount = $results['bookCount'];
    $caseSensitive = $results['caseSensitive'];
    $errors = $results['errors'];
    $hasErrors = $results['hasErrors'];
}

session_unset();