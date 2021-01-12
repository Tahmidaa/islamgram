@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label pt-3 font-weight-bold ">Title</label>

                    <input id="title"
                           type="text"
                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                           name="title"
                           value="{{ old('title') ?? $user->profile->title }}"
                           autocomplete="title" autofocus>

                    @if ($errors->has('title'))
                        
                            <strong>{{ $errors->first('title') }}</strong>
                        
                    @endif

                </div>


                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label pt-3 font-weight-bold ">Description</label>

                    <input id="description"
                           type="text"
                           class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                           name="description"
                           value="{{ old('description') ?? $user->profile->description}}"
                           autocomplete="description" autofocus>

                    @if ($errors->has('description'))
                        
                            <strong>{{ $errors->first('description') }}</strong>
                        
                    @endif

                </div>


                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label pt-3 font-weight-bold ">URL</label>

                    <input id="url"
                           type="text"
                           class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}"
                           name="url"
                           value="{{ old('url') ?? $user->profile->url}}"
                           autocomplete="url" autofocus>

                    @if ($errors->has('url'))
                        
                            <strong>{{ $errors->first('url') }}</strong>
                        
                    @endif

                </div>

               
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label pt-3 font-weight-bold">Profile Picture</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif

                   
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Save Changes</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
