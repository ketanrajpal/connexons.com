<?php
define("HOST", "localhost");
define("USER", "connexons_user");
define("PASSWORD", "b;=]r0QA*H+[");
define("DATABASE", "connexons_database");

echo "hello";

function connect()
{
    static $mysqli;
    echo "hello";
    echo constant("HOST");
    $mysqli = mysqli_connect(constant("HOST"), constant("USER"), constant("PASSWORD"), constant("DATABASE"));
    return $mysqli;
}

function disconnect($mysqli)
{
    mysqli_close($mysqli);
}

function postimg($post_slug)
{
    $post = get_post_by_path($post_slug);
    $mysqli = connect();
    $sql = "select `guid` from `con_posts` where post_type='attachment' and ID=(select meta_value from con_postmeta where post_id='" . $post->ID . "' and meta_key='_thumbnail_id' LIMIT 1)";
    $query = mysqli_query($mysqli, $sql);
    $result = mysqli_fetch_array($query);
    disconnect($mysqli);
    return $result[0];
}