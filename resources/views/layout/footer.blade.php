footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">2023 &copy; Purchase Management System
              </div>
            </div>
          </div>
        </footer>
        <!-- end Footer -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="js/vendor.min.js"></script>
   <!--  <script src="js/morris.min.js"></script>
    <script src="jsraphael.min.js"></script>
    <script src="js/dashboard.init.js"></script> -->
    <!-- App js -->
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/select2.full.min.js"></script>
    <script src="js/app.min.js"></script>
    <script>
    $(document).ready(function(){
       $(".select2").select2();
    });
  </script>
    <script type="text/javascript">
     //Date picker

    var date = new Date();
    date.setDate(date.getDate());
    $('.from_datepicker').datepicker({
      todayHighlight: true,
      autoclose: true,
      format: "dd-mm-yyyy",
      startDate: date

    });

    </script>
  </body>
</html>