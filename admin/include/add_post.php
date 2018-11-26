<?php
    if(isset($_POST['create_post'])){
        $post_title = $_POST['post_title'];
        $post_cat_id = $_POST['post_category'];

        $post_content = $_POST['post_content'];
        $post_date = date('d-m-y');

        $obj = new Database;
        $obj->connect();
        $postID =  $obj->insert("posts","post_title,post_cat_id,post_content,post_date","'$post_title','$post_cat_id','$post_content',now()");
        

        $ids = explode(",",$_POST['images_ids']);

        foreach($ids as $id){
            $obj->update("post_images","post_id=$postID","id",$id);
        }
        
        
        
        
        echo "<p class='bg-success'>Event Created.</a></p>";

    }
?>
<div class="form-group">
    <label for="post_image">Event Image</label>
    <form style="display:none;">
        <input id="file_upload" name="file_upload" type="file" multiple="true">
    </form>
    <div class="uploadifyPNL">
        <form action="include/uploadify.php" class="dropzone" id="my-awesome-dropzone"></form>
    </div>
</div>
<form action="" method="post">
    <div class="form-group">
        <label for="title">Event Title</label>
        <input type="text" name="post_title" id="" class="form-control" >
    </div>
    <div class="form-group">
        <label for="category">Event Category</label>
        <select name="post_category" id="">
            <?php
                $obj = new Database;
                $obj->connect();
                $row =  $obj->select("*","categories","");
                foreach($row as $res){
                    $cat_title = $res["cat_title"];
                    $cat_id = $res["cat_id"];
                    echo "<option value='{$cat_id}'>{$cat_title}</option>";
                }    
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="post_content">Event Content</label>
        <textarea class="form-control "name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
    <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_post" value="Publish Event">
    </div>

    <input type="hidden" name="images_ids" id="images_ids" />
</form>