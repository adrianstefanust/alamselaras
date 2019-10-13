      <footer class="site-footer">
        <div class="copyright">
          <div class="float-left">
            Copyright © 2019</a>
          </div>

          <div class="float-right">
            PT. Alam Hijau Selaras. 2019. All Right Reserved</a>
          </div>
        </div><!-- /.copyright -->
      </footer><!-- /.site-footer -->
    </div><!-- /.dashboard-contents -->
  </div><!-- /.content-wrapper -->



  <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
  <script src="<?php echo base_url();?>assets/js/main.js"></script>

  <script src="<?php echo base_url();?>assets/js/tables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/tables/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/calendar/moment.js"></script>
  <script src="<?php echo base_url();?>assets/js/calendar/fullcalendar.min.js"></script>
  <script>
    $(document).ready(function() {
      "use strict";

      $('#calendar').fullCalendar({});
      $('.data-table').DataTable();

    });
  </script>


</body>
</html>