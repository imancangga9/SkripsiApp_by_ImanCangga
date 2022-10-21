<div class="form-group row">
    <label for="{{$field}}" class="col-sm-3 col-form-label">{{$label}}</label>                                       
    <div class="col-sm-9">
        <input class="border rounded w-100 form-controller-file" name="{{$field}}" id="{{$field}}" type="file" multiple 
        @isset($value)
            value="{{old($field) ? old($field) : $value}}"
            @else
            value="{{old($field)}}"
        @endisset
        />
        
        {{-- @error($field)
            <div class="alert alert-danger mt-1">{{ $message}}</div>
        @enderror --}}
    </div>
</div>
