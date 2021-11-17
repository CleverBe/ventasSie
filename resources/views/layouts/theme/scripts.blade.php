<script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script src="{{ asset('plugins/sweetalerts/sweetalerts2.min.js') }}"></script>
<script src="{{ asset('plugins/notificaction/snackbar/snackbar.min.js') }}"></script>
<script src="{{ asset('plugins/nicescroll/nicescroll.min.js') }}"></script>
<script src="{{ asset('plugins/currency/currency.js') }}"></script>
<script>
    function noty(msg, option = 1) {
        Snackbar.show({
            text: msg.toUpperCase(),
            actionText: 'Cerrar Exit',
            actionTextColor: '#FFFFFF',
            backgroungColor: option == 1 ? '#FF7900' : '#e7515a',
            pos: 'top-right'
        });
    }
</script>

@livewireScripts

<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

<!-- <script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/dash_1.js') }}"></script> -->