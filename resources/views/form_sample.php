<!DOCTYPE html>


<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>フォーム</title>
</head>
<body>
  <p><?php echo htmlspecialchars(@$_POST['name'], ENT_QUOTES, 'UTF-8'); ?>さん。</p>
</body>
</html>