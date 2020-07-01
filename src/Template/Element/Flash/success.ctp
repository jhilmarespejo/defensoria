<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>



<div class="alert alert-success" role="success">
	<span class="glyphicon bd-brand-item glyphicon-ok" aria-hidden="true"></span>
	<span class="sr-only">X:</span>
	<div class="message success" onclick="this.classList.add('invisible')"><?= $message ?></div>
</div>