<div id="<?php echo $key; ?>Message" class="mb-5 alert alert-<?php echo !empty($params['type']) ? $params['type'] : 'primary'; ?> alert-dismissible fade show" role="alert">
    <?php echo $message; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>