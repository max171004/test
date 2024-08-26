<br /><br /><div id="sponsors">
<div id="sponsorsinner">
<a href="http://www.bktemplates.cc.nf" target="_blank"><img src="https://www.bktemplates.cc.nf/images/bkt_mini.png" alt="BK-Templates - Free Web Site Templates and Images" title="BK-Templates - Free Web Site Templates and Images" border="0" width="88" height="31" /></a>   
</div>
</div>

<div id="footer">
<div id="footerinner">
<p>&copy; 2007 - <?php echo date("Y");?> - BK-Templates<br />
BK-Clash Template by <a href="https://www.bktemplates.cc.nf/" target="_blank">BK-Templates</a><br />
<a href="http://clashofclans.com/" target="_blank">Clash of Clans</a> and its logos/images are trademarks of Supercell and are &copy; 2012-<?php echo date("Y");?> <a href="http://supercell.com/" target="_blank">Supercell</a>.</p> 

</div>
</div>
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
