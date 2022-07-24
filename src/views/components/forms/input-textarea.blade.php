<div class="form-floating">
    <textarea name="{{$name}}" id="{{$name}}" class="form-control @error($name) is-invalid @enderror" placeholder=""
        @if($readonly) readonly @endif @if($disabled) disabled @endif>{!!old($name, $value)!!}</textarea>
        <label for="{{$name}}">{{$label}} @if($required) * @endif</label>
    @error($name)
    <div class="invalid-feedback">{{$message}}</div>
    @enderror

</div>