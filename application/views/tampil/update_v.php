


<div class="col-md-6">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Add</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?= base_url('index.php/SecondController/updatefunction') ?>">
              <div class="box-body">
                <?php foreach($dataupdate->result() as $key) { ?>

                <div class="form-group">
                  <label for="exampleInputEmail1">Id</label>
                  <input type="text" class="form-control" id="id" name="id" value="<?= $key->no; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="idname" name="idname" placeholder="your name" value="<?= $key->name; ?>"> 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" class="form-control" id="idaddress" name="idaddress" placeholder="your Address" value="<?= $key->address; ?>">
                </div>
            <?php } ?>    

                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>