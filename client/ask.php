<div class="container">
    <h1 class="heading">Ask Question</h1>
    <form action="./server/requests.php" method="post">
        <div class="offset-sm-3 col-6 margin_bottom_15">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" />
        </div>
        <div class="offset-sm-3 col-6 margin_bottom_15">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="offset-sm-3 col-6 margin_bottom_15">
            <label for="category" class="form-label">Category</label>
            <?php include('category.php'); ?>
        </div>
        <div class="offset-sm-3 col-6 margin_bottom_15">
            <button type="submit" class="btn btn-primary" name="ask">Ask Question</button>
        </div>
    </form>
</div>