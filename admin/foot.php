<!-- Script Zone -->
<script src="<?php echo $framework; ?>jquery-3.4.1.js"></script>
<script src="<?php echo $framework; ?>jquery/dist/jquery.min.js"></script>
<script src="<?php echo $framework; ?>popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo $framework; ?>bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo $framework; ?>bootstrap/js/main.js"></script>

<script src="<?php echo $framework; ?>chart.js/dist/Chart.bundle.min.js"></script>
<script src="<?php echo $framework; ?>bootstrap/js/dashboard.js"></script>
<script src="<?php echo $framework; ?>bootstrap/js/widgets.js"></script>
<script src="<?php echo $framework; ?>jqvmap/dist/jquery.vmap.min.js"></script>
<script src="<?php echo $framework; ?>jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<script src="<?php echo $framework; ?>jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?php echo $framework; ?>function-by-tri.js"></script>
<!-- Data table section -->
<script src="<?php echo $framework; ?>datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $framework; ?>datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $framework; ?>datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $framework; ?>datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $framework; ?>datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $framework; ?>datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $framework; ?>datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo $framework; ?>bootstrap/js/init-scripts/data-table/datatables-init.js"></script>
<script>
function OnlyNumber(evt){
  var codeChar = (evt.which) ? evt.which : event.keyCode
  if (codeChar > 31 && (codeChar < 48 || codeChar > 57))
  return false;
  return true;
}
</script>
<script type="text/javascript">
  $('.modal-backdrop').remove();
</script>
</body>
</html>
