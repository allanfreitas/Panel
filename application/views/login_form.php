<div id="main">
    <div id="login_box" class="box_gradient box_shadow">
        <h2 class="textshadow">Login</h2>
        <?php echo validation_errors('<div class="errors"><p>','<a href="#">X</a></p></div>'); ?>
        <?php echo form_open('login/validate'); ?>
        <?php echo form_input('username', 'Username'); ?>
        <?php echo form_password('password', 'Password'); ?>
        <?php echo form_submit('login', 'Login'); ?>
        <?php
            $attr = array('id' => 'signup');
            echo anchor('signup', 'Create Account', $attr);
        ?>
        <?php echo form_close(); ?>
    </div>
</div>