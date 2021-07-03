<?php
  include 'action.php';
?>

  
  <div class="container-fluid">
   
   <!-- <div class="row tile color transparent-black">-->
    <div class="row" style="background-color: rgb(184 181 185 / 30%) !important;">
    
      <div class="col-md-12">
        <?php
          $query = 'SELECT * FROM demande';
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
        ?>
        <h3 class="text-center" style="color:white;">Espace de Modifier Les demandes DAD AI - OR</h3>
        <table class="table" id="data-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Reference_demande</th>
              <th>site</th>
              <th>Nom</th>
              <th>reception</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><?= $row['Reference_demande']; ?></td>
              <td><?= $row['site']; ?></td>
              <td><?= $row['Nom']; ?></td>
              <td><?= $row['reception']; ?></td>
              <td>
                <a href="Menu_Super_admin/Gerer_demande/details.php?details=<?= $row['id']; ?>" class="btn btn-primary p-2">Details</a> |
                <a href="Menu_Super_admin/Gerer_demande/action.php?delete=<?= $row['id']; ?>" class="btn btn-danger p-2" onclick="return confirm('Do you want delete this record?');">Delete</a> |
                <a href="index.php?edit=<?= $row['id']; ?>" class="btn btn-success p-2">Edit</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
    });
  });
  </script>











 <!-- <div class="col-md-4">
        <h3 class="text-center text-info">Add Record</h3>
        <form action="action.php" method="post" enctype="multipart/form-data">
          <input type="hidden" site="id" value="<?= $id; ?>">
          <div class="form-group">
            <input type="text" site="site" value="<?= $site; ?>" class="form-control" placeholder="Enter site" required>
          </div>
          <div class="form-group">
            <input type="Nom" site="Nom" value="<?= $Nom; ?>" class="form-control" placeholder="Enter e-mail" required>
          </div>
          <div class="form-group">
            <input type="tel" site="reception" value="<?= $reception; ?>" class="form-control" placeholder="Enter reception" required>
          </div>
          <div class="form-group">
            <input type="hidden" site="oldReference_demande" value="<?= $photo; ?>">
            <input type="file" site="Reference_demande" class="custom-file">
            <img src="<?= $photo; ?>" width="120" class="img-thumbnail">
          </div>
          <div class="form-group">
            <?php if ($update == true) { ?>
            <input type="submit" site="update" class="btn btn-success btn-block" value="Update Record">
            <?php } else { ?>
            <input type="submit" site="add" class="btn btn-primary btn-block" value="Add Record">
            <?php } ?>
          </div>
        </form>
      </div>-->