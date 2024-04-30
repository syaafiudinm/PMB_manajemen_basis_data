@include('layout.header')
@include('layout.navbar')

<ul class="list-group container mt-5">
    <li class="list-group-item">{{$users->name}}</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
    <li class="list-group-item">A fourth item</li>
    <li class="list-group-item">And a fifth one</li>
  </ul>

@include('layout.footer')