@props(["label","name","id","rows","class"])

<div class="form-group">
  <label>{{$label}}</label>
    <textarea class="form-control" name={{$name}} id={{$id}} rows={{$rows}}></textarea>
     <!-- Show error -->
        @if ($errors->has('message'))
            <div class="{{$class}}">
                {{ $errors->first('$name') }}
            </div>
        @endif                    
</div>
