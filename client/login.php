<div class="container">
    <h1 class="heading">Login</h1>
    <form action="./server/requests.php" method="post">
        <div class="offset-sm-3 col-6 margin_bottom_15">
            <label for="email" class="form-label">Email Id</label>
            <input type="email" class="form-control" id="email" name="email" />
        </div>
        <div class="offset-sm-3 col-6 margin_bottom_15">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" />
        </div>

        <div class="offset-sm-3 col-6 margin_bottom_15">
            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </div>
    </form>
</div>