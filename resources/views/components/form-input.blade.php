<div class="form-group">
    <label>{{$label}}</label>

    <div>
        <input type="{{$type ?? 'text'}}" placeholder="{{$placeholder ?? $label}}" class="form-control @error($field) is-invalid @enderror" name="{{$field}}" value="{{ old($field) ?? ($row->$field ?? '') }}" />
        @error($field)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>