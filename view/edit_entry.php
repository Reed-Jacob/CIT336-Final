<?php include 'header.php'; ?>
<main>
    <div class="modal-content">
    <div id="submit-area">
        <br>
        <h2>Edit Content</h2>
        <h3><?php echo $title ?></h3>
        <br>           
            <form action="." method="post" id="submit_edits">
                <input type="hidden" name="action" value="submit_edits">
                <input type="hidden" name="content_id" value="<?php echo $content_id ?>" />
                    
                    <label>Title:</label>
                    <input type="text" name="title" value="<?php echo $title ?>" required/>  
                    <br>
                    <label>Platform:</label>
                    <input type="text" name="platform" value="<?php echo $platform ?>" required/>
                    <br>
                    <label>Year:</label>
                    <input type="number" name="year" value="<?php echo $year ?>" min="1972" max="2016" required/>
                    <br>
                    <label>YouTube&nbsp;ID:</label>
                    <input type="text" name="video" value="<?php echo $video ?>" required maxlength="11" minlength="11"/>
                    <br>
                    <label>Description:</label><br />
                    <textarea name="description" rows="20" cols="20" value="<?php echo $description ?>" required/><?php echo $description ?></textarea>
                    <a href="?action=list_content" class="hvr-icon-back">Back&nbsp;</a> &nbsp;
                    <button type="submit" name="Submit" value="Submit" class="hvr-icon-pulse-grow" onclick="return confirm('Are you sure?')">Submit</button>
            </form>
    </div>
    </div>
</main>
<?php include 'footer.php'; ?> 