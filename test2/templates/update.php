<?php ob_start(); ?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="number" name="company_id" id="company_id" value="<?php echo $rando->company_id ?>">
    <input type="text" name="company_name" id="company_name" value="<?php echo $rando->company_name ?>">
    <input type="text" name="company_country" id="company_country" value="<?php echo $rando->company_country ?>">
    <input type="text" name="company_tva" id="company_tva" value="<?php echo $rando->company_tva ?>">
    <input type="number" name="type_id" id="type_id" value="<?php echo $rando->type_id ?>">
    <button type="submit" value="Submit">Submit</button>
</form>
<?php $content = ob_get_clean(); ?>
<?php require 'layout.php'; ?>

