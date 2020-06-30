
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>
	
        <!-- js placed at the end of the document so the pages load faster -->       
        <script src="admin/lib/jquery-ui-1.9.2.custom.min.js"></script>         
        <script src="admin/lib/jquery.ui.touch-punch.min.js"></script>         
        <script class="include" type="text/javascript" src="admin/lib/jquery.dcjqaccordion.2.7.js"></script>         
        <script src="admin/lib/jquery.scrollTo.min.js"></script>         
        <script src="admin/lib/jquery.nicescroll.js" type="text/javascript"></script>

        <!--script autofill-->
		<script type="text/javascript">
			function autofill(){
				var nik = $("#nik").val();
				$.ajax({
				url : 'admin/input/autofill.php',
				data : "nik="+nik ,
				}).success(function (data) {
					var json = data,
					obj = JSON.parse(json);
					$("#nama").val(obj.nama);
					$("#tempat").val(obj.tempat);
					$("#tgl").val(obj.tgl);
					$("#jenkel").val(obj.jenkel);
					$("#agama").val(obj.agama);
					$("#stts").val(obj.stts);
					$("#pekerjaan").val(obj.pekerjaan);
					$("#alamat").val(obj.alamat);
					$("#rt").val(obj.rt);
					$("#rw").val(obj.rw);
				});				
			}
		</script>
		<script type="text/javascript">
			function auto(){
				var nik = $("#nik1").val();
				$.ajax({
				url : 'admin/input/autofill1.php',
				data : "nik1="+nik ,
				}).success(function (data) {
					var json = data,
					obj = JSON.parse(json);
					$("#nama1").val(obj.nama);;
				});					
			}			
		</script>		
  </body>

</html>