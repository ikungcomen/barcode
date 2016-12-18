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
        <form action="<?php base_url(); ?>index.php/main/set_barcode" method="post">
            <div class="form-group">
                <label  class="col-sm-2 text-right">จำนวน :</label>
                <div class="col-sm-2">
                    <input class="form-control request" type="text" id="count" name="count"   placeholder="รหัสสินค้า" required>
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-success"  type="submit">ปริ้น Barcode</button>
                </div>
            </div>
        </form>

    </body>
</html>
