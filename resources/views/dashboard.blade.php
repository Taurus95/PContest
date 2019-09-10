@extends('templates.appTemplate')

@section('content')

<section>
    <h1>hola</h1>
</section>
<script type="text/javascript">
    $(document).ready(function() {
        $("#MainNav").removeClass('bg-transparent');
        $("#MainNav").addClass('bg-dark');
    });
</script>
@endsection
