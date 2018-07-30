<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo $emprestimo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Emprestimo'), ['action' => 'edit', $emprestimo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emprestimo'), ['action' => 'delete', $emprestimo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emprestimos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emprestimo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emprestimos view large-9 medium-8 columns content">
    <h3><?= h($emprestimo->titulo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($emprestimo->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matricula') ?></th>
            <td><?= h($emprestimo->matricula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($emprestimo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Curso') ?></th>
            <td><?= h($emprestimo->curso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tutor') ?></th>
            <td><?= h($emprestimo->tutor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telfixo') ?></th>
            <td><?= h($emprestimo->telfixo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telcelular') ?></th>
            <td><?= h($emprestimo->telcelular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situacao') ?></th>
            <td><?= h($emprestimo->situacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($emprestimo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($emprestimo->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataemprestimo') ?></th>
            <td><?= h($emprestimo->dataemprestimo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datadevolucao') ?></th>
            <td><?= h($emprestimo->datadevolucao) ?></td>
        </tr>
    </table>
</div>
