   
<section class="page-section">
    <div class="container">
    <div class="w-100 justify-content-between d-flex">
        <h4 class="text-dark"><b>Booked Destination</b></h4>
        <a href="./?page=edit_account" class="btn btn btn-warning btn-flat"><div class="fa fa-user-cog"></div> Manage Account</a>
    </div>
        <hr class="border-warning">
        <table class="table table-stripped table-sm table-hover table-border text-dark">
            <colgroup>
                <col width="5%">
                <col width="10">
                <col width="25">
                <col width="5">
                <col width="25">
                <col width="25">
                <col width="15">
                <col width="10">
            </colgroup>
            <thead class="bg-info text-center">
                <tr>
                    <th># </th>
                    <th>DateTime</th>
                    <th>Destination</th>
                    <th>Guests</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                    $qry = $conn->query("SELECT b.*,p.title FROM book_list b inner join `destinations` p on p.id = b.package_id where b.user_id ='".$_settings->userdata('id')."' order by date(b.date_created) desc ");
                    while($row= $qry->fetch_assoc()):
                        $review = $conn->query("SELECT * FROM `rate_review` where package_id='{$row['id']}' and user_id = ".$_settings->userdata('id'))->num_rows;
                ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo date("Y-m-d H:i:s",strtotime($row['date_created'])) ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td align="center"><?php echo $row['guests'] ?></td>
                        <td><?php echo date("M d, Y",strtotime($row['schedule'])) ?></td>
                        <td><?php echo date("M d, Y",strtotime($row['checkout'])) ?></td>
                        <td class="text-center">
                            <?php if($row['status'] == 0): ?>
                                <span class="badge badge-warning">Pending</span>
                            <?php elseif($row['status'] == 1): ?>
                                <span class="badge badge-primary">Confirmed</span>
                            <?php elseif($row['status'] == 2): ?>
                                <span class="badge badge-danger">Cancelled</span>
                            <?php elseif($row['status'] == 3): ?>
                                <span class="badge badge-success">Done</span>
                            <?php endif; ?>
                        </td>   
                        <td align="center">
                                <button type="button" class="btn btn-flat btn-default border btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                    Action
                                <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <!--<a class="dropdown-item edit_data" data-toggle="modal" data-target="#edit_modal" onclick="_edit(<?php echo $row['id'] ?>)">Edit Schedule</a>-->
                                    <a class="dropdown-item" data-toggle="modal" data-target="#delete_modal" onclick="_delete(<?php echo $row['id'] ?>)">Delete</a>
                                <?php if($row['status'] == 3 && $review <= 0): ?>
                                    <a class="dropdown-item submit_review" href="javascript:void(0)" data-id="<?php echo $row['package_id'] ?>">Submit Review</a>
                                <?php endif; ?>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item cancel_data" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Cancel</a>
                                </div>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</section>

<div class="modal fade text-dark" id="delete_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Booking</h5>
            </div>
            <div class="modal-body">
                <div id="delete_content">Are you sure do you want to delete?</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" id="delete_button" onclick="ok_delete()">Continue</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade text-dark" id="edit_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Booking</h5>
            </div>
            <div class="modal-body">
                <div class="pt-2">CheckIn</div>
                <input type="date" id="edit_date" class="form-control" required/> 
            </div>
            <div class="modal-body">
                <div class="pt-2">Checkout</div>
                <input type="date" id="edit_checkout" class="form-control" required/>   
            </div>
            <div class="modal-body">
                <div class="pt-2">Checkout</div>
                <input type="number" id="edit_guests" class="form-control" required/>   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="edit_button" onclick="ok_edit()">Continue</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>






<?php

function testing()
{

   
}


?>


<script>
    function cancel_book($id){
        start_loader()
        $.ajax({
            url:_base_url_+"classes/Master.php?f=update_book_status",
            method:"POST",
            data:{id:$id,status:2},
            dataType:"json",
            error:err=>{
                console.log(err)
                alert_toast("an error occured",'error')
                end_loader()
            },
            success:function(resp){
                if(typeof resp == 'object' && resp.status == 'success'){
                    alert_toast("Book cancelled successfully",'success')
                    setTimeout(function(){
                        location.reload()
                    },2000)
                }else{
                    console.log(resp)
                    alert_toast("an error occured",'error')
                }
                end_loader()
            }
        })
    }
    function _edit(id) {
           document.getElementById('edit_button').setAttribute('data-id', id);
    }
    function ok_edit() { 
        var _id = document.getElementById('edit_button').getAttribute('data-id');
        var _date = document.getElementById('edit_date').value;
        var _checkout = document.getElementById('edit_checkout').value;     
        if (_date != '') {
            start_loader();
            $.ajax({
                url: _base_url_ + "classes/Master.php?f=edit_booking",
                method: "POST",
                data: { id: _id, date: _date },
                dataType: "json",
                error: err => {
                    console.log(err);
                    alert_toast("an error occured", 'error');
                    end_loader();
                },
                success: function (resp) {
                    alert_toast("Book update successfully", 'success');
                    setTimeout(function () {
                        location.reload()
                    }, 2000)
                }
            })
        }
        else {
            alert('please select date');
        } 
    }
    function _delete(id) {
           document.getElementById('delete_button').setAttribute('data-id', id);
    }
    function ok_delete() {
        start_loader();
        var _id =    document.getElementById('delete_button').getAttribute('data-id');
       
        $.ajax({
            url:_base_url_+"classes/Master.php?f=delete_booking",
            method:"POST",
            data:{id:_id},
            dataType:"json",
            error:err=>{
                alert_toast("an error occured", 'error');
                end_loader();
            },
            success: function (resp) {            
                alert_toast("Book deleted successfully", 'success');
                    setTimeout(function(){
                        location.reload()
                    },2000)
            }    
        })
    }
    $(function () {
        $('.cancel_data').click(function(){
            _conf("Are you sure to cancel this booking?","cancel_book",[$(this).data('id')])
        })
        $('delete_data').click(function () {
            alert([$(this).data('id')]);
           
                
        })
        $('.submit_review').click(function(){
            uni_modal("Rate & Feedback","./rate_review.php?id="+$(this).data('id'),'mid-large')
        })
        $('table').dataTable();
    })
</script>