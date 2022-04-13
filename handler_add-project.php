<?php

if (isset($_POST) && !empty($_POST)) {
    $project_title = strip_tags($_POST['data_title']);
    $project_description = strip_tags($_POST['data_description']);

    require_once("db_connection.php");

    $sql = 'INSERT INTO table_projet (projet_title, projet_description) VALUES (:project_title, :project_description);';
    $query = $db->prepare($sql);
    $query->bindValue(':project_title', $project_title, PDO::PARAM_STR);
    $query->bindValue(':project_description', $project_description, PDO::PARAM_STR);
    $query->execute();
    echo '<div>Projet added.</div>';
    echo '<div><a href="index.php"><button>Back</button></a></div>';
} else {
    echo "Complete all fields. ";
    echo '<div><a href="index.php"><button>Back</button></a></div>';
}
?>