<?php echo form_open('admin/vmi_setup/add')?>
                  <table class="table table-hover" id="inquiry">
        					
        						<thead class="text-primary " >
        							
                      <tr>
        								 <th width="25%">Name</th><th width="25%">Email</th><th width="20%">Subject</th><th width="20%">Message</th><th width="10%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
        						<?php  foreach ($inquiry as $key=>$data):?>	
                      
                      <tr>
        								<td>
                          <?php echo $data['name'] ?>
                          </td>
                        <td><?php echo $data['email'] ?> </td>
                        <td><?php echo $data['subject'] ?></td>
                           <td><?php echo $data['message'] ?></td>
                        <td><a onclick="return confirm('Do you want to delete?')" class="btn btn-danger" href="<?php echo base_url('admin/inquiry/delete/'.$data['inquiry_id']) ?>">Delete</a></td>
        							</tr>
        						<?php endforeach; ?>
                    </tbody>
        					</table>   
                  <?php echo form_close(); ?>  