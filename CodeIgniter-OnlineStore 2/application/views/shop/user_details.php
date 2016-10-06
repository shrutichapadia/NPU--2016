<body>
    <?php echo validation_errors(); ?>
    <?php echo form_open('/cust/user_details'); ?>
    First Name 
            <?php
            
    echo form_input(array('name' => 'first_name', 
    'value' =>  '', 'maxlength' => '125',
            'size' => '50'));
    ?><br />
    Last Name:<?php
    echo form_input(array('name' => 'last_name',
        'value' => '', 'maxlength' => '125',
        'size' => '50'));
    ?><br />
    Email<?php
    echo form_input(array('name' => 'email',
        'value' => '', 'maxlength' => '255',
        'size' => '50'));
    ?><br />
    Confirm Email<?php
    echo form_input(array('name' =>
        'email_confirm', 'value' => '',
        'maxlength' => '255', 'size' => '50'));
    ?>
    <br />
<?php
echo form_textarea(array('name' =>
    'payment_address', 'value' => 'Payment Address',
    'rows' => '6', 'cols' => '40',
    'size' => '50'));
?><br />
<?php echo form_submit('', 'Enter'); ?><br />
<?php echo form_close(); ?>
</form>
</body>