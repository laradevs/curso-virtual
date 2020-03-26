@if ($errors->any())
<div class="alertSession alert alert-danger">
   <span>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </span>
</div>
@endif

@if (session('success'))
<div class="alertSession alert alert-info">
    <span>
     <ul>
        <li> {{ session('success') }}</li>
     </ul>
     </span>
</div>
@endif
