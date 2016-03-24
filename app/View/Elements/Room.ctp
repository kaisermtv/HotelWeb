	  <!-- Room -->
      <div class="col-sm-4<?php echo $RoomType; ?>">
        <div class="room-thumb"> <?php $this->Html->image(<?php echo $image;?>,array('class'=>"img-responsive",'alt'=>$alt)); ?>
          <div class="mask">
            <div class="main">
              <h5><?php echo $RoomTitle; ?></h5>
              <div class="price">&euro; <?php echo $price; ?><span><?php echo __('a night'); ?></span></div>
            </div>
            <div class="content">
              <p><span><?php echo $ContentTitle; ?></span><?php echo $Content; ?></p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> <?php echo __('Incl. breakfast'); ?></li>
                    <li><i class="fa fa-check-circle"></i> <?php echo __('Private balcony'); ?></li>
                    <li><i class="fa fa-check-circle"></i> <?php echo __('Sea view'); ?></li>
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> <?php echo __('Free Wi-Fi'); ?></li>
                    <li><i class="fa fa-check-circle"></i> <?php echo __('Incl. breakfast'); ?></li>
                    <li><i class="fa fa-check-circle"></i> <?php echo __('Bathroom'); ?></li>
                  </ul>
                </div>
              </div>
              <a href="room-detail.html" class="btn btn-primary btn-block"><?php echo $ButtonName; ?></a>
            </div>
          </div>
        </div>
      </div>