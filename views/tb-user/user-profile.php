<?php
    
?>
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">UserProfile</h4>
    </div>
    <div class="modal-body">
        <p>
            <?= $model->firstname; ?>  <?= $model->lastname; ?>
        </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>