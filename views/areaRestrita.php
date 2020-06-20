<?php \Classes\ClassLayout::setHeadRestrito(); ?>

<?php \Classes\ClassLayout::setHead('Área Restrita','Área exclusiva para membros!'); ?>

<h1>Área Restrita!</h1>
<a href="<?php echo DIRPAGE.'controllers/controllerLogout';?>">Logout</a>

<?php \Classes\ClassLayout::setFooter(); ?>