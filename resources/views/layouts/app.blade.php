<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- Bootstrap Core CSS -->
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/plugins/html5-editor/bootstrap-wysihtml5.css" />

    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->



</head>
<body class="fix-header card-no-border logo-center">
  <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="app">


        @guest
        <div id="main-wrapper" class="login-register login-sidebar" style="background-image:url(/assets/images/background/login-register.jpg);">
            <!--<li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>-->
        @else
        <div id="main-wrapper">
        <topo titulo="{{ config('app.name', 'Laravel') }}" url="{{ url('/') }}" user="{{Auth::user()->name}}" usermail="{{Auth::user()->email}}" token="{{csrf_token()}}" lvl-autorizacao="admin">

      </topo>


      <topomenu>
        <ul id="sidebarnav">
            <li class="nav-small-cap">PERSONAL</li>
            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="index.html">Minimal </a></li>
                    <li><a href="index2.html">Analytical</a></li>
                    <li><a href="index3.html">Demographical</a></li>
                    <li><a href="index4.html">Modern</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Apps</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="app-calendar.html">Calendar</a></li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">Inbox</a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="app-email.html">Mailbox</a></li>
                            <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                            <li><a href="app-compose.html">Compose Mail</a></li>
                        </ul>
                    </li>
                    <li><a href="app-chat.html">Chat app</a></li>
                    <li><a href="app-ticket.html">Support Ticket</a></li>
                    <li><a href="app-contact.html">Contact / Employee</a></li>
                    <li><a href="app-contact2.html">Contact Grid</a></li>
                    <li><a href="app-contact-detail.html">Contact Detail</a></li>
                </ul>
            </li>
            <li class="three-column"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Ui Elements</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="ui-cards.html">Cards</a></li>
                    <li><a href="ui-user-card.html">User Cards</a></li>
                    <li><a href="ui-buttons.html">Buttons</a></li>
                    <li><a href="ui-modals.html">Modals</a></li>
                    <li><a href="ui-tab.html">Tab</a></li>
                    <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                    <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                    <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                    <li><a href="ui-notification.html">Notification</a></li>
                    <li><a href="ui-progressbar.html">Progressbar</a></li>
                    <li><a href="ui-nestable.html">Nestable</a></li>
                    <li><a href="ui-range-slider.html">Range slider</a></li>
                    <li><a href="ui-timeline.html">Timeline</a></li>
                    <li><a href="ui-typography.html">Typography</a></li>
                    <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                    <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                    <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                    <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
                    <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                    <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                    <li><a href="ui-list-media.html">List Media</a></li>
                    <li><a href="ui-ribbons.html">Ribbons</a></li>
                    <li><a href="ui-grid.html">Grid</a></li>
                    <li><a href="ui-carousel.html">Carousel</a></li>
                    <li><a href="ui-date-paginator.html">Date-paginator</a></li>
                    <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
                </ul>
            </li>
            <li class="two-column"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Pages</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="starter-kit.html">Starter Kit</a></li>
                    <li><a href="pages-profile.html">Profile page</a></li>
                    <li><a href="pages-animation.html">Animation</a></li>
                    <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                    <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                    <li><a href="pages-invoice.html">Invoice</a></li>
                    <li><a href="pages-treeview.html">Treeview</a></li>
                    <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                    <li><a href="pages-search-result.html">Search result</a></li>
                    <li><a href="pages-scroll.html">Scrollbar</a></li>
                    <li><a href="pages-pricing.html">Pricing</a></li>
                    <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                    <li><a href="pages-gallery.html">Gallery</a></li>
                    <li><a href="pages-faq.html">Faqs</a></li>
                    <li><a href="#" class="has-arrow">Error Pages</a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="pages-error-400.html">400</a></li>
                            <li><a href="pages-error-403.html">403</a></li>
                            <li><a href="pages-error-404.html">404</a></li>
                            <li><a href="pages-error-500.html">500</a></li>
                            <li><a href="pages-error-503.html">503</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="has-arrow">Authentication</a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="pages-login.html">Login 1</a></li>
                            <li><a href="pages-login-2.html">Login 2</a></li>
                            <li><a href="pages-register.html">Register</a></li>
                            <li><a href="pages-register2.html">Register 2</a></li>
                            <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                            <li><a href="pages-recover-password.html">Recover password</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li>
            <li class="two-column"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Forms</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="form-basic.html">Basic Forms</a></li>
                    <li><a href="form-layout.html">Form Layouts</a></li>
                    <li><a href="form-addons.html">Form Addons</a></li>
                    <li><a href="form-material.html">Form Material</a></li>
                    <li><a href="form-float-input.html">Floating Lable</a></li>
                    <li><a href="form-pickers.html">Form Pickers</a></li>
                    <li><a href="form-upload.html">File Upload</a></li>
                    <li><a href="form-mask.html">Form Mask</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="form-dropzone.html">File Dropzone</a></li>
                    <li><a href="form-icheck.html">Icheck control</a></li>
                    <li><a href="form-img-cropper.html">Image Cropper</a></li>
                    <li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
                    <li><a href="form-typehead.html">Form Typehead</a></li>
                    <li><a href="form-wizard.html">Form Wizard</a></li>
                    <li><a href="form-xeditable.html">Xeditable Editor</a></li>
                    <li><a href="form-summernote.html">Summernote Editor</a></li>
                    <li><a href="form-tinymce.html">Tinymce Editor</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tables</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="table-basic.html">Basic Tables</a></li>
                    <li><a href="table-layout.html">Table Layouts</a></li>
                    <li><a href="table-data-table.html">Data Tables</a></li>
                    <li><a href="table-footable.html">Footable</a></li>
                    <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                    <li><a href="table-responsive.html">Responsive Table</a></li>
                    <li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
                    <li><a href="table-editable-table.html">Editable Table</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Extra</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li>
                        <a class="has-arrow " href="#" aria-expanded="false">Widgets</a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="widget-apps.html">Data Widgets</a></li>
                            <li><a href="widget-data.html">Statestic Widgets</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="#" aria-expanded="false">Maps</a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="map-google.html">Google Maps</a></li>
                            <li><a href="map-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="#" aria-expanded="false">Icons</a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="icon-material.html">Material Icons</a></li>
                            <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                            <li><a href="icon-themify.html">Themify Icons</a></li>
                            <li><a href="icon-linea.html">Linea Icons</a></li>
                            <li><a href="icon-weather.html">Weather Icons</a></li>
                            <li><a href="icon-simple-lineicon.html">Simple Lineicons</a></li>
                            <li><a href="icon-flag.html">Flag Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="#" aria-expanded="false">Charts</a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-chartist.html">Chartis Chart</a></li>
                            <li><a href="chart-echart.html">Echarts</a></li>
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-knob.html">Knob Chart</a></li>
                            <li><a href="chart-chart-js.html">Chartjs</a></li>
                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                            <li><a href="chart-extra-chart.html">Extra chart</a></li>
                            <li><a href="chart-peity.html">Peity Charts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">Page Layout</a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="layout-single-column.html">1 Column</a></li>
                            <li><a href="layout-fix-header.html">Fix header</a></li>
                            <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>
                            <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>
                            <li><a href="layout-boxed.html">Boxed Layout</a></li>
                            <li><a href="layout-logo-center.html">Logo in Center</a></li>
                        </ul>
                    </li>
                    <li>
                    </li>
                </ul>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="#">item 1.1</a></li>
                    <li><a href="#">item 1.2</a></li>
                    <li> <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="#">item 1.3.1</a></li>
                            <li><a href="#">item 1.3.2</a></li>
                            <li><a href="#">item 1.3.3</a></li>
                            <li><a href="#">item 1.3.4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">item 1.4</a></li>
                </ul>
            </li>
        </ul>
      </topomenu>
      <div class="page-wrapper">
@endguest



        @yield('content')
    </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="/assets/plugins/skycons/skycons.js"></script>
    <!-- chartist chart -->
    <script src="/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="/js/dashboard3.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <!-- This is data table -->
        <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <!-- start - This is for export functionality only -->
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        <!-- end - This is for export functionality only -->
        <script src="/assets/plugins/tinymce/tinymce.min.js"></script>



    <script>

      if ($("#conteudoAdd") && $("#conteudoEditar")) {
        setTimeout(function(){
          tinyMCE.activeEditor.setContent($('#conteudoAdd').val());
  }, 500);
      }
    function loadText(modo) {
      if(modo == "editar"){
       setTimeout(function(){
         tinyMCE.activeEditor.setContent($('#conteudoEditar').val());
 }, 500);}else{
  setTimeout(function(){
    tinyMCE.activeEditor.setContent($('#conteudoDetalhes').val());
}, 500);
    }}

    $(document).ready(function() {

      if ($("#conteudoAdd") && $("#conteudoEditar") && $("#conteudoDetalhes")) {

           tinymce.init({
               selector: "textarea#conteudoAdd",
               theme: "modern",
               height: 300,
               plugins: [
                   "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                   "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                   "save table contextmenu directionality emoticons template paste textcolor"
               ],
               toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",

           });
           tinymce.init({
               selector: "textarea#conteudoEditar",
               theme: "modern",
               height: 300,
               plugins: [
                   "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                   "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                   "save table contextmenu directionality emoticons template paste textcolor"
               ],
               toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
           });

           tinymce.init({
               selector: "textarea#conteudoDetalhes",
               readonly: true,
               theme: "modern",
               height: 300,
           });

       }

        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
     $('#example23').DataTable({
       language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
            },
        dom: 'Bfrtip',
        buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });


// Do something with the 'data' variable

    </script>

</body>
</html>
