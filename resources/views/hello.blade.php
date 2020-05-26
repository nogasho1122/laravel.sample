<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>My First Page</title>
</head>
<body>
<form action="{{ url('/message/add')}}" method="POST" class="form-horizontal">
  @csrf
  <textarea rows="6" name="message"></textarea>
  <button type="submit" name="add">
   送信
  </button>
</form>
</body>
</html>