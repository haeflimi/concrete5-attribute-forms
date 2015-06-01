<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title">
            <?= t('Form Results') ?>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th><?= t('ID') ?></th>
                <th><?= t('Type') ?></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($forms as $form) { ?>
                <tr>
                    <td><?= $form->getID() ?></td>
                    <td><?= $form->getTypeName() ?></td>
                    <td>
                        <a class="btn btn-primary"
                           href="<?php echo $view->action('detail', $form->getID()) ?>"><?php echo t('Show') ?>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <?=$formsPagination?>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>