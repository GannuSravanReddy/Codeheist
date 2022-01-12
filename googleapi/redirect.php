<?php 
include './google-api.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a id="test" href="<?php echo ''.$login_link;?>" >Click here if not redirected...</a>
<script type="text/javascript">
  window.onload=function(){
 if(document.getElementById('test')!=null||document.getElementById('test')!=""){ 
 document.getElementById('test').click();
 }
}
</script>
</body>
</html>