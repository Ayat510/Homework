<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>

  @foreach ($tasks as $task)
   <li>  <a href="task/Show/{{$task ->id}}"> {{$task ->title}} </a>   </li>
  @endforeach
  </ul>
  </body>
  </html>

