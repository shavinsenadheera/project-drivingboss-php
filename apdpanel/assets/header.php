<nav class="navbar fixed-top navbar-expand-lg navbar-dark black">
    <a class="navbar-brand" href="#"><strong>Admin Panel v0.1</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="adminpanel.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="usershowing.php">User Showing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adminhandling.php">Admin Handling</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profilehandling.php">Profile Handling</a>
            </li>
        </ul>
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link text-white"></i>Hi, <?php echo $mastername?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="logout.php"><i class="fas fa-power-off text-white"></i></a>
            </li>

        </ul>
    </div>
</nav>