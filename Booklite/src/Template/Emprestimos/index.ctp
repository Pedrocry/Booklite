<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo[]|\Cake\Collection\CollectionInterface $emprestimos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Emprestimo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emprestimos index large-9 medium-8 columns content">
    <h3><?= __('Emprestimos') ?><br><a href="/Booklite/emprestimos/add">link controller</a></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matricula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('curso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tutor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telfixo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telcelular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataemprestimo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datadevolucao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('situacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emprestimos as $emprestimo): ?>
            <tr>
                <td><?= $this->Number->format($emprestimo->id) ?></td>
                <td><?= h($emprestimo->titulo) ?></td>
                <td><?= h($emprestimo->matricula) ?></td>
                <td><?= h($emprestimo->nome) ?></td>
                <td><?= h($emprestimo->curso) ?></td>
                <td><?= h($emprestimo->tutor) ?></td>
                <td><?= h($emprestimo->telfixo) ?></td>
                <td><?= h($emprestimo->telcelular) ?></td>
                <td><?= h($emprestimo->dataemprestimo) ?></td>
                <td><?= h($emprestimo->datadevolucao) ?></td>
                <td><?= h($emprestimo->situacao) ?></td>
                <td><?= $this->Number->format($emprestimo->codigo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $emprestimo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emprestimo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emprestimo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
