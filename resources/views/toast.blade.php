<script src="/js/toastr.js"></script>
<script>
    @if (session()->has('toast'))

        setTimeout(() => {

            $.toastr.{{ session()->get('toast')['type'] }}(
                "{{ session()->get('toast')['message'] }}")
        }, 1000);
        @php
            session()->remove('toast');
        @endphp
    @endif
</script>
