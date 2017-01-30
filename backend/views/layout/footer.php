
</div>
</div>
<script src="sbadmin/bower_components/jquery/dist/jquery.min.js"></script>

<!--  <script src="../assets/js/jquery-1.10.2.min.js"></script> -->


	<script src="sbadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="sbadmin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
	<script type="text/javascript" src="sbadmin/bower_components/raphael/raphael-min.js"></script>
	<script type="text/javascript" src="sbadmin/bower_components/morrisjs/morris.min.js"></script>
  <script type="text/javascript" src="sbadmin/bootstrap/dist/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="sbadmin/bower_components/bootstrap/dist/js/jquery.dataTables.min.js"></script>
	<!-- <script type="text/javascript" src="sbadmin/js/morris-data.js"></script> -->
	<script type="text/javascript" src="sbadmin/dist/js/sb-admin-2.js"></script>
  <script type="text/javascript" src="sbadmin/dist/js/jquery-ui.min.js"></script>
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script> -->
	<script src="../assets/js/jquery.validate.min.js" type="text/javascript"></script>
  <script src="../assets/js/custom.js"></script>
  <script type="text/javascript">
        $(document).ready(function() {
                    $('#example').DataTable();
        });
    </script> 
  <script>
  $( function() {
    $( "#report_date" ).datepicker({  
      maxDate: new Date(),
      dateFormat: 'yy-m-d' 
    });
    $( "#report_date" ).datepicker();

  
  } );
  $(function() {
        $( "#dob" ).datepicker({
          dateFormat : 'yy-mm-dd',
          changeMonth: true,
          changeYear: true,
          yearRange: '-100y:c+nn',
            maxDate: '-1d',
        });
      });
  </script>
	 
	<script type="text/javascript">
    	function readURL(input){
    		if(input.files && input.files[0]){
    			var reader= new FileReader();
    			reader.onload=function(e){
    				$('#gimage').attr('src', e.target.result).width(240).height(150);
    			};
    			reader.readAdDataURL(input.files[0]);
    		}
    	}
    	
      

</script>
</body>
</html>
