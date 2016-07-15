<?php include 'header.php'; ?>
<main>
    <div class="modal-content">
    <div id="submit-area">
        <br>
        <h1>Add Content</h1>
        <p>Have a video you think belongs on VG Nostalgia? Add it yourself!<br><br>
            All fields required (and MUST be valid!). Submit ONLY the YouTube ID, not the full URL.<br>
            Example: www.youtube.com/watch?v=<mark>FA6kfT_xs2k</mark></p>
                <form action="index.php" method="post" id="submit_content">
                    <input type="hidden" class="submit-content" name="action" value="add_content">
                    
                    <label>Title:</label>
                    <input type="text" class="submit-content" name="title_name" id="Title" required/>  

                    <label>Platform:</label>
                    <input type="text" class="submit-content" name="platform" id="Platform" required/>

                    <label>Year:</label>
                    <input type="number" class="submit-content" name="year" id="Year" min="1972" max="2016" required/>

                    <label>YouTube&nbsp;ID:</label>
                    <input type="text" class="submit-content" name="video_url" id="Video" required maxlength="11" minlength="11"/>

                    <label>Description:</label><br />
                    <textarea name="description" rows="20" cols="20" id="Description" required></textarea>
                    <a href="../view" class="hvr-icon-back">Back&nbsp;</a> &nbsp;
                    <button type="submit" name="Submit" value="Submit" class="hvr-icon-pulse-grow">Submit</button>
                </form>
    </div>
    </div>
</main>
<?php include 'footer.php'; ?>