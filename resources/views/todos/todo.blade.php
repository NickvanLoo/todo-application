<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Applicatie</title>
</head>
<style>
    body{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        color: #fff;
        font-size: 16px;
    }
    </style>
<body>
    <div class="todoapp w-50 p-5" style="background-color: rebeccapurple; margin: 10% 30%">
    <h1 class="text-center">Todo Applicatie</h1>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{session('status')}}
    </div>
    @endif
    <form action="{{route('addtodo')}}" method="post">
        @csrf
        <input type="text" name="todoitem" id="" style="width: 70%; height: 50px;">
        <input type="submit" class="btn btn-primary"value="Add Todo" style="height: 50px;">
    </form>
    @foreach ($todositem as $item)
    <div class="d-flex p-2">
        <div class="item" style="width: 70%;">
     <b>{{$item->todoitem}}</b><br/>
</div>
     <div class="action d-flex m-2">
     @if ($item->is_completed === 0)
     <button  class="btn btn-secondary"><a href="{{route('markcomplete',$item->id)}}">Make complete</a></button>
     @else
    <button type="button" class="btn btn-secundary">Compleet</button>
     @endif
     <form action="{{route('delete', $item->id)}}" method="post">
         @csrf
         @method('DELETE')
         <input type="submit" class="ml-2 btn btn-danger" value="Delete">
     </form>
     </div>
     </div>
    @endforeach
</body>
</html>