<?php include 'header.php'; ?>
<main>
    <div id="content">
        <!-- Video Player start -->
        <div id="videoWrapper">          
            <div id="player">
                <iframe width="1336" height="768" 
                        src="https://www.youtube.com/embed/<?php 
                        echo($video_url) ?>?&rel=0&amp;controls=0&amp;showinfo=0;" 
                        allowfullscreen></iframe>
            </div>
        </div>   
        <!-- Video Player end -->
    </div> 
        <!-- Search / List start -->
    <div id="sidebar">
        <div id="titlesDiv">
            <h3>Available Titles</h3>
                <nav>
                    <ul>
                        <!-- display links for all titles -->
                        <?php foreach($contents as $content) : ?>
                        <li>
                            <a href="?content_id=<?php echo $content['content_id']; ?>">
                                <?php echo $content['title']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
        </div>
        <div id="content_navigation">
            <a href="submit.php" class="hvr-icon-rotate">Add &nbsp;</a> &nbsp;
            <a href ="?action=random" class="hvr-icon-spin">Random &nbsp;</a> &nbsp; 
            <a href="?action=list_content" class="hvr-icon-grow">Edit &nbsp;</a>
            <br><br>
        </div>
    </div>
    <div id="description">
        <div id="welcomeContent">
            <h3><?php echo($title_name); ?></h3>
            <p>
                <span id="bold">Platform:</span> <?php echo($platform); ?><br>
                <span id="bold2">Year:</span> <?php echo($year); ?><br>
                <?php echo($description); ?>
            </p>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>