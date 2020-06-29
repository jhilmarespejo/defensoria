
<ul class="list-group">
<?php foreach ($mensajes as $mensaje): ?>
 	<li class="list-group-item"><strong><?= '('.h($mensaje->para).')-'.h($mensaje->nombres).':'; ?></strong> <?= h($mensaje->mensaje); ?> </li>
<?php endforeach; ?>
</ul>