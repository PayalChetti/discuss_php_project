<?php
session_start();
include('../common/db.php');
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $user = $conn->prepare("Insert into `users`(`id`,`username`,`email`,`password`,`address`) 
    values(NULL,'$username','$email','$password','$address')");

    $result = $user->execute();


    if ($result) {
        $_SESSION["users"] = ["username" => $username, "email" => $email, "user_id" => $user->insert_id];
        header('location:/discuss_php_project');
    } else {
        echo 'User not added';
    }
} elseif (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = '';
    $user_id = 0;

    $query = "select * from users where email = '$email' and password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {

        foreach ($result as $rows) {
            $username = $rows['username'];
            $user_id = $rows['id'];
        }

        $_SESSION["users"] = ["username" => $username, "email" => $email, "user_id" => $user_id];
        header('location:/discuss_php_project');
    }
} elseif (isset($_GET['logout'])) {
    session_unset();
    header('location:/discuss_php_project');
} elseif (isset($_POST['ask'])) {
    // print_r($_POST);
    // print_r($_SESSION);
    // die();
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];
    $user_id = $_SESSION['users']['user_id'];

    $question = $conn->prepare("Insert into `questions`(`id`,`title`,`description`,`category_id`,`user_id`) 
    values(NULL,'$title','$description','$category_id','$user_id')");

    $result = $question->execute();


    if ($result) {
        header('location:/discuss_php_project');
    } else {
        echo 'Question not added';
    }
} elseif (isset($_POST['btn_answer'])) {
    $answer = $_POST['answer'];
    $question_id = $_POST['question_id'];
    $user_id = $_SESSION['users']['user_id'];

    $answer = $conn->prepare("Insert into `answers`(`id`,`answer`,`question_id`,`user_id`) 
    values(NULL,'$answer','$question_id','$user_id')");

    $result = $answer->execute();


    if ($answer) {
        header("location:/discuss_php_project?q-id=$question_id");
    } else {
        echo 'Answer not added';
    }
} else if (isset($_GET['delete'])) {
    $qid = $_GET['delete'];

    $query = $conn->prepare("Delete from questions where id = $qid");
    $result = $query->execute();

    if ($result) {
        header("location:/discuss_php_project");
    } else {
        echo 'Question not deleted';
    }
}
