<div class="container">
    <div class="title">
        <h3>Add project</h3>
    </div>
    <form action="{{url('project/store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row pb-4 form-group">
            <div class="col">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="name">
                {{--<small class="text-danger">{{ $errors->first('name') }}</small>--}}
            </div>
        </div>
        <div class="row pb-4 form-group">
            <div class="col">
                <input type="text" name="language" value="{{ old('language') }}" class="form-control" placeholder="language">
                {{--<small class="text-danger">{{ $errors->first('name') }}</small>--}}
            </div>
        </div>
        <div class="row pb-4 form-group">
            <div class="col">
                <input type="text" name="description" value="{{ old('description') }}" class="form-control" placeholder="description">
                {{--<small class="text-danger">{{ $errors->first('password') }}</small>--}}
            </div>
        </div>
        <div class="row pb-4 form-group">
            <div class="col">
                <input type="text" name="link" value="{{ old('link') }}" class="form-control" placeholder="link">
                {{--<small class="text-danger">{{ $errors->first('password') }}</small>--}}
            </div>
        </div>
        <div class="row pb-4 form-group">
            <div class="col">
                <input type="file" name="image" value="{{ old('image') }}" class="form-control" placeholder="image">
               {{-- <small class="text-danger">{{ $errors->first('photo') }}</small>--}}
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Submit</button>
            {{--<a href="{{url('')}}" class="btn btn-danger"><i class=""></i> Cancel</a>--}}
        </div>
    </form>
</div>