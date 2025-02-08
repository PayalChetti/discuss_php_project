<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="./"><img src="./public/logo.png" alt='logo' height="100px" width="100px" /></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="./">Home</a>
                </li>

                <?php
                if ($_SESSION == NULL) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?login=true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?signup=true">Signup</a>
                    </li>
                <?php } else if ($_SESSION["users"]["username"]) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./server/requests.php?logout=true">Logout(<?php echo ucfirst($_SESSION['users']['username']); ?>)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?ask=true">Ask Question</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?u-id=<?php echo $_SESSION['users']['user_id']; ?>">My Questions</a>
                    </li>
                <?php } else {
                    $_SESSION["users"]["username"] = NULL;
                } ?>
                <li class="nav-item">
                    <a class="nav-link" href="?latest=true">Latest Questions</a>
                </li>
            </ul>
        </div>
        <form class="d-flex" role="search" action="">
            <input class="form-control me-2" type="search" placeholder="Search Question" name="search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>