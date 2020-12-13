<!DOCTYPE html>
<html lang="ja">
<style>
th { background-color:red; padding:10px; }
td { vackground-color:#eee; padding:10px }
</style>
<head>
  <title>Index</title>
</head>
<body>
  <h1>Hello/Index</h1>
  <p>{!!$msg!!}</p>
  <form action="/hello" method="post">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
  </form>
</body>
</html>