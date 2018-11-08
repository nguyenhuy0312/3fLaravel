<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('style.css')}}" />
  <title>test</title>
</head>
<body>
  <h1 style="color:red">
  <!-- Cú pháp  -->
    @if(isset($a))
      {{$a}}
    @else
      Không có a;
    @endif
  </h1>
  <table border=1>
  <tr>
    <th>title</th>
    <th>content</th>
    <th>id</th>
  </tr>
    <tr>
    @foreach($data as $dt)
      <td>{{$dt->title}}</td>
      <td>{{$dt->content}}</td>
      <td>{{$dt->id}}</td>
    @endforeach
    </tr>
  </table>
</body>
</html>