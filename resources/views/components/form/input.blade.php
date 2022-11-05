<div class="input_area">
    <label for="{{$name}}" >{{$label ?? ''}}</label>
    <div class="error">{{$error ?? null}}</div>
    <input type="{{empty($type) ? 'text' : $type}}" 
        name="{{$name}}" id="{{$name}}" placeholder="{{$placeholder ?? ''}}" 
        {{(!empty($required) && $required == true) ? 'required' : ''}}
        value="{{$value ?? null}}"
    />
</div>