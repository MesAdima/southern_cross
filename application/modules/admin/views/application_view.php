<div>
    <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Applications
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
                        <li class="active">Applications</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <?php
                if ($application != NULL)
                {
            ?>
            <div class="row">

                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Students Details</h3>
                            <div class="box-tools">
                                <div class="input-group">
                                    <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                    <div class="input-group-btn">
                                       <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th >#</th>
                                        <th >First Name</th>
                                        <th >Last Name</th>
                                        <th >Other Names</th>
                                        <th >Citizenship</th>
                                        <th >Gender</th>
                                        <th >Date of Birth</th>
                                        <th >Status</th>
                                        <th >View</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i=1; 
                                        foreach ($application as $value) {
                                        $id = $value['applicant_id'];
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $value['f_name'];?></td>
                                        <td><?php echo $value['s_name'];?></td>
                                        <td><?php echo $value['l_name'];?></td>
                                        <td><?php echo $value['citizenship'];?></td>
                                        <td><?php echo $value['gender'];?></td>
                                        <td><?php echo $value['dob'];?></td>

                                    <?php
                                        if($value['status'] == 1)
                                        {
                                            $span = "<span class='label label-warning'>Pending</span>";
                                        }else if ($value['status'] == 2)
                                        {
                                            $span = "<span class='label label-success'>Approved</span>";
                                        }
                                        else if ($value['status'] == 3)
                                        {
                                            $span = "<span class='label label-danger'>Rejected</span>";
                                        }
                                    ?>
                                        
                                        <td><center><?php echo $span;?></center></td>
                                        <td><center><a href="javascript:void(null)" onclick="applications(<?php echo $value['applicant_id']?>)"><span class="fa fa-edit" style="color:#0DCAF2"></span></a></center></td>
                                    </tr>
                                    <?php
                                        $i++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
                <?php
                    }else
                    {
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Students Details</h3>
                                <div class="box-tools">
                                    <div class="input-group">
                                        <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                        <div class="input-group-btn">
                                           <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                            
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Other Names</th>
                                            <th>Student Phone</th>
                                            <th>Student Email</th>
                                            <th>Admission Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7"><center>No data found in this table...</center></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>

                </section><!-- /.content -->
            </aside><!-- /.right-si-->
</div>

<div class="modal fade" id="applicant_details">
    <div class="modal-dialog" style="width:60%;margin-bottom:2px;">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h5 class="modal-title">Applicant Details</h5>
                </div>
                <div class="modal-body" style="padding-bottom:0px;">    
                        <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Applicant Details Details</h3>
                                <div class="box-tools">
                                    <div class="input-group">
                                        <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                        <div class="input-group-btn">
                                           <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box-header -->
                        </div>
                    </div>
                </div>
                    <?php echo form_open_multipart(base_url().'admin/edit_application') ?>
                        <div>

                        <input type="hidden" name="editid" id="editid" />
                           <!-- <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;" >First Name:</span>
                                <input class="textfield form-control" type="text" name="f_name" id="f_name" required/>
                            </div>
                            <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;" >second Name:</span>
                                <input class="textfield form-control" type="text" name="s_name" id="s_name" required/>
                            </div>
                            <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;" >Other Name:</span>
                                <input class="textfield form-control" type="text" name="o_name" id="o_name" required/>
                            </div>
                            <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;">Phone Number: </span>
                                <input class="textfield form-control" type="text" name="phone" id="phone" required/>
                            </div>
                             <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;">Lecturer Email@: </span>
                                <input class="textfield form-control" type="text" name="lemail" id="lemail" required/>
                            </div>
                            <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;">Gender: </span>
                                <input class="textfield form-control" type="text" name="lgender" id="lgender" readonly />
                            </div> -->
                            <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;">Registration Date: </span>
                                <input class="textfield form-control" type="text" name="box1" id="box1" readonly/>
                            </div>
                            <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;">Course: </span>
                                <input class="textfield form-control" type="text" name="box2" id="box2" readonly />
                           </div>
                           <div class="input-group" style="width: 100%;padding:4px;">
                            <span class="input-group-addon" style="width: 40%;"> Status :</span>
                            <span class="input-group-addon" style="width: 30%;"><input type="radio" name="editstatus" value="1"> <span class='label label-success'>Activate</span> <span style="font-size: 1.4em;color: #3e8f3e;" class="glyphicon glyphicon-ok-sign"></span></input></span>
                            <span class="input-group-addon" style="width: 30%;"><input type="radio" name="editstatus" value="0"> <span class="label label-danger">Deactivate</span> <span style="font-size: 1.4em;color: #eb9316;" class="glyphicon glyphicon-remove-sign"></span></input></span>
                            <span class="input-group-addon" style="width: 30%;"><input type="radio" name="editstatus" value="0"> <span class="label label-danger">Pending</span> <span style="font-size: 1.4em;color: #eb9316;" class="glyphicon glyphicon-warning-sign"></span></input></span>
                        </div>  

                            <div style="margin-left:685px;">
                                <button type="submit" class="btn btn-default"> Edit User</button>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer" style="height:11px;padding-top:11px;">
                        <?php //echo $this->config->item("copyrights");?>
                    </div> 
                </div>
            </div>
        </div>
</div>

<?php $this->load->view("application_footer_view"); ?>
