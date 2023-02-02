  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <?php
        if ($content) {
            echo view($content);
        }
        ?>
  </div>
  <!-- /.content-wrapper -->