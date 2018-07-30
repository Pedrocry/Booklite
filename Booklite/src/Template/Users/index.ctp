<HTML>

<HEAD>

<TITLE>Lista de usuarios</TITLE>

</HEAD>

<BODY>

<CENTER><FONT COLOR=BLUE SIZE=6>Usuarios</FONT></CENTER>

<BR>

<TABLE BORDER=1> 

<TR> 

<TD>Id</TD> 

<TD>Nome</TD>

<TD>Email</TD>
<TD>Açoes</TD>

</TR> 
<?php foreach ($usuarios as $usuario): ?>
<TR> 
 

<TD> <?php echo $usuario->id; ?></TD>

<TD><?php echo $usuario->nome; ?></TD>

<TD><?php echo $usuario->email; ?></TD>
<TD>Ver Editar Apagar</TD>


<TR> 

<?php endforeach; ?>

</TABLE> 

</BODY>

</HTML>


<?php
echo $this->Html->link(('Cadastar'),['action'=>'add']);
// var_dump($usuarios);


?>