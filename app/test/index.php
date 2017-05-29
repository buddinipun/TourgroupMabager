
<?php include '../../webroot/include/headder.php'; ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    
<a data-toggle="modal" data-id="{{ name }}" title="Add this item" class="open-AddBookDialog " href="#addBookDialog">{{ name }}</a><br />


<div class="modal hide fade" id="addBookDialog">
     <div class="modal-header">
        <button class="close" data-dismiss="modal">×</button>

     </div>
     <div class="modal-body">
         <input type="text" name="nameId" id="nameId" />
         <p>some content</p>

     </div>
</div>


 <script type="text/javascript">
$(document).on("click", ".open-AddBookDialog", function () {
    var myNameId = $(this).data('id');
    $("modal-body #nameId").val( myNameId );

    });
</script>
  </body>
</html>
