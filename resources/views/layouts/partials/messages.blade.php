@if ($message = Session::get('success'))
<div id="success-alert" class="alert alert-dismissible alert-success">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <p>{{ $message }}</p>
</div>
<script>
    setTimeout(function() {
        $('#success-alert').fadeOut('slow');
    }, 3000); 
</script>
@endif

@if ($message = Session::get('danger'))
<div id="danger-alert" class="alert alert-dismissible alert-danger">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <p>{{ $message }}</p>
    <script>
        setTimeout(function() {
            $('#danger-alert').fadeOut('slow');
        }, 3000); 
    </script>
</div>


@endif
