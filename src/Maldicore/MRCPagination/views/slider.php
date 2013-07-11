<?php
    $presenter = new Maldicore\MRCPagination\MRCPresenter($paginator);
?>

<?php if ($paginator->getLastPage() > 1): ?>
    <ul>
        <?php echo $presenter->render(); ?>
    </ul>
<?php endif; ?>