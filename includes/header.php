<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <?php if (!isset($_SESSION['email'])) { ?>
<a class="navbar-brand" href="index.php">E-Store</a>
    <?php  } else { ?>
<a class="navbar-brand" href="home.php">E-Store</a>
<?php } ?>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <li><a href = "about_us.php"><span class = "glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a href = "contact_us.php"><span class = "glyphicon glyphicon-earphone"></span>Contact Us</a></li>
                   
                    ?>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#exampleModalLong"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                     <li><a href = "about_us.php"><span class = "glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a href = "contact_us.php"><span class = "glyphicon glyphicon-earphone"></span>Contact Us</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>



