<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aluno->matricula],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->matricula)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Alunos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="alunos form large-9 medium-8 columns content">
    <?= $this->Form->create($aluno) ?>
    <fieldset>
        <legend><?= __('Edit Aluno') ?></legend>
        <?php
            echo $this->Form->control('curso');
            echo $this->Form->control('faculdade');
            echo $this->Form->control('tutor');
            echo $this->Form->control('nome');
            echo $this->Form->control('endereco');
            echo $this->Form->control('bairro');
            echo $this->Form->control('referencia');
            echo $this->Form->control('telfixo');
            echo $this->Form->control('telcelular');
            echo $this->Form->control('email');
            echo $this->Form->control('observacoes');
            echo $this->Form->control('rg');
            echo $this->Form->control('cpf');
            echo $this->Form->control('cidade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
