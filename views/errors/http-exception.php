<?php
    /** @var \App\Shared\Exception\MalformedRouteException $exception */
?>
<?php require_once 'head.php'; ?>
<div id="page">
    <h1>Error <?php echo $exception->getCode(); ?></h1>
    <p><?php echo $exception->getMessage(); ?></p>
</div>
<?php require_once 'footer.php'; ?>
