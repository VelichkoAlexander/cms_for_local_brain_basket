<section>
    <h2>Pages</h2>
    <?= anchor('admin/page/edit', '<i class="glyphicon glyphicon-plus"></i>Add a page'); ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Parent</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <? if (count($pages)) {
            foreach ($pages as $page) { ?>
                <tr>
                    <td><?= anchor('admin/page/edit/'.$page->id, $page->title); ?></td>
                    <td><?= $page->parent_slug; ?></td>
                    <td><?=btn_edit('admin/page/edit/'.$page->id); ?></td>
                    <td><?=btn_delete('admin/page/delete/'.$page->id); ?></td>
                </tr>
            <? } ?>
        <? }else{?>
            <tr>
                <td class="col-md-3">We cold not find any page.</td>
            </tr>
        <?}?>
        </tbody>
    </table>
</section>