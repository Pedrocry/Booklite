<h1>Cadastrar usuario</h1>

<?php
	echo $this->Form->create($user);
	echo $this->Form->input('nome');
	echo $this->Form->input('email');
	echo $this->Form->button('cadastrar');

	echo $this->Form->end();


?>