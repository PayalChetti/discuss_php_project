<div class="container">
    <h1 class="heading">Sign Up</h1>
    <form action="./server/requests.php" method="post">
        <div class="offset-sm-3 col-6 margin_bottom_15">
            <label for="username" class="form-label">User Name</label>
            <input type="text" class="form-control" id="username" name="username" />
        </div>
        <div class="offset-sm-3 col-6 margin_bottom_15">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" />
        </div>
        <div class="offset-sm-3 col-6 margin_bottom_15">
            <label for="email" class="form-label">Email Id</label>
            <input type="email" class="form-control" id="email" name="email" />
        </div>
        <div class="offset-sm-3 col-6 margin_bottom_15">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" />
        </div>
        <div class="offset-sm-3 col-6 margin_bottom_15">
            <button type="submit" name="signup" class="btn btn-primary">SignUp</button>
        </div>
    </form>
</div>