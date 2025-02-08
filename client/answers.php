<div class="container">
    <div class="offset-sm-1">
        <h3>Answers:</h3>
        <?php
        $query = "select * from answers where question_id = $qid";
        $result = $conn->query($query);
        foreach ($result as $rows) {
            $answer = $rows['answer'];
            echo "<div class='row'><p class='answer-wrapper'>$answer</p></div>";
        }
        ?>
    </div>
</div>