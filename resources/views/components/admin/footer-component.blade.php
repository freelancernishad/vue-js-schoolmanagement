

   <!-- Footer Area Start Here -->
   <footer class="footer-wrap-layout1" v-show="$route.path === '/login' || $route.path === '/register' || $route.path === 'forget' ? false : true " >
    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
            href="#">PsdBosS</a></div>
</footer>
<!-- Footer Area End Here -->
</div>
</div>
<!-- Page Area End Here -->
</div>






    <script src="{{ asset('js/app.js') }}"></script>
<!-- Plugins js -->
{{-- <script src="{{ asset('dashboard_asset/js/plugins.js') }}"></script> --}}
<!-- Popper js -->
<script src="{{ asset('dashboard_asset/js/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('dashboard_asset/js/bootstrap.min.js') }}"></script>
<!-- Counterup Js -->
{{-- <script src="{{ asset('dashboard_asset/js/jquery.counterup.min.js') }}"></script> --}}
<!-- Moment Js -->
{{-- <script src="{{ asset('dashboard_asset/js/moment.min.js') }}"></script> --}}
<!-- Waypoints Js -->
{{-- <script src="{{ asset('dashboard_asset/js/jquery.waypoints.min.js') }}"></script> --}}
<!-- Scroll Up Js -->
<script src="{{ asset('dashboard_asset/js/jquery.scrollUp.min.js') }}"></script>
<!-- Full Calender Js -->
{{-- <script src="{{ asset('dashboard_asset/js/fullcalendar.min.js') }}"></script> --}}
<!-- Chart Js -->
{{-- <script src="{{ asset('dashboard_asset/js/Chart.min.js') }}"></script> --}}
{{-- <script src="{{ asset('dashboard_asset/js/jquery.dataTables.min.js') }}"></script> --}}
    <!-- Select 2 Js -->
    {{-- <script src="{{ asset('dashboard_asset/js/select2.min.js') }}"></script> --}}
    <!-- Date Picker Js -->
    {{-- <script src="{{ asset('dashboard_asset/js/datepicker.min.js') }}"></script> --}}
<!-- Custom Js -->
<script src="{{ asset('dashboard_asset/js/main.js') }}"></script>



<script>

function navhide(){
    document.getElementById('wrapper').classList.remove('sidebar-collapsed-mobile');
}



// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("topnavbar");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("fixednav");
  } else {
    header.classList.remove("fixednav");
  }
}




</script>

</body>

</html>
