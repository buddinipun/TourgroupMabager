<?php ?>


<div id="footer_div" >
    <div class=" navbar navbar-blend navbar-fixed-bottom">
        <div class="container-fluid" style="padding-top: 20px; color: #c0c0c0; font-size: 12px;">
            <div class="pull-right">
                <p class="">Online Tour Group Manager &copy; <span id="year"><em></em></span></p>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        function setHeight() {
            var windowHeight = $(window).innerHeight() - 70;
            $('#page-wrapper').css('min-height', windowHeight);
        };
        setHeight();

        $(window).resize(function () {
            setHeight();
        });
    });
</script>

<script>
    window.onload = function () {
        var d = new Date();
        var n = d.getFullYear();
        var dat = document.getElementById("year");
        dat.innerHTML = n;
        
        var nice = $('html').niceScroll({cursorborder: "", cursorcolor: "#000", cursorwidth: "2px", boxzoom: true, autohidemode: false});
    }
</script>