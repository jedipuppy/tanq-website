

<?php
// サイトキーを入力
$key = '6LcAg8QUAAAAABfJa9_syARh7EuHnsVcrtELvwZ5';
// シークレット キーを入力
$secretKey = '6LcAg8QUAAAAABpEL4ZBDwOTzMlI06EnvbcPZ28r';
if (isset($_POST['name']) && isset($_POST['password'])) 
{
  $Response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']);
  $result = json_decode($Response);
  if ($result->success) 
  {
    $message = 'success';
    $status = 'success';
  } 
  else 
  {
    $message = $result->{'error-codes'}[0];
    $status = 'danger';
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $key ?>"></script>
  <script>
  grecaptcha.ready(function() {
    grecaptcha.execute('<?php echo $key ?>', {action: 'login'}).then(function(token) {
    var reCAPTCHA = document.getElementById('recaptcha');
         reCAPTCHA.value = token;
    });
  });
  </script>
</head>
<body>
  <div class="content">
    <div class="col-sm-5">
      <?php echo isset($message) ? sprintf('<div class="alert alert-%s" role="alert">%s</div>',$status,$message):'' ?>
      <form class="form" method="post">
        <div class="form-group">
      <label for="formGroupExampleInput">name</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="name input" name="name">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">password</label>
      <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password input" name="password">
    </div>
    <input type="hidden" name="g-recaptcha-response" id="recaptcha" />
    <button type="submit" class="btn btn-primary">送信</button>
      </form>
    </div>
  </div>    
</body>
</html>