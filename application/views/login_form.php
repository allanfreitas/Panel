<div id="main">
    <?php echo form_open('login/validate'); ?>
    <label for="username">Username: </label>
    <?php echo form_input('username'); ?>
    <label for="password">Password: </label>
    <?php echo form_password('password'); ?>
    <?php echo form_submit('login', 'Login'); ?>
</div>