<?php
require_once './database.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'viewAllMovies';
    }
}

switch ($action) {
    case 'viewAllMovies':
        $movies = get_all();
        $title = "All Movies";
        include './displayMovies.php';
        die();
        break;
    case 'viewByRating':
        $rating = filter_input(INPUT_GET, 'rating', FILTER_VALIDATE_INT);
        $movies = get_rating($rating);
        $title = "Rating: $rating";
        include './displayMovies.php';
        die();
        break;
    case 'deleteMovie':
        $movieID = filter_input(INPUT_POST, 'movieID', FILTER_VALIDATE_INT);
        delete_ID($movieID);
        header("Location: index.php?action?viewAllMovies");
        die();
        break;
    case 'gotoRForm':
        include './ratingForm.php';
        die();
        break;
}
