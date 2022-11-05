<div class="input_area">
    <div class="error">{{$error ?? null}}</div>
    <label for="{{$name}}">{{$label}}</label>
    <textarea name="{{$name}}" id="{{$name}}" placeholder="{{$placeholder ?? null}}">{{$slot}}</textarea>
</div>