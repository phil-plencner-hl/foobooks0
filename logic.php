<?php
session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $books = $results['books'];
    $searchTerm = $results['searchTerm'];
    $bookCount = $results['bookCount'];
}

session_unset();