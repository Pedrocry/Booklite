<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="alunos index large-9 medium-8 columns content">
    <h3><?= __('Alunos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('matricula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('curso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('faculdade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tutor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telfixo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telcelular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observacoes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidade') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno): ?>
            <tr>
                <td><?= $this->Number->format($aluno->matricula) ?></td>
                <td><?= h($aluno->curso) ?></td>
                <td><?= h($aluno->faculdade) ?></td>
                <td><?= h($aluno->tutor) ?></td>
                <td><?= h($aluno->nome) ?></td>
                <td><?= h($aluno->endereco) ?></td>
                <td><?= h($aluno->bairro) ?></td>
                <td><?= h($aluno->referencia) ?></td>
                <td><?= h($aluno->telfixo) ?></td>
                <td><?= h($aluno->telcelular) ?></td>
                <td><?= h($aluno->email) ?></td>
                <td><?= h($aluno->observacoes) ?></td>
                <td><?= h($aluno->rg) ?></td>
                <td><?= h($aluno->cpf) ?></td>
                <td><?= h($aluno->cidade) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aluno->matricula]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aluno->matricula]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aluno->matricula], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->matricula)]) ?>
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
