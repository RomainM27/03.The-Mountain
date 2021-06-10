<?php ob_start(); ?>
<ul class="my-5">
<?php foreach($rando as $ran): ?>
    <li> <a href="../test2/update.php?id=<?= $ran->company_id ?>">    <?= $ran->company_name ?></a></li>
<?php endforeach; ?>
</ul>
<?php $content = ob_get_clean(); ?>
<?php require 'layout.php'; ?>