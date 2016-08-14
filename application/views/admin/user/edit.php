<div class="modal-header">
    <h4 class="modal-title"><?= empty($user->id)? 'Add a new user' : 'Edit user'?></h4>
    <p>Please log in using your credentials</p>
</div>
<div class="modal-body">
    <?= validation_errors();
    if ($msg = $this->session->flashdata('error')) {
        echo $msg;
    }
    ?>
    <?= form_open(); ?>
    <div class="form-group">
        <label for="name">Name</label>
        <?= form_input(array(
            'name' => 'name',
            'id' => 'name',
            'type' => 'text',
            'class' => 'form-control',
            'value' => set_value('name', $user->name)
        )); ?>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <?= form_input(array(
            'name' => 'email',
            'id' => 'email',
            'type' => 'email',
            'class' => 'form-control',
            'value' => set_value('email', $user->email)
        )); ?>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <?= form_password(array(
            'name' => 'password',
            'id' => 'password',
            'class' => 'form-control'
        )); ?>
    </div>
    <div class="form-group">
        <label for="password_confirm">Confirm password</label>
        <?= form_password(array(
            'name' => 'password_confirm',
            'id' => 'password_confirm',
            'class' => 'form-control'
        )); ?>
    </div>
    <?= form_submit(array(
        'value' => 'Save',
        'class' => 'btn btn-primary',
    )) ?>
    <?= form_close(); ?>
</div>
