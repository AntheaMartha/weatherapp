<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="<?= base_url(); ?>js/2.0.3-jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?= base_url(); ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?= base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="<?= base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/flot/jquery.flot.resize.min.js"></script>

		<!--ace scripts-->

		<script src="<?= base_url(); ?>assets/js/ace-elements.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->

	</body>
</html>