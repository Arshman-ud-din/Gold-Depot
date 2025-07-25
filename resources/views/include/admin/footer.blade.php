 <!--begin::Footer-->
 <footer class="app-footer">
     <!--begin::To the end-->
     <div class="float-end d-none d-sm-inline">Anything you want</div>
     <!--end::To the end-->
     <!--begin::Copyright-->
     <strong>
         Copyright &copy; 2014-2024&nbsp;
         <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
     </strong>
     All rights reserved.
     <!--end::Copyright-->
 </footer>
 <!--end::Footer-->
 </div>
 <!--end::App Wrapper-->
 <!--begin::Script-->
 <!--begin::Third Party Plugin(OverlayScrollbars)-->
 <script src="{{ asset('assets/admin/js/script.js') }}"></script>
 <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
     integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
 <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
     integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
 </script>
 <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
     integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
 </script>
 <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
     crossorigin="anonymous"></script>
 <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
 {{-- <script src="{{ asset('assets/admin/js/adminlte.js') }}"></script> --}}
 <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
 @stack('script')

 <script>
     const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
     const Default = {
         scrollbarTheme: 'os-theme-light',
         scrollbarAutoHide: 'leave',
         scrollbarClickScroll: true,
     };
     document.addEventListener('DOMContentLoaded', function() {
         const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
         if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
             OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                 scrollbars: {
                     theme: Default.scrollbarTheme,
                     autoHide: Default.scrollbarAutoHide,
                     clickScroll: Default.scrollbarClickScroll,
                 },
             });
         }
     });
 </script>

<script>
     const connectedSortables = document.querySelectorAll('.connectedSortable');
     connectedSortables.forEach((connectedSortable) => {
         let sortable = new Sortable(connectedSortable, {
             group: 'shared',
             handle: '.card-header',
         });
     });

     const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
     cardHeaders.forEach((cardHeader) => {
         cardHeader.style.cursor = 'move';
     });
 </script>
 <!-- apexcharts -->

 <!-- ChartJS -->
 <script>
     // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
     // IT'S ALL JUST JUNK FOR DEMO
     // ++++++++++++++++++++++++++++++++++++++++++

     const sales_chart_options = {
         series: [{
                 name: 'Digital Goods',
                 data: [28, 48, 40, 19, 86, 27, 90],
             },
             {
                 name: 'Electronics',
                 data: [65, 59, 80, 81, 56, 55, 40],
             },
         ],
         chart: {
             height: 300,
             type: 'area',
             toolbar: {
                 show: false,
             },
         },
         legend: {
             show: false,
         },
         colors: ['#0d6efd', '#20c997'],
         dataLabels: {
             enabled: false,
         },
         stroke: {
             curve: 'smooth',
         },
         xaxis: {
             type: 'datetime',
             categories: [
                 '2023-01-01',
                 '2023-02-01',
                 '2023-03-01',
                 '2023-04-01',
                 '2023-05-01',
                 '2023-06-01',
                 '2023-07-01',
             ],
         },
         tooltip: {
             x: {
                 format: 'MMMM yyyy',
             },
         },
     };
 </script>
 <!-- jsvectormap -->
 <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
     integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
     integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script>
 <!-- jsvectormap -->
 <script>
     const visitorsData = {
         US: 398, // USA
         SA: 400, // Saudi Arabia
         CA: 1000, // Canada
         DE: 500, // Germany
         FR: 760, // France
         CN: 300, // China
         AU: 700, // Australia
         BR: 600, // Brazil
         IN: 800, // India
         GB: 320, // Great Britain
         RU: 3000, // Russia
     };

     // World map by jsVectorMap
     const map = new jsVectorMap({
         selector: '#world-map',
         map: 'world',
     });

     // Sparkline charts
 </script>
 <!--end::OverlayScrollbars Configure-->
 <!-- OPTIONAL SCRIPTS -->
 <!-- sortablejs -->
 <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
     integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script>
 <!-- sortablejs -->

 <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

 <!--end::Script-->
 </body>
 <!--end::Body-->

 </html>
