<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo $emprestimo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Emprestimos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="emprestimos form large-9 medium-8 columns content">
    <?= $this->Form->create($emprestimo) ?>
    <fieldset>
        <legend><?= __('Add Emprestimo') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('matricula');
            echo $this->Form->control('nome');
            echo $this->Form->control('curso');
            echo $this->Form->control('tutor');
            echo $this->Form->control('telfixo');
            echo $this->Form->control('telcelular');
            echo $this->Form->control('dataemprestimo');
            echo $this->Form->control('datadevolucao');
            echo $this->Form->control('situacao');
            echo $this->Form->control('codigo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
