<h2><?php echo Configure::read('Application.name') ?></h2>

<p>Para resetear su clave, visite esta direccion: <?php echo $this->Html->link(__('Registrar clave nueva'),'localhost/test_pos/users/remember_password_step_2/'.$hash) ?></p>

<p>Si usted no solicito cambio de clave, ignore este email.</p>