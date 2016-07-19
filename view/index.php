<?php
require('../model/database.php');
require('../model/content_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'display_content';
    }
}
    
if ($action == 'display_content') {
    $content_id = filter_input(INPUT_GET, 'content_id', 
            FILTER_VALIDATE_INT);
    if ($content_id == NULL || $content_id == FALSE) {
        $content_id = 2;
    }
    $title_name = get_title_name($content_id);
    $video_url = get_video_url($content_id);
    $contents = get_content();
    $platform = get_platform($content_id);
    $year = get_year($content_id);
    $description = get_description($content_id);
    include('content.php');
} else if ($action == 'add_content') {
    $title_name = filter_input(INPUT_POST, 'title_name');
    $platform = filter_input(INPUT_POST, 'platform');
    $year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
    $video_url = filter_input(INPUT_POST, 'video_url');
    $description = filter_input(INPUT_POST, 'description');
    if ($title_name == NULL || $platform == NULL || 
            $year == NULL || $video_url == NULL ||
            $description == NULL) {
        $error = "Oops! Check your data again before submitting.<br>";;
        include('../errors/error.php');
    } else { 
        add_content($title_name, $platform, $year, $video_url, $description);
        header('Location: .?action=display_content'); // Display the main page
    }
} else if ($action == 'list_content') {
    $content_id = filter_input(INPUT_GET, 'content_id', 
            FILTER_VALIDATE_INT);
    if ($content_id == NULL || $content_id == FALSE) {
        $content_id = 2;
    }
    $title = get_title_name($content_id);
    $video = get_video_url($content_id);
    $contents = get_content();
    $platform = get_platform($content_id);
    $year = get_year($content_id);
    $description = get_description($content_id);
    include('edit.php'); 
} else if ($action == 'delete_content') {
    $content_id = filter_input(INPUT_POST, 'content_id', 
            FILTER_VALIDATE_INT);
    if ($content_id == NULL || $content_id == FALSE) {
        $error = "Missing or incorrect content ID. Please try again.";
        include('../errors/error.php');
    } else { 
        delete_content($content_id);
        header("Location: .?action=display_content");
    } 
} else if ($action == 'start_edit_content') {
    $content_id = filter_input(INPUT_POST, 'content_id', 
            FILTER_VALIDATE_INT);
    $title = filter_input(INPUT_POST, 'title');
    $platform = filter_input(INPUT_POST, 'platform');
    $year = filter_input(INPUT_POST, 'year', 
            FILTER_VALIDATE_INT);
    $video = filter_input(INPUT_POST, 'video');
    $description = filter_input(INPUT_POST, 'description');
        include('edit_entry.php');
} else if ($action == 'submit_edits') {
    $content_id = filter_input(INPUT_POST, 'content_id', 
            FILTER_VALIDATE_INT);
    $title = filter_input(INPUT_POST, 'title');
    $platform = filter_input(INPUT_POST, 'platform');
    $year = filter_input(INPUT_POST, 'year', 
            FILTER_VALIDATE_INT);
    $video = filter_input(INPUT_POST, 'video');
    $description = filter_input(INPUT_POST, 'description');
    if ($title == NULL || $platform == NULL || 
            $year == NULL || $video == NULL ||
            $description == NULL || $content_id == NULL) {
        $error = "Oops! Check your data again before submitting.<br>";
        include('../errors/error.php');
            } else {
        get_content();
        submit_edits($content_id, $title, $platform, $year, $video, $description);
        header("Location: .?action=display_content");
    }
} else if ($action == 'random') {
    $all_videos = array("");
	$all_videos = get_ids($all_videos);
    $random_id = array_rand($all_videos, 1);
    header("Location: .?content_id=" . $all_videos[$random_id]);
}