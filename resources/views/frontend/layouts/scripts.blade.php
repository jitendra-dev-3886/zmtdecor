<!-- jquery -->
<script src="{{ asset('assets/js/vendor/jquery-3.6.2.min.js') }}"></script>

<!-- bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- carousel js -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<!-- counterup js -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

<!-- waypoints js -->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>

<!-- wow js -->
<script src="{{ asset('assets/js/wow.js') }}"></script>

<!-- imagesloaded js -->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>

<!-- venobox js -->
<script src="{{ asset('venobox/venobox.js') }}"></script>

<!-- animated-text js -->
<script src="{{ asset('assets/js/animated-text.js') }}"></script>

<!-- venobox min js -->
<script src="{{ asset('venobox/venobox.min.js') }}"></script>

<!-- isotope js -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

<!-- jquery meanmenu js -->
<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>

<!-- jquery scrollup js -->
<script src="{{ asset('assets/js/jquery.scrollUp.js') }}"></script>

<!-- barfiller js -->
<script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>

<!-- popper js -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>

<!-- theme js -->
<script src="{{ asset('assets/js/theme.js') }}"></script>
<script>
document.addEventListener('contextmenu', e => e.preventDefault());

document.addEventListener('keydown', function(e) {
    if (
        e.key === 'F12' ||
        (e.ctrlKey && e.shiftKey && ['I','J','C'].includes(e.key.toUpperCase())) ||
        (e.ctrlKey && e.key.toLowerCase() === 'u')
    ) {
        e.preventDefault();
    }
});
</script>


