<?php include_once('header.php'); ?>
<nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
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
                    <a class="dropdown-item" href="#">Sports Gala</a>
                    <a class="dropdown-item" href="#">Programming Contest</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Events</a>
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
        </ul>
    </div>
</nav>