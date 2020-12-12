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
  <ul>
  @foreach($data as $item)
  <li>{!!$item!!}</li>
  @endforeach
  </ul>
</body>
</html>