<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>hello</title>
</head>
<body>
    <p>name: {{$name}}</p>
    <p>course: {{$course}}</p>
    @if($age>=20)
       <p>correct</p>
    @else
       <p>incorrect</p>
    @endif
    
    @if($status=="active")
    <p>student is active</p>
    @else
    <p>student is not active</p>
    @endif

    @foreach($pupils as $pupil)
       <p>{{$pupil}}</p>
    @endforeach
    
    @foreach($amount as $items)
      <p>{{$items}}</p>
    @endforeach

    @foreach($babies as $cute)
       <p>{{$cute['name']}}</p>
       <p> age: {{$cute['age']}}</p>
       <p> course: {{$cute['course']}}</p>
    @endforeach 
    
    @foreach($workers as $emp)
        <p>{{$emp['name']}}</p>
        <p>age: {{$emp ['age']}}</p>
        @if($emp['age']>=18)
          <p>Adult</p>
        @else
          <p>minor</p>
        @endif    
    @endforeach    
</body>
</html>