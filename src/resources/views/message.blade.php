@if (session('message_type'))
    @push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>
        function showMensage() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000
            });

            Toast.fire({
                type: "{{ session('message_type') }}",
                title: "{{ session('title') }}",
                text: "{{ session('message') }}"
            })
        };
    showMensage();
    </script>
    @endpush
@endif
