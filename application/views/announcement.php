<div id="main">

    <h3>Announcement Dashboard</h3>

    <?php echo form_open('announcement');?>
    <table>
        <tr>
            <td>Title</td>
            <td><input id="title" name="title" type="text"></input></td>
        </tr>
        <tr>
            <td>Contents</td>
            <td><textarea id="contents" name="contents"></textarea></td>
        </tr>
        <tr>
            <td>Image (if any)<button id="imgbtn">Upload</button></td>
            <td><input type="file" id="inputfile_img" name="image" accept="image/x-png,image/gif,image/jpeg"></input></td>
        </tr>
    </table>
    <input name="post" type="submit" value="Post"></input>
    </form>


</div>
</div>
</body>
</html>