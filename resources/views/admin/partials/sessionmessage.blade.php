@if(session()->has('category'))
<div class="alert alert-success" role="alert">{{ session()->get('category') }}</div>
@endif
