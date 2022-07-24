 
<div class="form-check">
    <label class="form-check-label">
        <input id="{{$name}}" name="{{$name}}" 
            class="form-check-input" 
            type="checkbox" 
            @if(old($name, $value)) checked @endif
            @if($disabled) disabled @endif>{{$label}}
        <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label>
</div>