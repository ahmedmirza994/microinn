<?php include_once('header.php'); ?>
<nav class="navbar navbar-expand-lg fixed-top navColor">
    <a class="navbar-brand" href="#">
        <img src="../images/microinn1.jpeg" alt="MicroInn" style="width:72px; height:40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style = "background-color: white">
        <span class="navbar-toggler-icon" style = "background:white;" > <hr> </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="studyProgramDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Study Programs
                </a>
                <div class="dropdown-menu" aria-labelledby="studyProgramDropdownMenuLink">
                    <a class="dropdown-item" href="#">VU Courses</a>
                    <a class="dropdown-item" href="#">MicroInn Courses</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="eventsDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Events
                </a>
                <div class="dropdown-menu" aria-labelledby="eventsDropdownMenuLink">
                    <?php
                        $query = "select * from categories;";
                        $conn = getDbConnection();
                        $events = mysqli_query($conn,$query);
                        $num_rows = mysqli_num_rows($events);
                        if($num_rows > 0) {
                            while($row = mysqli_fetch_assoc($events) ){
                                $cat_title =  $row['cat_title'];
                                $cat_id =  $row['cat_id'];
                                echo "<a class='dropdown-item' href='./event.php?event={$cat_id}'>$cat_title</a>";
                            }
                        }
                    ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About Us
                </a>
                <div class="dropdown-menu" aria-labelledby="aboutUsDropdownMenuLink">
                    <a class="dropdown-item" href="#">Introduction</a>
                    <a class="dropdown-item" href="#">CEO Speech</a>
                    <a class="dropdown-item" href="#">Campus Manager</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>