<div class="form-floating">
    <input type="text" class="form-control @error($name) is-invalid @enderror" id="{{(!empty($id))?$id:$name}}" name="{{$name}}"
        placeholder="" value="{{old($name, $value)}}" @if($disabled) disabled @endif @if($readonly) readonly @endif />
    <label id="{{$name}}_label">{{$label}} @if($required) * @endif</label>
    @error($name)
    <div class="invalid-feedback">{!!$message!!}</div>
    @enderror
</div>