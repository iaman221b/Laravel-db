<!DOCTYPE HTML>
<html>
    <body>
        <h1>Project Controller</h1>
        {{-- {{$Projects}} --}}
        @foreach ($Projects as $project)
       <li> {{$project->title}} </li>
       <li> {{$project->Description}} </li>
        @endforeach
       
    </body>
</html>