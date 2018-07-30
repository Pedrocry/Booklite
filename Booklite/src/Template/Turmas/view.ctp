<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma $turma
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Turma'), ['action' => 'edit', $turma->ID_TURMAS]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Turma'), ['action' => 'delete', $turma->ID_TURMAS], ['confirm' => __('Are you sure you want to delete # {0}?', $turma->ID_TURMAS)]) ?> </li>
        <li><?= $this->Html->link(__('List Turmas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turma'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="turmas view large-9 medium-8 columns content">
    <h3><?= h($turma->ID_TURMAS) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CURSO') ?></th>
            <td><?= h($turma->CURSO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID TURMAS') ?></th>
            <td><?= $this->Number->format($turma->ID_TURMAS) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QUANT') ?></th>
            <td><?= $this->Number->format($turma->QUANT) ?></td>
        </tr>
    </table>
</div>
