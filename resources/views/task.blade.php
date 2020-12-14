<!DOCTYPE html>
<html lang="en">

<head>


</head>

<body>
  @foreach ($tasks as $key => $task)
   <li>  <a href="{{'task/show/'. $key}}"> {{$task}} </a> </li>
  @endforeach
  </ul>
  </body>
  </html>

