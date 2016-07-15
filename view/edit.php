<?php include 'header.php'; ?>
<main>
    <div class="modal-content">
    <div id="edit-area">
        <br>
        <h2>Edit Content</h2>
        <br>
        <div id="center-table">
        <table>
            <!-- Top row -->
            <tr>
                <th>Title</th>
                <th>Platform</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            
            <!-- Subsequent rows -->
            <?php foreach ($contents as $content) : ?>
            <tr>
                <td><?php echo $content['title']; ?></td>
                <td><?php echo $content['platform']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="start_edit_content">
                    <input type="hidden" name="content_id"
                           value="<?php echo $content['content_id']; ?>" />
                    <input type="hidden" name="title"
                           value="<?php echo $content['title']; ?>">
                    <input type="hidden" name="platform"
                           value="<?php echo $content['platform']; ?>">
                    <input type="hidden" name="year"
                           value="<?php echo $content['year']; ?>">
                    <input type="hidden" name="video"
                           value="<?php echo $content['video']; ?>">
                    <input type="hidden" name="description"
                           value="<?php echo $content['description']; ?>">
                    <button type="submit" value="Edit" class="hvr-icon-grow">Edit</button>
                </form></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_content">
                    <input type="hidden" name="content_id"
                           value="<?php echo $content['content_id']; ?>">
                    <button type="submit" value="Delete" class="hvr-icon-buzz-out" onclick="return confirm('Are you sure?')">Delete</button>
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
            
        </div>
        <br>
        <a href="../view" class="hvr-icon-back">Back&nbsp;</a> &nbsp;
    </div>
    </div>
</main>
<?php include 'footer.php'; ?> 