<!DOCTYPE html>
<html>
    <head>
        <title>Accounting Application</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Black Pearl Responsive Admin Template">
        <meta name="keywords" content="Black Pearl, Admin, Template, Bootstrap">
        <meta charset="UTF-8">
        <!-- CSS -->
        {!!HTML::style('assets/admin/css/bootstrap.min.css')!!}
        {!!HTML::style('assets/admin/css/calendar.min.css')!!}
        {!!HTML::style('assets/admin/css/icomoon.min.css')!!}
        {!!HTML::style('assets/admin/css/media-player.min.css')!!}
        {!!HTML::style('assets/admin/css/file-manager.min.css')!!}
        {!!HTML::style('assets/admin/css/form.min.css')!!}
        {!!HTML::style('assets/admin/css/style.min.css')!!}
        {!! HTML::style('assets/admin/css/font-awesome/css/font-awesome.min.css') !!}
    </head>
    <body>
        @include('admin.layouts.partials.notifications')
        @yield('content')
    </body>
    <footer id="footer">
        <p>
        Copyright (c) {{date('Y')}}
        </p>
    </footer>
    <!-- Older IE Message -->
    <!--[if lt IE 9]>
        <div class="ie-block">
                <h1 class="Ops">Ooops!</h1>
                <p>
                    You are using an outdated version of Internet Explorer, upgrade to any of the following web browser in order to access the maximum functionality of this website.
                </p>
                <ul class="browsers">
                        <li>
                                <a href="https://www.google.com/intl/en/chrome/browser/">
                                    <img src="img/browsers/chrome.png" alt="">
                                    <div>Google Chrome</div>
                                </a>
                        </li>
                        <li>
                                <a href="http://www.mozilla.org/en-US/firefox/new/">
                                    <img src="img/browsers/firefox.png" alt="">
                                    <div>Mozilla Firefox</div>
                                </a>
                        </li>
                        <li>
                                <a href="http://www.opera.com/computer/windows">
                                    <img src="img/browsers/opera.png" alt="">
                                    <div>Opera</div>
                                </a>
                        </li>
                        <li>
                                <a href="http://safari.en.softonic.com/">
                                    <img src="img/browsers/safari.png" alt="">
                                    <div>Safari</div>
                                </a>
                        </li>
                        <li>
                                <a href="http://windows.microsoft.com/en-us/internet-explorer/downloads/ie-10/worldwide-languages">
                                    <img src="img/browsers/ie.png" alt="">
                                    <div>Internet Explorer(New)</div>
                                </a>
                        </li>
                </ul>
                <p>
                    Upgrade your browser for a Safer and Faster web experience.
                    <br/>
                    Thank you for your patience...
                </p>
        </div>
    <![endif]-->
    <!-- Javascipt -->
    {!! HTML::script('assets/admin/js/jquery-1.10.2.min.js') !!}
    {!! HTML::script('assets/admin/js/jquery-ui-1.10.3.min.js') !!}
    {!! HTML::script('assets/admin/js/chart/highcharts.js') !!}
    {!! HTML::script('assets/admin/js/chart/modules/exporting.js') !!}
    {!! HTML::script('assets/admin/js/bootstrap.min.js') !!}
    {!! HTML::script('assets/admin/js/feeds.js') !!}
    {!! HTML::script('assets/admin/js/chosen.js') !!}
    {!! HTML::script('assets/admin/js/shadowbox.js') !!}
    {!! HTML::script('assets/admin/js/sparkline.min.js') !!}
    {!! HTML::script('assets/admin/js/masonry.min.js') !!}
    {!! HTML::script('assets/admin/js/enscroll.min.js') !!}
    {!! HTML::script('assets/admin/js/calendar.min.js') !!}
    {!! HTML::script('assets/admin/js/datatables.min.js') !!}
    {!! HTML::script('assets/admin/js/autosize.min.js') !!}
    {!! HTML::script('assets/admin/js/select.min.js') !!}
    {!! HTML::script('assets/admin/js/toggler.min.js') !!}
    {!! HTML::script('assets/admin/js/datetimepicker.min.js') !!}
    {!! HTML::script('assets/admin/js/colorpicker.min.js') !!}
    {!! HTML::script('assets/admin/js/fileupload.min.js') !!}
    {!! HTML::script('assets/admin/js/media-player.js') !!}
    {!! HTML::script('assets/admin/js/validation/validate.min.js') !!}
    {!! HTML::script('assets/admin/js/validation/validationEngine.min.js') !!}
    {!! HTML::script('assets/admin/js/functions.js') !!}
    <!-- Initiate Data Table -->
    <script type="text/javascript">
                $(document).ready(function(){
                    $('#example').dataTable( {
                        "sPaginationType": "full_numbers"
                    });
                    //Modify Data Table
                    $('.dataTables_wrapper .sOption').wrapAll('<div class="sOption_wrapper"></div>');
                    $('.dataTables_wrapper .pagin').wrapAll('<div class="sOption_wrapper"></div>');
                });
    </script>
    <script type="text/javascript">
                $(document).ready(function(){
                    $('.template-customize ul li').click(function(){
                        var getElem = $(this).closest('ul').attr('data-elem');
                        var target = (getElem == "body") ? "body, #leftbar, #rightbar" : "#content";
                        var src = $(this).find('img').attr('src');
                        var bg = 'url('+src+')';
                        $(target).css('background', bg)
                    });
                    $('#tc-toggle').click(function(){
                        $('.template-customize').css('height','auto');
                    });
                    $(document).mouseup(function (e) {
                        var container = $(".template-customize");
                        if (container.has(e.target).length === 0) {
                            container.height(0);
                        }
                    });
                });
                // Area Chart
                $(function () {
                    $('#areaChart').highcharts({
                        chart: {
                            type: 'area',
                            backgroundColor:'rgba(255, 255, 255, 0.01)',
                            height: 300
                        },
                        title: {
                            text: '',
                        },
                        subtitle: {
                            text: ''
                        },
                        xAxis: {
                            labels: {
                            }
                        },
                        yAxis: {
                            title: {
                                text: ''
                            },
                            labels: {
                                formatter: function() {
                                    return this.value / 1000 +'k';
                                }
                            },
                            gridLineWidth: 1,
                            gridLineColor: '#eaeaea'
                        },
                        tooltip: {
                            pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                        },
                        plotOptions: {
                            area: {
                                pointStart: 1,
                                marker: {
                                    enabled: false,
                                    symbol: 'circle',
                                    radius: 2,
                                    states: {
                                        hover: {
                                            enabled: true
                                        }
                                    }
                                }
                            }
                        },
                        series: [{
                            name: 'Bing',
                            data: [0, 1060, 1605, 2471, 3322,
                                4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092, 14478,
                                15915, 17385, 19055, 21205, 23044, 25393, 27935, 30062, 32049,
                                33952, 35804, 37431, 39197, 45000, 43000, 41000, 39000, 37000,
                                35000, 33000, 31000, 29000, 27000, 25000, 24000, 23000, 22000,
                                21000, 20000, 19000, 18000, 18000, 17000, 16000, 15000, 14000,
                                13000, 12000, 11000, 10000, 9000, 7000, 6000, 4000, 2000, 1000, 0]
                        }, {
                            name: 'Bing',
                            data: [null, null , null , null ,null,
                                5, 25, 50, 120, 150, 200, 426, 660, 869, 1060, 1605, 2471, 3322,
                                4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092, 14478,
                                15915, 17385, 19055, 21205, 23044, 25393, 27935, 30062, 32049,
                                33952, 35804, 37431, 39197, 45000, 43000, 41000, 39000, 37000,
                                35000, 33000, 31000, 29000, 27000, 25000, 24000, 23000, 22000,
                                21000, 20000, 19000, 18000, 18000, 17000, 16000]
                        }],
                        exporting: {
                            enabled: false
                        },
                        credits: {
                            enabled: false
                        },
                        colors: [
                            '#FFA206',
                            '#09AD30',
                        ],
                        legend: {
                            borderRadius: 0,
                            borderColor: '#e3e3e3',
                            enabled: false
                        }
                    });
                });
                //Masonry for widgets
                $(window).load(function(){
                    $('.m-container').masonry({
                        itemSelector: '.masonry'
                    });
                });
    </script>
    @yield('footer')
</body>
</html>