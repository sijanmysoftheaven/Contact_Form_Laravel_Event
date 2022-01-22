<div class="form-group">
	<label>{{$label}}</label>
    	<input type={{$type}} class="form-control" name={{$name}}  id={{$id}} >

            <!-- Show error -->
            @if ($errors->has('name'))
                <div class="{{$class}}" >
                    {{ $errors->first($name) }}
                </div>
            @endif
</div>
