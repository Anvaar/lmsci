<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.css');?>">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?= base_url('asset/css/style.css');?>" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/table-style.css');?>" />
<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/basictable.css');?>" />
<!-- toggle btn -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

  <!--datepicker-->
<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap-datepicker.min.css');?>" />

<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?= base_url('asset/css/font.css');?>" type="text/css"/>
<link href="<?= base_url('asset/css/font-awesome.css');?>" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?= base_url('asset/js/jquery2.0.3.min.js');?>"></script>
<script src="<?= base_url('asset/js/modernizr.js');?>"></script>

<script src="<?= base_url('asset/js/jquery.cookie.js');?>"></script>
<script src="<?= base_url('asset/js/screenfull.js');?>"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- charts -->
<script src="<?= base_url('asset/js/raphael-min.js');?>"></script>
<script src="<?= base_url('asset/js/morris.js');?>"></script>
<link rel="stylesheet" href="<?= base_url('asset/css/morris.css');?>">
<!-- //charts -->
<!--skycons-icons-->
<script src="<?= base_url('asset/js/skycons.js');?>"></script>
<!--//skycons-icons-->

 <script type="text/javascript" src="<?= base_url('asset/js/bootstrap-datepicker.min.js');?>"></script>

<!--//btn toggle-->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<!-- tables -->
<script type="text/javascript" src="<?= base_url('asset/js/jquery.basictable.min.js');?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->