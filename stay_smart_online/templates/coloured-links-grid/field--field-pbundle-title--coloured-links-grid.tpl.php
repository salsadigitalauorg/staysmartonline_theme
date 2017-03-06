<?php
/**
 * @file
 * Default template implementation to display the value of a field.
 */
?>
<?php foreach ($items as $delta => $item): ?>
  <h2><?php print stay_smart_online_trim(render($item), 35); ?></h2>
<?php endforeach; ?>
