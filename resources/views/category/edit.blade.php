@extends('welcome')

@section('content')

<div>
      <h3 class="float-md-start mb-0">Cover</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
    <div class="content-wrapper">


        <section class="content">
            <div class="box box-primary">
                <div class="header">
                    <h3 class="box-title">@lang('site.edit')</h3>
                </div><!-- ens of box header -->
                <div class="box-body">


                    <form action="{{route('category.update',$category->id)}}" method="post">

                        {{csrf_field()}}
                        {{method_field('put')}}

                       

                            <div class="form-group">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" value="{{$category->name}}">
                            </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit">edit</i></button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div>

        </section>
    </div>
@endsection
