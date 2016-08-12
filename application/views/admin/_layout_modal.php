<? $this->load->view('admin/components/page_head'); ?>
    <body>
    <div class="" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <? $this->load->view( $subview ); ?>
                <div class="modal-footer">
                    &copy;<?= date('Y'); ?>  <?= $meta_title; ?>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </body>
<? $this->load->view('admin/components/page_footer'); ?>