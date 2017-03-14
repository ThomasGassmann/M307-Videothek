<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["id"])) {
        http_response_code(200);
        $videoId = $_POST["id"];
        $video = new Video();
        $video->id = $videoId;
        if ($video->exists($videoId)) {
            $video->delete();
            echo json_encode("Successfully deleted Membership with id " . $videoId);
        } else {
            echo json_encode("Please provide a valid id.");
        }
    } else {
        echo json_encode("Please provide an id.");
        http_response_code(400);
    }
} else {
    echo json_encode("Please use HTTP POST");
    http_response_code(400);
}