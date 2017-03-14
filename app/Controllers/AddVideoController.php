<?php
header('Content-Type: application/json');
$errors = array();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['title']) || $_POST['title'] === null || $_POST['title'] === '') {
        $errors['INVALID_TITLE'] = 'Please provide a valid title.';
    }
    if (isset($_POST['releaseYear'])) {
        if (!preg_match("/^(19|20)\d{2}$/", $_POST['releaseYear'])) {
            $errors['INVALID_RELEASEYEAR'] = 'Please provide a valid ReleaseYear of the video.';
        }
    }
    if (isset($_POST['length'])) {
        if (!preg_match("/[0-9]{0,3}/", $_POST['length']) || $_POST['length'] === '') {
            $errors['INVALID_LENGTH'] = 'The movie can only be in between 0 - 999.';
        }
    }
    $borrow = 0;
    if (isset($_POST['isBorrowed'])) {
        if ($_POST['isBorrowed'] === '1') {
            $borrow = 1;
        } else if ($_POST['isBorrowed'] === '0') {
            $borrow = 0;
        } else {
            $errors["INVALID_ISBORROWED"] = 'The value determining whether the video is borrowed was provided in the wrong format.';
        }
    }
    if (count($errors) === 0) {
        $video = new Video();
        $video->releaseYear = isset($_POST['releaseYear']) ? $_POST['releaseYear'] . '-01-01' : null;
        $video->isBorrowed = $borrow;
        $video->title = $_POST['title'];
        $video->length = isset($_POST['length']) ? $_POST['length'] : null;
        $video->create();
        $errors["SUCCESS"] = 'The video was successfully created.';
    }
} else {
    $errors['REQUEST_METHOD'] = 'Please use HTTP POST';
    http_response_code(400);
}

echo json_encode($errors);