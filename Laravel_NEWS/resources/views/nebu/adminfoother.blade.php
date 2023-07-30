@if (session("kullanici_yetki")==0 or !session("kullanici_yetki"))

@else
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
<!-- Scripts -->
<script src="{{ asset('plugins/common/common.min.js') }}"></script>
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>
<script src="{{ asset('js/gleek.js') }}"></script>
<script src="{{ asset('js/styleSwitcher.js') }}"></script>




</body>

</html>

@endif
