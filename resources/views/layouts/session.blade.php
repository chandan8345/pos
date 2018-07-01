@if(Session::has('id'))
   
@else 
<script type="text/javascript">
    window.location = "{{ url('/Login') }}";
</script> 
@endif
