<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/fonts/ptsans/stylesheet.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/fluid.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="/css/mws.style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/icons/icons.css" media="screen" />

    <!-- Demo and Plugin Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/css/demo.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="/plugins/colorpicker/colorpicker.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/plugins/jimgareaselect/css/imgareaselect-default.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/plugins/fullcalendar/fullcalendar.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/plugins/fullcalendar/fullcalendar.print.css" media="print" />
    <link rel="stylesheet" type="text/css" href="/plugins/tipsy/tipsy.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/plugins/sourcerer/Sourcerer-1.2.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/plugins/jgrowl/jquery.jgrowl.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/plugins/spinner/spinner.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/jui/jquery.ui.css" media="screen" />

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/css/mws.theme.css" media="screen" />

    <!-- JavaScript Plugins -->

    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>

    <script type="text/javascript" src="/plugins/jimgareaselect/jquery.imgareaselect.min.js"></script>
    <script type="text/javascript" src="/plugins/jquery.dualListBox-1.3.min.js"></script>
    <script type="text/javascript" src="/plugins/jgrowl/jquery.jgrowl.js"></script>
    <script type="text/javascript" src="/plugins/jquery.filestyle.js"></script>
    <script type="text/javascript" src="/plugins/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="/plugins/jquery.dataTables.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/plugins/flot/excanvas.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/plugins/flot/jquery.flot.min.js"></script>
    <script type="text/javascript" src="/plugins/flot/jquery.flot.pie.min.js"></script>
    <script type="text/javascript" src="/plugins/flot/jquery.flot.stack.min.js"></script>
    <script type="text/javascript" src="/plugins/flot/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="/plugins/colorpicker/colorpicker.js"></script>
    <script type="text/javascript" src="/plugins/tipsy/jquery.tipsy.js"></script>
    <script type="text/javascript" src="/plugins/sourcerer/Sourcerer-1.2.js"></script>
    <script type="text/javascript" src="/plugins/jquery.placeholder.js"></script>
    <script type="text/javascript" src="/plugins/jquery.validate.js"></script>
    <script type="text/javascript" src="/plugins/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="/plugins/spinner/ui.spinner.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.js"></script>


    <script type="text/javascript" src="/plugins/elfinder/js/elfinder.min.js"></script>

    <script type="text/javascript" src="/plugins/plupload/plupload.js"></script>
    <script type="text/javascript" src="/plugins/plupload/plupload.flash.js"></script>
    <script type="text/javascript" src="/plugins/plupload/plupload.html4.js"></script>
    <script type="text/javascript" src="/plugins/plupload/plupload.html5.js"></script>
    <script type="text/javascript" src="/plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>

    <link rel="stylesheet" href="/plugins/plupload/jquery.plupload.queue.css" />
    <link rel="stylesheet" href="/plugins/elfinder/css/elfinder.css" />


    <script type="text/javascript" src="/js/mws.js"></script>
    <script type="text/javascript" src="/js/demo.js"></script>
    <script type="text/javascript" src="/js/themer.js"></script>

    <script type="text/javascript" src="/js/demo.files.js"></script>

    <title>MWS Admin - Table</title>

</head>

<body>

<div id="mws-themer">
    <div id="mws-themer-hide"></div>
    <div id="mws-themer-content">
        <div class="mws-themer-section">
            <label for="mws-theme-presets">Presets</label> <select id="mws-theme-presets"></select>
        </div>
        <div class="mws-themer-separator"></div>
        <div class="mws-themer-section">
            <ul>
                <li><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                <li><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                <li><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
            </ul>
        </div>
        <div class="mws-themer-separator"></div>
        <div class="mws-themer-section">
            <ul>
                <li><span>Text Glow Opacity</span> <div id="mws-textglow-op"></div></li>
            </ul>
        </div>
        <div class="mws-themer-separator"></div>
        <div class="mws-themer-section">
            <button class="mws-button red small" id="mws-themer-getcss">Get CSS</button>
        </div>
    </div>
    <div id="mws-themer-css-dialog">
        <div class="mws-form">
            <div class="mws-form-row" style="padding:0;">
                <div class="mws-form-item">
                    <textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="mws-header" class="clearfix">
    <div id="mws-logo-container">
        <div id="mws-logo-wrap">
            <img src="/images/mws-logo.png" alt="mws admin" />
        </div>
    </div>

    <?php include("header.php");?>
</div>

<div id="mws-wrapper">
    <div id="mws-sidebar-stitch"></div>
    <div id="mws-sidebar-bg"></div>
    <?php include("menu.php");?>

    <?php echo $content;?>
</div>


</body>
</html>
