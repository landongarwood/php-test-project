@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul class="mb-0">
            {!! implode('', $errors->all('<li>:message</li>')) !!}
        </ul>
    </div>
@endif