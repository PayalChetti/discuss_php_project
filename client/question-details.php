<div class="container">
    <h1 class="heading">Question Details</h1>
    <div class="row">
        <div class="col-8">
            <?php
            include('./common/db.php');
            $query = "select * from questions where id = $qid";
            $result = $conn->query($query);

            $row = $result->fetch_assoc();
            $cid = $row['category_id'];
            echo "<h4 class='margin_bottom_15 question_title'> Question : " . $row['title'] . "</h4>
    <p class='margin_bottom_15'>" . $row['description'] . "</p>";
            include('answers.php');
            ?>
            <form action="./server/requests.php" method="post">
                <input type="hidden" value="<?php echo $qid ?>" name="question_id" />
                <textarea name="answer" class="form-control margin_bottom_15"></textarea>
                <button name="btn_answer" type="submit" class="btn btn-primary margin_bottom_15">Write your answer</button>
            </form>
        </div>
        <div class="col-4">
            <?php
            $categoryquery = "select name from categories where id = $cid";
            $categoryresult = $conn->query($categoryquery);

            $categoryrow = $categoryresult->fetch_assoc();
            $categoryname = $categoryrow['name'];

            echo "<div><h1>" . ucfirst($categoryname) . "</h1></div>";

            $query = "select * from questions where category_id = $cid and id!=$qid";
            $result = $conn->query($query);

            foreach ($result as $rows) {
                $qid = $rows['id'];
                $title = $row['title'];
                echo "<div class='question_list'><h4><a href=?q-id=$qid>$title</a></h4></div>";
            }
            ?>
        </div>
    </div>
</div>