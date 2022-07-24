<div class="form-group">
    <textarea name="{{$name}}" id="{{$name}}" 
    class="form-control tiny @error($name) is-invalid @enderror"
    placeholder="..." @if($storePictureUrl) data-storePictureUrl="{{ $storePictureUrl }}" @endif
    @if($disabled) disabled @endif>{!!old($name, $value)!!}</textarea>
    @error($name)
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>
