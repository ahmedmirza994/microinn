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

    <?php
        if(isset($_GET['event'])) {
            $eventId = $_GET['event'];
            $query = "select a.post_id, b.* from posts a, post_images b where a.post_cat_id = {$eventId} and a.post_id=b.post_id";
            $conn = getDbConnection();
            $posts = mysqli_query($conn,$query);
            $num_rows = mysqli_num_rows($posts);
            if($num_rows > 0) {
                $images = array();
                while($row = mysqli_fetch_assoc($posts) ){
                    $images[] = $row['path'];
                } 
    ?>
            <div class="container">
                <div class="column">
                    <h2>Gallery</h2>
                    <ul class="row flex-sm-fill align-items-center d-flex bd-highlight list-inline">
                        <?php
                            foreach($images as $key => $image) {
                                if($image != null) {
                                    echo ('
                                        <li class="p-4 w-25 flex-fill bd-highlight">
                                            <img class="img-thumbnail" src="./images/'.$image.'" style="width:100%;">
                                        </li>
                                    ');
                                }
                            } 
                        ?>
                    </ul>
                </div>
            </div>                
    <?php   }
        }
    ?>

<?php
    include_once('includes/footer.php');
?>