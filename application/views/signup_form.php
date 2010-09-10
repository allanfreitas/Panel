<div id="main">
    <h1>Create an Account</h1>
    <fieldset class="signup_box">
        <legend>Personal Information</legend>
    <?php
        echo form_open('signup/submit');
        echo form_label('First Name: ', 'first_name');
        echo form_input('first_name');
        echo form_label('Last Name: ', 'last_name');
        echo form_input('last_name');
        echo form_label('Email Address: ', 'email_address');
        echo form_input('email_address');
    ?>
    </fieldset>
    <fieldset class="signup_box">
        <legend>Login Information</legend>
    <?php
        echo form_label('Username: ', 'username');
        echo form_input('username');
        echo form_label('Password: ', 'password');
        echo form_password('password');
        echo form_label('Confirm Password', 'passconf');
        echo form_password('passconf');
        echo form_submit('submit', 'Create Account');
        echo form_close();
        echo validation_errors('<div class="errors"><p>','<a href="#">X</a></p></div>');
    ?>
    </fieldset>
</div>

 
