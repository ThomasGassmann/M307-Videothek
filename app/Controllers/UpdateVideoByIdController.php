<?php
header('Content-Type: application/json');
$errors = array();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['id'])) {
        $errors["INVALID_ID"] = 'Please provide an id.';
    } else {
        if (!(new Video())->exists($_POST['id'])) {
            $errors["INVALID_OPERATION"] = 'For an udpate the item has to exist.';
        }
    }
    if (isset($_POST['releaseYear']) && $_POST['releaseYear'] !== '') {
        if (!preg_match("/^(19|20)\d{2}$/", $_POST['releaseYear'])) {
            $errors['INVALID_RELEASEYEAR'] = 'Please provide a valid ReleaseYear of the video.';
        }
    }
    if (isset($_POST['length']) && $_POST['length'] !== '') {
        if (!preg_match("/[0-9]{1,3}/", $_POST['length'])) {
            $errors['INVALID_LENGTH'] = 'The movie can only be in between 0 - 999.';
        }
    }
    if (count($errors) === 0) {
        $video = (new Video())->getById($_POST['id']);
        $video->title = $_POST['title'];
        $video->length = $_POST['length'];
        $video->releaseYear = isset($_POST['releaseYear']) ? $_POST['releaseYear'] . '-01-01' : null;
        $video->save();
        $errors["SUCCESS"] = 'The video was successfully updated.';
    }
} else {
    $errors['REQUEST_METHOD'] = 'Please use HTTP POST';
    http_response_code(400);
}

echo json_encode($errors);