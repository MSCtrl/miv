<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MIV Profile page">
    <title>MIV</title>
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="<?php echo base_url(); ?>css/layouts/side-menu.css"/>
            <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/normalize.css" media="screen,projection"/>
            <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/pure-release-1.0.0/pure.css"  media="screen,projection"/>
            <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/miv.cmenu.css" media="screen,projection"/>
        <?php
            // if $vn is not present in the config
            if (!$viewname) {
                echo "<!-- this view has no js or css-->";
            }
            else {
                foreach ($this->config->item($viewname) as $key => $value) {
                    if ($value=="css") {
                        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
                        echo base_url();
                        echo "css/".$key."\" media=\"screen,projection\"/>";
                    }
                    elseif ($value=="js") {
                        echo "<script src=\"";
                        echo base_url();
                        echo "js/".$key."\"></script>";
                    }
                }
            }
        ?>
        <!--<![endif]-->
</head>

<body>

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <div class="menu-container">
                <div class="menu-left"><a class="pure-menu-heading" href="<?php echo base_url(); ?>profile"><?php echo $this->users_model->get_username($_SESSION['users_mivdb_id']); ?></a></div><div class="menu-right"><a class="pure-menu-heading" href="<?php echo base_url(); ?>general/logout">X</a></div>
            </div>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="<?php echo base_url(); ?>general" class="pure-menu-link">General</a></li>
                <li class="pure-menu-item"><a href="<?php echo base_url(); ?>inventory" class="pure-menu-link">Inventory</a></li>
                <li class="pure-menu-item"><a href="<?php echo base_url(); ?>maintenance" class="pure-menu-link">Maintenance</a></li>
                <li class="pure-menu-item"><a href="<?php echo base_url(); ?>reports" class="pure-menu-link">Reports</a></li>
                <li class="pure-menu-item"><a href="<?php echo base_url(); ?>announcement" class="pure-menu-link">Announcement</a></li>
                <li class="pure-menu-item"><a href="<?php echo base_url(); ?>administration" class="pure-menu-link">Administration</a></li>
                <li class="pure-menu-item"><a href="control_panel" class="pure-menu-link">Control Panel</a></li>
            </ul>
        </div>
        
    </div>

    <div class="message-bar">
        <?php echo '<p>'.$_SESSION['message'].'</p>';?>
    </div>