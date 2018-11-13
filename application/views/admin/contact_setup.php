  <div class="content">
        <div class="container-fluid">

<div class="row">
                	<div class="col-lg-12 text-right"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-success">ADD</a></div>
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Contact Setup</h4>
                  <p class="card-category">Setup The Contact Part Here!</p>
                </div>
                		<div class="card-body">
        					<table class="table table-hover">
        					
        						<thead class="text-primary">
        							<tr>
                        <th colspan="3">Map</th>
                      </tr>
                      <tr>
        								<th>Address</th><th>Phone</th><th>Email</th>
        							</tr>
        						</thead>
        						<tbody>
        						<?php  foreach ($contact_about as $key=>$data):?>	
                      <tr><td colspan="3"><?php echo $data['map_plugin'] ?></td></tr>
                      <tr>
        								<td><?php echo $data['address'] ?></td><td><?php echo $data['phone'] ?></td><td><?php echo $data['email'] ?></td>
        							</tr>
        						<?php endforeach; ?>
                    </tbody>
        					</table>        			
        
</div>
</div>
                	</div>
               
            </div>
</div>
</div>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <?php echo form_open('admin/contact_setup/add'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
       	<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Embedded Code For Map</span>
  			</div>
  			<textarea  class="form-control" name="map_plugin" id="man_plugin" ></textarea>
		</div>
			<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Address</span>
  			</div>
  			<input  class="form-control" name="address" id="address" >
		</div>
		<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Email</span>
  			</div>
  			<input  class="form-control" name="email" id="email" >
		</div>
		<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Phone</span>
  			</div>
  			<input  class="form-control" name="phone" id="phone" >
		</div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
<?php echo form_close(); ?>
  </div>
</div>