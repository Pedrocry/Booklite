<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso $curso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cursos view large-9 medium-8 columns content">
    <h3><?= h($curso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tutor') ?></th>
            <td><?= h($curso->tutor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valorinicial') ?></th>
            <td><?= h($curso->valorinicial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valoratual') ?></th>
            <td><?= h($curso->valoratual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Faculdade') ?></th>
            <td><?= h($curso->faculdade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($curso->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valorvagas') ?></th>
            <td><?= h($curso->valorvagas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($curso->id) ?></td>
        </tr>
    </table>
</div>
