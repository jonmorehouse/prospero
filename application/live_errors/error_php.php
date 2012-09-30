<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: <?php  $severity; ?></p>
<p>Message:  <?php  $message; ?></p>
<p>Filename: <?php  $filepath; ?></p>
<p>Line Number: <?php  $line; ?></p>
<?php
		header('Location: http://www.prospero.ca');

?>
</div>