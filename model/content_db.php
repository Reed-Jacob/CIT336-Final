<?php
function get_content() {
    global $db;
    $query = 'SELECT * FROM content
              ORDER BY title';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_title_name($content_id) {
    global $db;
    $query = 'SELECT * FROM content
              WHERE content_id = :content_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':content_id', $content_id);
    $statement->execute();    
    $titles = $statement->fetch();
    $statement->closeCursor();    
    $title_name = $titles['title'];
    return $title_name;
}

function get_video_url($content_id) {
    global $db;
    $query = 'SELECT * FROM content
              WHERE content_id = :content_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':content_id', $content_id);
    $statement->execute();    
    $urls = $statement->fetch();
    $statement->closeCursor();    
    $video_url = $urls['video'];
    return $video_url;
}

function get_description($content_id) {
    global $db;
    $query = 'SELECT * FROM content
              WHERE content_id = :content_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':content_id', $content_id);
    $statement->execute();    
    $descriptions = $statement->fetch();
    $statement->closeCursor();    
    $description = $descriptions['description'];
    return $description;
}

function get_platform($content_id) {
    global $db;
    $query = 'SELECT * FROM content
              WHERE content_id = :content_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':content_id', $content_id);
    $statement->execute();    
    $platforms = $statement->fetch();
    $statement->closeCursor();    
    $platform = $platforms['platform'];
    return $platform;
}

function get_year($content_id) {
    global $db;
    $query = 'SELECT * FROM content
              WHERE content_id = :content_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':content_id', $content_id);
    $statement->execute();    
    $years = $statement->fetch();
    $statement->closeCursor();    
    $year = $years['year'];
    return $year;
}

function add_content($title_name, $platform, $year, $video_url, $description) {
    global $db;
    $query = 'INSERT INTO content 
                (title, platform, year, video, description)
              VALUES 
                (:title_name, :platform, :year, :video_url, :description)';
    $statement = $db->prepare($query);
    $statement->bindValue(':title_name', $title_name);
    $statement->bindValue(':platform', $platform);
    $statement->bindValue(':year', $year);
    $statement->bindValue(':video_url', $video_url);
    $statement->bindValue(':description', $description);
    $statement->execute();
    $statement->closeCursor();    
}

function delete_content($content_id) {
    global $db;
    $query = 'DELETE FROM content
              WHERE content_id = :content_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':content_id', $content_id);
    $statement->execute();
    $statement->closeCursor();
}

function submit_edits($content_id, $title, $platform, $year, $video, $description) {
    global $db;
    $query = "UPDATE content
              SET title = '$title', 
              platform = '$platform', year = '$year', video = '$video', 
              description = '$description'
              WHERE content_id = $content_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':platform', $platform);
    $statement->bindValue(':year', $year);
    $statement->bindValue(':video', $video);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':content_id', $content_id);
    $statement->execute();
    $statement->closeCursor();
}

function get_ids() {
    global $db;
    $query = "SELECT content_id
             FROM content";
    $all_id = $db->prepare($query);
    $all_id->execute();
    return $all_id;  
}
?>