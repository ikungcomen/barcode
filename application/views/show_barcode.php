
<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href = "<?= base_url(); ?>"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/modal_jquery.min.js"></script>
    </head>
    <body>
        <div class="form-group">
            
            <?php for ($x = 1; $x <= 20; $x++) {?>
            <?php $num = $x%5; ?>
                <?php if($num==0){?>
            <img src="<?php echo base_url(); ?>index.php/main/bb/<?php echo $x;?>"><br>
             
          <?php }else{?>
                       <img src="<?php echo base_url(); ?>index.php/main/bb/<?php echo $x;?>">
             
          <?php }?>
      <?php  } ?>
                
        </div>
    </body>
</html>
