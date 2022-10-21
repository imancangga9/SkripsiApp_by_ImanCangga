<div class="form-group row">
    <label for="{{$field}}" class="col-sm-3 col-form-label">{{$label}}</label>
    <div class="col-sm-9">
        <input type="{{$type}}" name="{{$field}}" class="form-control" id="{{$field}}" 
            placeholder="{{$placeholder ?? ''}}" 
            @isset($value)
                value="{{old($field) ? old($field) : $value}}"
                @else
                value="{{old($field)}}"
            @endisset         
        >
        @error($field)
            <div class="alert alert-danger mt-1">{{ $message}}</div>
        @enderror
    </div>    
</div>