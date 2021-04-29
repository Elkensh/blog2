@extends('welcome')

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <div>
      <h3 class="float-md-start mb-0">Cover</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>

    <a href="{{route('category.create')}}" class="btn btn-primary">create new category</a>
<table class="table table-dark table-striped" >
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">action</th>
    </tr>

    <form action="{{route('category.store')}}" method="post">
    {{csrf_field()}}
    {{method_field('post')}}
    @foreach ($categories as $category)
    <tr>
      <th>{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td><a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">update</a>
          <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger">delete</a>
    </td>
    </tr>
    @endforeach
</form>
</table>
</div>
