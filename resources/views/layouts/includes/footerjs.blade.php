<script src="{{ asset('js/app.js') }}"></script>
<!-- jquery-->
<script src="{{ asset('sms/js/jquery-3.3.1.min.js') }}"></script>
<!-- Plugins js -->
<script src="{{ asset('sms/js/plugins.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('sms/js/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('sms/js/bootstrap.min.js') }}"></script>
<!-- Counterup Js -->
<script src="{{ asset('sms/js/jquery.counterup.min.js') }}"></script>
<!-- Moment Js -->
<script src="{{ asset('sms/js/moment.min.js') }}"></script>
<!-- Waypoints Js -->
<script src="{{ asset('sms/js/jquery.waypoints.min.js') }}"></script>
<!-- Scroll Up Js -->
<script src="{{ asset('sms/js/jquery.scrollUp.min.js') }}"></script>
<!-- Full Calender Js -->
<script src="{{ asset('sms/js/fullcalendar.min.js') }}"></script>
<!-- Chart Js -->
<script src="{{ asset('sms/js/Chart.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('sms/js/main.js') }}"></script>

<script type="text/javascript">
    let current = location.pathname,
        sidebar = $('.sidebar');

    //Sidebar
    $(function (){
        function addActiveClass(element) {
            if (element.attr('href').indexOf(current) !== -1) {
                element.addClass('active');
            }
        }

        $('.nav li a', sidebar).each(function () {
            let $this = $(this);
            addActiveClass($this);
        });
    });

    //Collapse
    let toggleButton = document.getElementById('sidebar-toggle-button');
    let elements = document.querySelectorAll('.wrapper');

    elements.forEach(i => {
        toggleButton.addEventListener('click', function() {
            i.classList.toggle('sidebar-collapsed');
        });
    });
</script>
<script type="text/javascript">
    //Collapse mobile
    let mobileToggleButton = document.getElementById('sidebar-toggle-button-mobile');
    let mobileElements = document.querySelectorAll('.wrapper');

    mobileElements.forEach(i => {
        mobileToggleButton.addEventListener('click', function() {
            i.classList.toggle('sidebar-collapsed-mobile');
        });
    });
</script>

@stack('footer_scripts')

