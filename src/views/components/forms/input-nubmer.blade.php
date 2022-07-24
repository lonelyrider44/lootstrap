<div class="form-floating">
    <input type="number" class="form-control @error($name) is-invalid @enderror" id="{{$name}}"
        name="{{$name}}" placeholder="" value="{{old($name, $value)}}"
        @if($disabled) disabled @endif @if($step) step="{{$step}}" @endif @if($readonly) readonly @endif />
    <label for="{{$name}}" id="{{$name}}_label" >{{$label}} @if($required) * @endif</label>
    @error($name)
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>