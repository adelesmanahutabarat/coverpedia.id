{{-- <footer class="footer text-sm">
    <div>
        <a href="/">{{app_name()}}</a>.
        @if(setting('show_copyright'))
        @lang('Copyright') &copy; {{ date('Y') }}
        @endif
    </div>
    <div class="ms-auto">{!! setting('footer_text') !!}</div>
</footer> --}}

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> &copy; Shreyu theme by <a href="">Coderthemes</a>
            </div>
            <div class="col-md-6">
                <div class="text-md-end footer-links d-none d-sm-block">
                    <a href="javascript:void(0);">About Us</a>
                    <a href="javascript:void(0);">Help</a>
                    <a href="javascript:void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
