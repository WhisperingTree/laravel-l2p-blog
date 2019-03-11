<h2>{{$title}}</h2>
<ul class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{$parent}}</a></li>
  <li class="breadcrumb-item active"><a href="{{route('admin.index').$entity}}">{{$active}}</a></li>
</ul>