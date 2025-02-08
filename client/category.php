<select class="form-control" name="category" id="category">
    <option>Select A Category</option>
    <?php
    include('./common/db.php');
    $query = "select * from categories";
    $result = $conn->query($query);

    foreach ($result as $rows) {
        $name = ucfirst($rows['name']);
        $id = $rows['id'];
        echo "<option value=$id>$name</option>";
    }
    ?>
</select>