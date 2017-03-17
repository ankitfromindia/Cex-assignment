<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php echo form_open('', array('role'=>'form')); ?>

    <div class="row">
        <?php // username ?>
        <div class="form-group col-sm-4<?php echo form_error('username') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input username'), 'username', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_input(array('name'=>'username', 'value'=>set_value('username', (isset($user['username']) ? $user['username'] : '')), 'class'=>'form-control')); ?>
        </div>
    </div>

    <div class="row">
        <?php // first name ?>
        <div class="form-group col-sm-4<?php echo form_error('first_name') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input first_name'), 'first_name', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_input(array('name'=>'first_name', 'value'=>set_value('first_name', (isset($user['first_name']) ? $user['first_name'] : '')), 'class'=>'form-control')); ?>
        </div>

        <?php // last name ?>
        <div class="form-group col-sm-4<?php echo form_error('last_name') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input last_name'), 'last_name', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_input(array('name'=>'last_name', 'value'=>set_value('last_name', (isset($user['last_name']) ? $user['last_name'] : '')), 'class'=>'form-control')); ?>
        </div>
    </div>

    <div class="row">
        <?php // email ?>
        <div class="form-group col-sm-4<?php echo form_error('email') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input email'), 'email', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_input(array('name'=>'email', 'value'=>set_value('email', (isset($user['email']) ? $user['email'] : '')), 'class'=>'form-control', 'type'=>'email')); ?>
        </div>
        
        <div class="form-group col-sm-4<?php echo form_error('mobile') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input mobile'), 'mobile', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_input(array('name'=>'mobile', 'value'=>set_value('mobile', (isset($user['mobile']) ? $user['mobile'] : '')), 'class'=>'form-control', 'type'=>'text')); ?>
        </div>
    </div>

    <div class="row">
        <?php // email ?>
        <div class="form-group col-sm-6<?php echo form_error('address') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input address'), 'address', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_textarea(array('name'=>'address', 'value'=>set_value('address', (isset($user['address']) ? $user['address'] : '')), 'class'=>'form-control')); ?>
        </div>
        
    </div>

    <div class="row">
        <?php // email ?>
        <div class="form-group col-sm-4<?php echo form_error('city') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input city'), 'city', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_input(array('name'=>'city', 'value'=>set_value('city', (isset($user['city']) ? $user['city'] : '')), 'class'=>'form-control', 'type'=>'city')); ?>
        </div>
        
         <div class="form-group col-sm-4<?php echo form_error('state') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input state'), 'state', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_input(array('name'=>'state', 'value'=>set_value('state', (isset($user['state']) ? $user['state'] : '')), 'class'=>'form-control', 'type'=>'state')); ?>
        </div>
        
         <div class="form-group col-sm-4<?php echo form_error('pincode') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input pincode'), 'pincode', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_input(array('name'=>'pincode', 'value'=>set_value('pincode', (isset($user['pincode']) ? $user['pincode'] : '')), 'class'=>'form-control', 'type'=>'pincode')); ?>
        </div>
        
        
    </div>

 

    <div class="row">
        <?php // password ?>
        <div class="form-group col-sm-4<?php echo form_error('password') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input password'), 'password', array('class'=>'control-label')); ?>
            <?php if ($password_required) : ?><span class="required">*</span><?php endif; ?>
            <?php echo form_password(array('name'=>'password', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
        </div>

        <?php // password repeat ?>
        <div class="form-group col-sm-4<?php echo form_error('password_repeat') ? ' has-error' : ''; ?>">
            <?php echo form_label(lang('users input password_repeat'), 'password_repeat', array('class'=>'control-label')); ?>
            <?php if ($password_required) : ?><span class="required">*</span><?php endif; ?>
            <?php echo form_password(array('name'=>'password_repeat', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
        </div>
        <?php if ( ! $password_required) : ?>
            <span class="help-block"><br /><?php echo lang('users help passwords'); ?></span>
        <?php endif; ?>
    </div>

    <?php // buttons ?>
    <div class="row pull-right">
        <a class="btn btn-default" href="<?php echo $cancel_url; ?>"><?php echo lang('core button cancel'); ?></a>
        <?php if ($this->session->userdata('logged_in')) : ?>
            <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> <?php echo lang('core button save'); ?></button>
        <?php else : ?>
            <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> <?php echo lang('users button register'); ?></button>
        <?php endif; ?>
    </div>

<?php echo form_close(); ?>
