<div>
    <h1 class="heading">Categories</h1>
    <?php
    $query = "select * from `categories`";
    $result = $conn->query($query);

    foreach ($result as $rows) {
        $name = ucfirst($rows['name']);
        $id = $rows['id'];
        echo "<div class='row question_list'><h4><a href='?c-id=$id'>$name</a></h4></div>";
    }; ?>
</div>