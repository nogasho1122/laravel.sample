<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>submit</title>
</head>
<body >
<form action="testform" method="post">
        @csrf
        <input type="text" name="textbox1" >
        <input type="submit" value="送信ボタン" >
</form>
</body>
</html>