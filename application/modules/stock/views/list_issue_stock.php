<?php echo $this->session->flashdata('msg');  ?>
<div class="row">

    <div class="col-lg-12 col-sm-12">

      <a href="<?php echo site_url('stock/issue_stock');?>" class="btn btn-primary state_change" id="issue_stock" value="">Issue stocks directly</a>
    </div>
  </div>
  </br>
  
  <div class="well well-sm"><b>Requests</b></div>
  </br>
<div class="row">
  

<div class="col-lg-12 col-sm-12">
 <div class="panel default blue_title h2">

              <div class="panel-body">
                <ul class="nav nav-tabs" id="myTab">
                           <li class="active"><a data-toggle="tab" href="#tab1"><b>Stock Requests to me</b></a></li>
                </ul>
              </div>
<div class="tab-content" id="myTabContent">
  <div id="tab1" class="tab-pane fade in active">
       <form id="list_orders_fm">
  <!--Listing Placed Orders-->


    <table class="table table-bordered table-striped" id="list_orders_tbl">
        <thead>
                <tr><th>Order # </th><th>Request from</th><th>Date Created</th><th align="center">Action</th></tr>
        </thead>

        <tbody>
        <?php $option=2 ; ?>
        <?php foreach ($orders as $order) { 
         $ledger_url = base_url().'stock/issue_stocks/'.$order['order_id'];
         $forward_url = base_url().'order/save_forwarded_order/'.$order['order_id'];
        
         ?>
        
              <tr>
              <td><?php  echo $order['order_id']?></td>
              <td><?php echo $order['station_id']?></td>
              <td><?php echo $order['date_created']?></td>
          <?php
          if ($user_object['user_level']=='3') {?>
              <td>

                  <a href="<?php  echo $forward_url ?>" class="btn btn-danger btn-xs">Forward Request <i class="fa fa-exchange"></i></a>
              </td>
          <?php } else  {?>
              <td>
                  <a href="<?php  echo $ledger_url ?>" class="btn btn-danger btn-xs">Issue <i class="fa fa-share"></i></a>
                  <a href="<?php  echo $forward_url ?>" class="btn btn-danger btn-xs">Forward Request <i class="fa fa-exchange"></i></a>
              </td>
         <?php }}?>
              </tr>

        </tbody>
        </table>

    </form>

  </div>
  

</div>
</div>

</div>
</div>

 <script type="text/javascript">

               window.setTimeout(function() {
                  $("#alert-message").fadeTo(500, 0).slideUp(500, function(){
                      $(this).remove(); 
                  });
              }, 5000);
        </script> 