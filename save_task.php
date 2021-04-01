<?php 

include("db.php");

if (isset($_POST['save_task'])){

    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        die("Query faild");
    }
    /*mensaje de exito*/
    $_SESSION['message'] = 'Task Saved succesfully';

    /*alerta con color*/
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}

?>