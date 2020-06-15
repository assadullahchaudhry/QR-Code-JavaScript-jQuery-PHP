<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRCode Tutorial</title>

    <!-- Stylesheets -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
    
    <!-- QR Code Generator Form -->
    <div class="row mt-5">
        <div class="col-md-4 offset-md-4">
            <h1>QR Code Generator</h1>
            <div class="from-wrapper">
                <form method="post" action="qrcode.php" class="form">
                    <div class="form-group">
                        <input type="text" class="form-control" name="url" placeholder="URL">
                    </div>
                    <button class="btn btn-primary btn-block">Generate QR Code</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /QR Code Generator Form -->

    <!-- QR CODE Wrapper -->
    <div class="row mt-5">
        <div class="col-md-4 offset-md-4">
            <div class="status text-center font-weight-bold d-none"></div>
            <div id="auc-qrcode"></div>
        </div>
    </div>
    <!-- /QR CODE Wrapper -->

    <!-- Scripts -->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/qrcode.min.js"></script>
    <script src="public/js/script.js"></script>
</body>
</html>