@if ($errors->any())
<div style="padding:1px;width:60%;" class="alert alert-danger" >
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
