<?php
  print_r($categories);
?>
<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kateqoriyalar
        <small><a href="<?=$site_url.'/categories.php?mod=add';?>">Kateqoriya Daxil Et</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Kateqoriyalar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Ad</th>
                  <th style="width: 40px">Label</th>
                </tr>
                <?php
                    foreach ($categories as $key => $value) {
                ?>
                <tr>
                  <td><?=$value['id'];?></td>
                  <td><?=$value['title'];?></td>
                  <td>
                    <a href="<?=$site_url.'/categories.php?mod=edit&id='.$value['id'];?>"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="<?=$site_url.'/categories.php?mod=del&id='.$value['id'];?>"><span class="glyphicon glyphicon-trash"></span></a>
                  </td>
                </tr>
                <?php
                  }
                ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <!-- <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div> -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>