<?php 
$message = $_POST['message'];
echo $message;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>My First Page</title>
</head>
<body>
  <p><?php echo htmlspecialchars($request->message, ENT_QUOTES, 'UTF-8'); ?>さん。</p>
</body>
</html>