<h4><?= empty($page->id) ? 'Add a new page' : 'Edit page' . $page->title; ?></h4>


<?= validation_errors();
if ($msg = $this->session->flashdata('error')) {
    echo $msg;
}
?>
<?= form_open(); ?>
<div class="form-group">
    <label >Parent</label>
    <?= form_dropdown('parent_id', $pages_no_parents, $this->input->post('parent_id') ? $this->input->post('parent_id') : $page->parent_id); ?>
</div>
<div class="form-group">
    <label for="title">Title</label>
    <?= form_input(array(
        'name' => 'title',
        'id' => 'title',
        'type' => 'text',
        'class' => 'form-control',
        'value' => set_value('title', $page->title)
    )); ?>
</div>
<div class="form-group">
    <label for="slug">Slug</label>
    <?= form_input(array(
        'name' => 'slug',
        'id' => 'slug',
        'type' => 'text',
        'class' => 'form-control',
        'value' => set_value('slug', $page->slug)
    )); ?>
</div>
<div class="form-group">
    <label for="body">Body</label>
    <?= form_textarea(array(
        'name' => 'body',
        'id' => 'body',
        'class' => 'form-control',
        'value' => set_value('body', $page->body)
    )); ?>
</div>

<?= form_submit(array(
    'value' => 'Save',
    'class' => 'btn btn-primary',
)) ?>
<?= form_close(); ?>

