@csrf

<div class="form-group row">
    <label for="desc" class="col-md-4 col-form-label text-md-right">{{ __('Choose A User') }}</label>
    <div class="col">
        <select name="user_id" id="user_id" class="form-control">
            <option value="">Not Set</option>
            @foreach($users as $user)
            @if(isset($post) && $post->user && $user->id==$post->user->id )
            <option value="{{$user->id}}" selected>{{$user->id}} | {{$user->name}}</option>
            @endif
            <option value="{{$user->id}}">{{$user->id}} | {{$user->name}}</option>
            @endforeach
        </select>
        @if($errors->first('user_id'))
        <span class="text-danger">
            {{$errors->first('user_id')}}
        </span>
        @endif
    </div>

</div>
<div class="form-group row">
    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

    <div class="col-md-6">
        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
            value="{{isset($post)?$post->title: old('title')}}" autocomplete="title" autofocus>

        @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="slug" class="col-md-4 col-form-label text-md-right">{{ __('Slug') }}</label>

    <div class="col-md-6">
        <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
            value="{{isset($post)?$post->slug: old('slug')}}" autocomplete="slug" autofocus>

        @error('slug')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="desc" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
    <div class="col">
        <textarea name="desc" id="desc" cols="30" rows="10" class="form-control">
            {{isset($post)?$post->desc:''}}
          </textarea>
        @error('desc')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <input type="radio" class="d-none" name="published_at" value="{{date('Y-m-d H:i:s')}}" checked>

    {{-- <input type="hidden" value=""> --}}
</div>
<div class="form-group row">
    <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Body') }}</label>
    <div class="col">
        <textarea name="body" id="body" cols="30" rows="10" class="form-control">
            {{isset($post)?$post->body:''}}
          </textarea>
        @error('body')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

</div>
<div class="form-group row">
    <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Reach audience') }}</label>
    <div class="col">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="enabled" id="enabled1" value="1"
                {{isset($post) && $post->enabled == 1?'checked':''}}>
            <label class="form-check-label" for="enabled1">
                maximum reach
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="enabled" id="enabled2" value="0"
                {{isset($post) && $post->enabled == 0?'checked':''}}>
            <label class="form-check-label" for="enabled2">
                standard
            </label>
        </div>
        {{-- <textarea name="body" id="body" cols="30" rows="10" class="form-control">
            {{isset($post)?$post->body:''}}
        </textarea> --}}
        @error('body')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

</div>



<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
</div>
