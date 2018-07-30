<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma $turma
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $turma->ID_TURMAS],
                ['confirm' => __('Are you sure you want to delete # {0}?', $turma->ID_TURMAS)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Turmas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="turmas form large-9 medium-8 columns content">
    <?= $this->Form->create($turma) ?>
    <fieldset>
        <legend><?= __('Edit Turma') ?></legend>
        <?php
            echo $this->Form->control('CURSO');
            echo $this->Form->control('QUANT');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
