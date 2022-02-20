@section('scripts')
<script src="{{ asset('sb-admin-2/vendor/jquery/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('sb-admin-2/js/sb-admin-2.min.js') }}"></script>

@if (session()->has('success'))
    <script>
        toastr.success('{{ session()->get('success') }}', 'App says!')
    </script>
@elseif (session()->has('error'))
    <script>
        toastr.error('{{ session()->get('error') }}', 'App says!')
    </script>
@endif

@show
