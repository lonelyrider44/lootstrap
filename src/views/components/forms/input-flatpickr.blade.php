<div id="flatpickr_{{$name}}" class="flatpickr flatpickr_{{$name}} form-floating  ">

    <input id="{{$name}}" name="{{$name}}" type="text" value="{{old($name, ($value ? \Carbon\Carbon::parse($value)->format('d.m.Y.') : null) )}}" placeholder="" data-input class="form-control @error($name) is-invalid @enderror" @if($disabled) disabled @endif>

    @if($controls)

    <span class="material-icons" title="toggle" data-toggle style="display:none">
        calendar_today
    </span>

    <span class="material-icons flatpicker-clear" title="clear" data-clear>
        close
    </span>

    @endif
    @error($name)
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
    <label for="{{$name}}" id="{{$name}}_label">{{$label}} @if($required) * @endif</label>
    <!-- @error($name)
    <div class="invalid-feedback">{{$message}}</div>
    @enderror -->
</div>





@if(!$disabled)

@if(!$shorthand)
<script>
    flatpickr("#flatpickr_{{$name}}", {
        dateFormat: "d.m.Y.",
        wrap: true,
        locale: flatpickr_lang,
        allowInput: false
    });
</script>
@else
<script>
    flatpickr('#flatpickr_{{$name}}', {
        plugins: [
            new monthSelectPlugin({
                shorthand: true,
                dateFormat: "m.Y.",
                altFormat: "M Y",
                theme: "light"
            })
        ],
        wrap: true,
        locale: flatpickr_lang,
        allowInput: false
    })
</script>
@endif
@endif