@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Список постов @endslot
    @slot('parent') Главная @endslot
    @slot('active') Посты @endslot

    @slot('entity') /post @endslot
  @endcomponent

  <hr>

  <a href="{{route('admin.post.create')}}" class="btn btn-primary"><i class="fa fa-plus-square-o"></i> Создать запись</a>
<br>
<br>

  <table class="table table-striped">
    <thead>
      <th>Наименование</th>
      <th>Публикация</th>
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      @forelse ($posts as $post)
        <tr>
          <td>{{$post->title}}</td>
          <td>{{$post->published}}</td>
          <td>
            <form style="text-align:right;" onsubmit="if(confirm('Удалить?')) { return true }else{ return false }" action="{{route('admin.post.destroy', $post)}}" method="POST">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}
              <a href="{{route('admin.post.edit', $post)}}"><i class="fa fa-edit"></i></a>
              <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
            </form>
            
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      @endforelse
    </tbody>



  </table>
</div>

@endsection