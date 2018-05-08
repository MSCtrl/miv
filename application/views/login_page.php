<!DOCTYPE html>
<html>
  <head>
    <!--Import pure.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/normalize.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/pure-release-1.0.0/pure.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/miv.login.css" media="screen,projection"/>
    <script src="<?php echo base_url(); ?>js/vue.js"></script>
    <script src="<?php echo base_url(); ?>js/login.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MIV</title>
  </head>

  <body>

    <!--Login Form box-->
    <div id="login-box">
        <div id="login-box-header">
            <img id="login-box-header-img" src="<?php echo base_url(); ?>img/miv-logo.png">
        </div>
        <div id="login-box-content">
            <?php echo form_open('login', array('class'=>'pure-form pure-form-stacked'));?>
                <fieldset>
                    
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text"></input>

                    <label for="password">Password</label>
                    <input id="password" name="password" type="password"></input>

                </fieldset>
                <input type="submit" name="submit" class="pure-button pure-button-primary" value="Sign In"></input>
            </form>
        </div>

        <!--For error message-->
        <div id="error-msg" class="error-message-box"><?php echo validation_errors(); ?> <?php if (isset($error)){ echo $error;}?> </div>
    </div>


  </body>
</html>