@extends('welcome')

@section('content')

<div class="row">
            <div class="col-lg-12 margin-tb">

                <div class="pull-left">
                    <form action="{{route('category.store')}}" method="post">

                        {{csrf_field()}}
                        {{method_field('post')}}

                        <div class="form-group">
                            <label>name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}">
                        </div>


                        <div class="form-group">
                          <button type="submit" class="btn btn-primary"><i class="fa fa-plus">add</i></button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div>

</div>

@endsection
