<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout; ?>
            | Tutorial
        </title>
       
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->script('jquery-1.11.1.min');
        echo $this->Html->script('lib/bootstrap.min');
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('estilo');
        //echo $this->Html->css('jquery-ui-1.8.4.custom');
        //echo $this->Html->css('ui-lightness/jquery-ui-1.8.22.custom');
        //echo $this->Html->css('jquery.fancybox');
        //echo $this->Html->script('jquery.min');
        //echo $this->Html->script('jquery-ui-1.8.22.custom.min');
        //echo $this->Html->script('jquery.fancybox');
        //echo $this->Html->script('jquery.maskedinput-1.3.min');
    //    echo $this->Html->script('jquery.autocomplete.min');
        
        
        //echo $this->Html->meta('icon');
        //echo $this->Html->script('lib/jquery');
        //echo $this->Html->script('lib/bootstrap.min');
        // echo $this->Html->css('bootstrap.min');
        // echo $this->Html->css('estilo');
        //echo $this->Html->script('lib/angular.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <script language="javascript">
            $(document).ready(function(){
                $("a").click(function(evento){
                //alert("Has pulsado el enlace, pero vamos a cancelar el evento...nPor tanto, no vamos a llevarte a DesarrolloWeb.com");
                evento.preventDefault();
            });
}); 
        </script>
    </head>
    <body>
           <?php echo $this->Session->flash(); ?>
           <?php echo $this->fetch('content'); ?>
        <?php //echo  $this->element('sql_dump');  ?>
    </body>
</html>
