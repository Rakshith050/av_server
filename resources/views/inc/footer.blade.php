<script src="/assets/js/plugin.js"></script>
<script src="/assets/js/apexcharts.min.js"></script>
<script src="/assets/js/chart.js"></script>
<script src="/assets/js/scripts.js"></script>

<script src="/assets/js/video-player.js"></script>


<style>
  .swal2-popup {
  font-size: 10px !important;
  width:300px;
}
</style>
<!-- ============== sweet alert ================================ -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(!empty(session()->get('success'))) { ?>
<script type="text/javascript">
Swal.fire({
  icon: 'success',
  title:"<?php echo session()->get('success'); ?>",
  showConfirmButton: false,
  timer: 3000,

})
</script>
<?php } session()->forget('success'); ?>


<?php if(!empty(session()->get('failed'))) { ?>
  <script type="text/javascript">
  Swal.fire({
  icon: 'warning',
  title:"<?php echo session()->get('failed'); ?>",
  showConfirmButton: false,
  timer: 3000
})
  </script>
<?php } session()->forget('failed'); ?>
