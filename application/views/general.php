
<div id="main">
    <div class="header">
        <img id="logo" src="<?php echo base_url(); ?>/img/miv-logo.png"></img>
    </div>

    <div class="content">
        <?php echo $this->ance_model->get_announcement2();?>
    </div>

    <div class="post-archive-menu">
        <p class="post-archive-p">Posts of more than <?php echo $this->config->item('uptime'); ?> days ago can be found in the archive.</p>
        <a class="post-archive-a" href="#">Browse Archive</a>
    </div>

</div>
</div>
</body>
</html>