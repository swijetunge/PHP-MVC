 	<!-- /.container -->
    <div class="container">

        <hr>

        <footer>
        	
        </footer>

    </div>
    <!-- /.container -->
    
	<!-- JavaScript -->
    <script src="/public/js/jquery-1.10.2.js"></script>
    <script src="/public/js/bootstrap.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="/public/js/admin/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="/public/js/admin/plugins/morris/morris.js"></script>
    
    <script src="/public/trumbowyg/trumbowyg.js"></script>
    <script src="/public/trumbowyg/langs/fr.js"></script>
    <script src="/public/trumbowyg/plugins/upload/trumbowyg.upload.js"></script>
    <script src="/public/trumbowyg/plugins/base64/trumbowyg.base64.js"></script>
    
    <!-- Page-Level Plugin Scripts - Flot -->
    <!--[if lte IE 8]><script src="/public/js/admin/excanvas.min.js"></script><![endif]-->
    <script src="/public/js/admin/plugins/flot/jquery.flot.js"></script>
    <script src="/public/js/admin/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/public/js/admin/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/public/js/admin/plugins/flot/jquery.flot.pie.js"></script>
    
    <!-- Page-Level Plugin Scripts - Morris -->
    <script src="/public/js/admin/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="/public/js/admin/plugins/morris/morris.js"></script>
    
    <!-- SB Admin Scripts - Include with every page -->
    <script src="/public/js/admin/sb-admin.js"></script>
    
    <script src="/public/js/admin/plugins/metisMenu/jquery.metisMenu.js"></script>
    
    <?php if(isset($page) && $page=="admin/sb-home"){ ?>
     <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="/public/js/admin/dashboard-demo.js"></script>
    <?php } ?>
    
    <?php if(isset($page) && $page=="admin/sb-flot"){ ?>
    <!-- Page-Level Demo Scripts - Flot - Use for reference -->
    <script src="/public/js/admin/flot-demo.js"></script>
    <?php } ?>
    
    <?php if(isset($page) && $page=="admin/sb-morris"){ ?>
    <!-- Page-Level Demo Scripts - Morris - Use for reference -->
    <script src="/public/js/admin/morris-demo.js"></script>	
    <?php } ?>
    
    
</body>
</html>