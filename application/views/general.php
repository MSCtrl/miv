<div id="main">
    <div class="header">
        <img style="height: 70px" src="<?php echo base_url(); ?>/img/miv-logo.png"></img>
    </div>

    <div class="content">
        <?php
            echo $this->ance_model->get_announcement2();
        ?>
    </div>

</div>
</div>
</body>
</html>