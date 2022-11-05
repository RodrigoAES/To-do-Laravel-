<div class="input_area">
    <label for="{{$name}}">Categoria</label>
    <div class="error">{{$error ?? null}}</div>
    <select name={{$name}} id="{{$name}}" {{(!empty($require) && $require == 'true') ? 'required' : null}}>
        <option selected disabled value="">Selecione {{$type}}</option>
        {{$slot}}
    </select>
</div>