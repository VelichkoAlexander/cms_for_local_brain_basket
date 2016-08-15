<div class="modal-header">
    <h4 class="modal-title">Log in</h4>
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
        <label for="email">Email</label>
        <?= form_input(array(
            'name' => 'email',
            'id' => 'email',
            'type' => 'email',
            'required' => 'true',
            'class' => 'form-control'
        )); ?>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <?= form_password(array(
            'name' => 'password',
            'id' => 'password',
            'required' => 'true',
            'class' => 'form-control'
        )); ?>
    </div>
    <?= form_submit(array(
        'value' => 'Log in',
        'class' => 'btn btn-primary',
    )) ?>
    <?= form_close(); ?>
</div>