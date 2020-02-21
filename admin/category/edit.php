<?php
  $id = $_GET['id'];
  $data = [
      'id'=>$id,
      'title'=> ''
    ];
  foreach ($categories as $key => $value) {
      if($value['id']==$id)
      {
        $data = [
          'id'=>$id,
          'title'=>$value['title']
        ];
      }
  }

?>

<div class="content-wrapper" style="min-height: 946px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kateqoriya Daxil et
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kateqoriya Daxil etmek</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?=$site_url.'/categories.php';?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Kateqoriya Adı</label>
                  <input type="text" name="name" class="form-control" placeholder="" value="<?=$data['title'];?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Daxil Et</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>