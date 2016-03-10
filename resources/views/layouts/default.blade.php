<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Perfectly Dopey</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <style>
            .navbar {
                border: 0;
                margin-bottom: 0;
            }

            .jumbotron {
                margin-bottom: 0;
            }

            .data-nav .container {
                text-align:center;
            }

            .data-nav-links,
            .data-nav-links > li {
                float:none;
                display:inline-block;
                *display:inline; /* ie7 fix */
                *zoom:1; /* hasLayout ie7 trigger */
                vertical-align: top;
            }

            .data-nav {
                width: 100%;
                z-index: 1000;
                border-radius: 0;
            }

            .chart div {
                font: 10px sans-serif;
                background-color: steelblue;
                text-align: right;
                padding: 3px;
                margin: 1px;
                color: white;
            }
        </style>
 
        @yield('header')
    </head>
    <body>

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Perfectly Dopey</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Home</a></li>
                        <li class="active"><a href="#data">Data</a></li>
                        <li><a href="#about">About</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="jumbotron">
            <div class="container">
                <h1>Perfectly Dopey</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            </div>
        </header>

        <main role="main" id="data">

            <div class="data-nav navbar navbar-default">
                <div class="container">
                    <ul class="data-nav-links nav navbar-nav">
                        <li><a class="data-nav-prev" href=""></a></li>
                        <li><a data-slide-index="0" href="">Perfect</a></li>
                        <li><a data-slide-index="1" href="">Overall</a></li>
                        <li><a data-slide-index="2" href="">2016</a></li>
                        <li><a data-slide-index="3" href="">2015</a></li>
                        <li><a data-slide-index="4" href="">2014</a></li>
                        <li><a class="data-nav-next" href=""></a></li>
                    </ul>
                </div>
            </div> <!-- /.data-nav -->

            <div class="data-wrap">
                <!-- Perfect data -->
                <div id="data-perfect">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Perfect</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3>Count By Year</h3>
                                <div class="chart"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /#data-perfect -->

                <!-- Overall data -->
                <div id="data-overall">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Overall</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h3>Totals and Averages</h3>
                            </div>
                            <div class="col-md-6">
                                <h3>Count By Year</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <h3>Count By Gender</h3>
                            </div>
                            <div class="col-md-4">
                                <h3>Count By Age</h3>
                            </div>
                            <div class="col-md-4">
                                <h3>Count By State</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3>Count By Time</h3>
                            </div>
                        </div>
                    </div>
                </div> <!-- /#data-overall -->

                <!-- Year 2016 data -->
                <div id="data-year-2016">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>2016</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h3>Totals and Averages</h3>
                            </div>
                            <div class="col-md-6">
                                <h3>Count By Year</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <h3>Count By Gender</h3>
                            </div>
                            <div class="col-md-4">
                                <h3>Count By Age</h3>
                            </div>
                            <div class="col-md-4">
                                <h3>Count By State</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3>Count By Time</h3>
                            </div>
                        </div>
                    </div>
                </div> <!-- /#data-year-2016 -->

                <!-- Year 2015 data -->
                <div id="data-year-2015">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>2015</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h3>Totals and Averages</h3>
                            </div>
                            <div class="col-md-6">
                                <h3>Count By Year</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <h3>Count By Gender</h3>
                            </div>
                            <div class="col-md-4">
                                <h3>Count By Age</h3>
                            </div>
                            <div class="col-md-4">
                                <h3>Count By State</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3>Count By Time</h3>
                            </div>
                        </div>
                    </div>
                </div> <!-- /#data-year-2015 -->

                <!-- Year 2014 data -->
                <div id="data-year-2014">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>2014</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h3>Totals and Averages</h3>
                            </div>
                            <div class="col-md-6">
                                <h3>Count By Year</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <h3>Count By Gender</h3>
                            </div>
                            <div class="col-md-4">
                                <h3>Count By Age</h3>
                            </div>
                            <div class="col-md-4">
                                <h3>Count By State</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3>Count By Time</h3>
                            </div>
                        </div>
                    </div>
                </div> <!-- /#data-year-2014 -->
            </div> <!-- /.data-wrap -->

            <div id="about">
                <div class="container">
                    <div class="row">
                        About
                    </div>
                </div>
            </div>

        </main>

        <footer class="container" role="contentinfo">
            <div class="row">
                <small>Copyright &copy; <time datetime="2016">2016</time></small>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="/js/iefix.js"></script>
        <script src="//d3js.org/d3.v3.min.js" charset="utf-8"></script>
        <script src="/js/vendor/jquery.bxslider.min.js"></script>

        <script>
            var navPosition = $('.data-nav').offset().top;
            var navbarOffset = $('.navbar').height();
            
            $(window).scroll(function() {
                if ($(window).scrollTop() > (navPosition - navbarOffset)) {
                    $('.data-nav').css('position', 'fixed').css('top', navbarOffset);
                    $('.data-wrap').css('margin-top', navbarOffset + 0);
                }
                else {
                    $('.data-nav').css('position', 'relative').css('top', 'inherit');
                    $('.data-wrap').css('margin-top', 0);
                }
            });

            (function () {
                var data = [4, 8, 15, 16, 23, 42];
                
                d3.select(".chart")
                    .selectAll("div")
                    .data(data)
                    .enter().append("div")
                    .style("width", function(d) { return d * 10 + "px"; })
                    .text(function(d) { return d; });

                console.log('testing');

                $('.data-wrap').bxSlider({
                    nextSelector: '.data-nav-next',
                    prevSelector: '.data-nav-prev',
                    pagerCustom: '.data-nav-links'
                });
            })();
        </script>

        @yield('footer')
    </body>
</html>