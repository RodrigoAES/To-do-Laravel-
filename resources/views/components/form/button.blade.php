<button type="{{!empty($type) ? $type : 'submit'}}" 
class="btn {{$type == 'submit' ? 'btn-primary' : null }}">{{$slot}}</button>