<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src="https://www.mercadopago.com/v2/security.js" view=""></script>
</head>

<body>
<p>EXTERNAL REFERENCE: <?php echo isset($_GET['external_reference']) ? $_GET['external_reference'] : '';?></p>
                    <p>PAYMENT ID: <?php echo isset($_GET['collection_id']) ? $_GET['collection_id'] : '';?></p>
                    <p>PAYMENT TYPE: <?php echo isset($_GET['payment_type']) ? $_GET['payment_type'] : '';?></p>
<p>SUCCESS</p>
</body>
</html>
