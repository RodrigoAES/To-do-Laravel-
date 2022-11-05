<div class='checkbox_area' style="display:flex; align-items:center">
    <input 
        type="checkbox" 
        name='{{$name}}' 
        id="{{$name}}"
        value='{{$value}}'
        {{(!empty($checked) && $checked == true) ? 'checked' : null}}
    >
    <label for="{{$name}}">{{$label}}</label>
    <div class="error">{{$error ?? null}}</div>
</div>