<?php
    include_once('includes/topNav.php');
?>  

    <div style = "margin-top : 59px;" >
    <?php
        $query = "select * from post_images order by rand() limit 5";
        $conn = getDbConnection();
        $posts = mysqli_query($conn,$query);
        $num_rows = mysqli_num_rows($posts);
        $count = 0;
        if($num_rows > 0) { ?>
        <?php
            $slides = array();
            while($row = mysqli_fetch_assoc($posts) ){
                $slides[] = $row['path'];
            }
            
        ?>
            
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <?php    
                        foreach($slides as $key => $slide){
                            echo "<li class=''.($key==0?' active':'').'' data-target='#demo' data-slide-to='{$key}'></li>";
                        }
                    ?>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    
                    <?php    
                        foreach($slides as $key => $slide){
                            echo('
                                <div class="text-center carousel-item'.($key==0?' active':'').'">
                                    <img src="./images/'.$slide.'" alt="" width="auto" height="500px">
                                </div>
                            ');
                        }
                    ?>
                    </div>
                </div>
            </div>
        
    <?php    }
    ?>
    </div>
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="text-center">WELCOME MESSAGE</h1> 
            <p class="text-center">
                Welcome New Students Dear VU Students, Welcome and congratulations on your acceptance 
                to the Virtual University of Pakistan. We are thrilled that you will be joining our vibrant family! 
                We are committed to helping you create a positive university experience, 
                which we hope will be one of the best experiences of your life! 
                Successful students tend to take advantage of the numerous opportunities VU offers. 
                It is our hope you will do the same. As a new student at VU, you are bound to have questions. 
                Orientation is designed around you, helping to uncover the answers to the questions you have, 
                and providing you information about campus resources, programs and services. By the time you leave orientation,
                you’ll be on your way to becoming a successful VU student. You will learn a lot about VU at Orientation.
                The program is an opportunity for you to learn how to navigate campus and will introduce CCI community.
            </p>
        </div>
    </div>

    <div class="container" style="margin-bottom:30px;">
        <h1 class="text-center">Offers</h1>
        <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4 list-style">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center list-group-item-info">Internationally recognised degree</li>
                        <li class="list-group-item text-center list-group-item-info">Affordable Fee</li>
                        <li class="list-group-item text-center list-group-item-info">Country best professors</li>
                        <li class="list-group-item text-center list-group-item-info">Education to both males and females in their home towns</li>
                    </ul>
                </div>
            <div class="col-md-4"></div>
        </div>
    </div>

<?php
    include_once('includes/footer.php');
?>