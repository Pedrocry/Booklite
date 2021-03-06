<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso $curso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cursos form large-9 medium-8 columns content">
    <?= $this->Form->create($curso) ?>
    <fieldset>
        <legend><?= __('Add Curso') ?></legend>
        <?php
            echo $this->Form->control('tutor');
            echo $this->Form->control('valorinicial');
            echo $this->Form->control('valoratual');
            echo $this->Form->control('faculdade');
            echo $this->Form->control('nome');
            echo $this->Form->control('valorvagas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
