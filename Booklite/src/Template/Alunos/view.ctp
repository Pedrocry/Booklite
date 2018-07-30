<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aluno'), ['action' => 'edit', $aluno->matricula]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aluno'), ['action' => 'delete', $aluno->matricula], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->matricula)]) ?> </li>
        <li><?= $this->Html->link(__('List Alunos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alunos view large-9 medium-8 columns content">
    <h3><?= h($aluno->matricula) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Curso') ?></th>
            <td><?= h($aluno->curso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Faculdade') ?></th>
            <td><?= h($aluno->faculdade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tutor') ?></th>
            <td><?= h($aluno->tutor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($aluno->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($aluno->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($aluno->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($aluno->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telfixo') ?></th>
            <td><?= h($aluno->telfixo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telcelular') ?></th>
            <td><?= h($aluno->telcelular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($aluno->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observacoes') ?></th>
            <td><?= h($aluno->observacoes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($aluno->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($aluno->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($aluno->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matricula') ?></th>
            <td><?= $this->Number->format($aluno->matricula) ?></td>
        </tr>
    </table>
</div>
