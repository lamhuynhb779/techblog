<!DOCTYPE HTML>
<html>
   <head>
      <title>Tech Blogs</title>
      <?=$this->Html->meta('description', 'website description');?>
      <?=$this->Html->meta('keywords', 'website keywords, website keywords');?>
      <?=$this->Html->charset('windows-1252');?>
      <?=$this->Html->css('tops/style');?>
      <!-- <meta http-equiv="content-type" content="text/html; charset=windows-1252" /> -->
   </head>
   <body>
      <div id="main">
         <?=$this->element('Tops/header')?>
         <div id="content_header"></div>
         <div id="site_content">
            <?=$this->element('Tops/banner')?>
            <?=$this->element('Tops/sidebar')?>
            <div id="content">
               <?= $this->fetch('content') ?>
            </div>
         </div>
         <?=$this->element('Tops/footer')?>
      </div>
   </body>
</html>
<script>0</script>