<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Names') ?></th>
            <td><?= h($user->names) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surnames') ?></th>
            <td><?= h($user->surnames) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CI') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('DISTRITO') ?></th>
            <td><?= h($user->district) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FUNCION') ?></th>
            <td><?= h($user->function) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ExpirationAccount') ?></th>
            <td><?= h($user->expirationAccount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $user->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
