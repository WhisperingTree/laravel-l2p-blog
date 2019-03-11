<label for="">Статус</label>
<select class="form-control" name="published">
  @if (isset($post->id))
    <option value="0" @if ($post->published == 0) selected="" @endif>Не опубликовано</option>
    <option value="1" @if ($post->published == 1) selected="" @endif>Опубликовано</option>
  @else
    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
  @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$post->title ?? ''}}" required>

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$post->slug ?? ''}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">
  @include('admin.posts.partials.categories', ['categories' => $categories])
</select>

<label for="">Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short">{{$post->description_short ?? ''}}</textarea>

<label for="">Полное описание</label>
<textarea required class="form-control" id="description" name="description">{{$post->description ?? ''}}</textarea>

<hr />

<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$post->meta_title ?? ''}}">

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$post->meta_description ?? ''}}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="{{$post->meta_keyword ?? ''}}">

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">