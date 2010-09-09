<div id="main">
    <div id="login_box" class="box_gradient box_shadow">
        <h2 class="textshadow">Login</h2>
        <?php echo validation_errors('<div class="errors"><p>','<a href="#">X</a></p></div>'); ?>
        <?php echo form_open('login/validate'); ?>
        <label for="username">Username: </label>
        <?php echo form_input('username'); ?>
        <label for="password">Password: </label>
        <?php echo form_password('password'); ?>
        <?php echo form_submit('login', 'Login'); ?>
        <?php echo form_close(); ?>
    </div>
</div>