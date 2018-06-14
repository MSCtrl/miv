<div id="main">

    <div id="form-background" class="pure-g">

        <div class="pure-u-1-2">
            <h3>Announcement Dashboard</h3>
            <?php echo form_open('announcement', array('class'=>'pure-form pure-form-stacked'));?>
            <fieldset>

                <label for="title">Title</label>
                <input id="title" type="text" placeholder="Title" size="48">
                <span class="pure-form-message"></span>

                <label for="contents">Contents</label>
                <textarea id="contents" type="text" placeholder="Contents" rows="4" cols="50"></textarea>
                <span class="pure-form-message"></span>


                <label for="imgbtn">Image (if any)</label><button class="pure-button pure-button-primary" id="imgbtn" onclick="triggerFileUpload()">Upload</button>
                <input type="file" id="img_inputfile" name="image" accept="image/x-png,image/gif,image/jpeg"></input>

                <input class="pure-button button-success" name="post" type="submit" value="Post"></input>
            </fieldset>
            </form>
        </div>

        <div class="right-panel pure-u-1-2">
            <img class="img-up-preview" src="https://farm9.staticflickr.com/8534/8888558290_dd3bbaf4f2_b.jpg"></img>
        </div>

    </div>


</div>
</div>
</body>
</html>