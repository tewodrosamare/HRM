

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h5 class="card-title">የተቋም መመዝገቢያ</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
        
          </div>
        
          <!-- /.card-header -->
           <form action="/HRM/register-employee-process" method="POST">
          <div class="card-body">
             <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055".>
          <?php include_once 'partials/flash_toast.php'; ?>
        </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>የዳይሬክተሩ ስም</label>
                <select class="form-control select2" style="width: 100%;" name="director_id">
                    <option selected="selected">የዳይሬክተሩ ስም ይምረጡ</option>
                    <?php foreach($directors as $director): ?>
                      <option value="<?php echo $director['id']; ?>"><?php echo $director['name']; ?></option>
                    <?php endforeach; ?>
                  </select>  
                </div>
                <div class="form-group">
                  <label> የመደቡ መጠሪያ  ስም</label>
                 <select class="form-control select2" style="width: 100%;" name="position_id">
                    <option selected="selected">የመደቡ መጠሪያ  ስም ይምረጡ</option>
                    <?php foreach($positions as $position): ?>
                      <option value="<?php echo $position['id']; ?>"><?php echo $position['name']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label> ስም</label>
                    <input type="text" class="form-control" placeholder="ስም ያስገቡ" name="name">  
                </div>
                <div class="form-group">
                  <label> የአባት ስም</label>
                    <input type="text" class="form-control" placeholder="የአባት ስም ያስገቡ" name="father_name">  
                </div>
                <div class="form-group">
                  <label> አያት ስም</label>
                    <input type="text" class="form-control" placeholder="አያት ስም አስገቡ" name="grand_father_name">  
                </div>
                <div class="form-group">
                  <label> ፆታ</label>
                    <select class="form-control select2" style="width: 100%;" name="gender">
                    <option selected="selected">ፆታ ይምረጡ</option>
                    <option value="male">ወንድ</option>
                    <option value="female">ሴት</option>
                  </select> 
                </div>
                <!-- /.form-group -->
              </div>
            
            </div>
            
            <!-- /.row -->
            <!-- /.row -->
          </div>
            <div class="card-footer text-end">
              <button type="submit" class="btn btn-primary">መዝግብ</button>
            </div>
          </form>
          <!-- /.card-body -->

        </div>
        <!-- /.card -->


       
     
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  