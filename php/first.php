<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
    </head>
<body>
<?php
echo "<h2>Hello World</h2><br>";
?>
<?= "You read this line" ?>

<?php if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?>
<p<?php if ($highlight): ?> class="highlight"<?php endif;?>>This is a paragraph.</p>


</body>
</html>
