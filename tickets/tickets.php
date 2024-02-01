
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS LINKING -->
    <?php
    include __DIR__ .'/../assets/css/common/global_css_cdn.php';
    ?>
    <!-- CSS LINKING -->
    
</head>
<body>

<div class="container-fluid p-0 ticket_page_container">
    <div class="row">

    <!-- LINKING SIDEBAR -->
        <div class="sidebar_main">
            <?php
            include  '../sidebar/sidebar.php';
            ?>    
        </div>
    <!-- LINKING SIDEBAR -->

        <div class="content_container">

        <!-- LINKING HEADER -->
            <div class="header_container">
            <?php
                include  '../header/header.php';
                ?>    
            </div>
        <!-- LINKING HEADER -->

            <div class="container tickets_container">

            <!-- TICKETS PAGE HEADER -->
                <div class="row">
                    <div class="col tickets_header">
                        <div class="col ticket_page_title_div">
                            <h3 class="page_title mb-0">Tickets</h3>
                            <ul class="tickets_path_list mb-0">
                                <li>Dashboard</li>
                                <li class="tickets_path">Tickets</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <div class="add_button">
                                <button class="add_ticket_button primary_button curvy_button bright_button" data-bs-toggle="modal" data-bs-target="#addTicketModal">+ Add Ticket</button>
                            </div>
                        </div>
                        <!-- MODAL -->
                        <div class="modal fade" id="addTicketModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Ticket</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="form" action="" method="post" autocomplete="off">
                                            <!-- FORM FIELDS -->
                                            <div class="row">
                                                <div class="col-sm-6 form_group">
                                                    <label for="ticket_title" class="form_label">Ticket Title</label>
                                                    <input class="form_input" name="ticket_title" type="text" id="ticket_title">
                                                </div>
                                                <div class="col-sm-6 form_group">
                                                    <label class="form_label" for="assigning_group" >Assigning Group</label>
                                                    <select class="form_select" name="assigning_group" id="assigning_group">
                                                        <option value="" hidden selected>--Select--</option>
                                                        <option value="development">Development</option>
                                                        <option value="testing">Testing</option>
                                                        <option value="design">Design</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 form_group">
                                                   <label class="form_label" for="assigning_to" >Assigning To</label>
                                                   <select name="assigning_to" id="assigning_to" class="form_select">
                                                        <option value="" hidden selected>--Select User--</option>
                                                        <option value="user-1">User-1</option>
                                                        <option value="user-2">User-2</option>
                                                        <option value="user-3">User-3</option>
                                                   </select>
                                                </div>
                                                <div class="col-sm-6 form_group">
                                                    <label for="priority" class="form-label">Priority</label>
                                                    <select name="priority" id="priority" class="form_select">
                                                        <option value="" hidden selected>--Select Priority--</option>
                                                        <option value="high">High</option>
                                                        <option value="medium">Medium</option>
                                                        <option value="low">Low</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form_group col-sm-6">
                                                    <label for="category" class="form_label" >Category</label>
                                                    <select name="category" id="category" class="form_select">
                                                        <option value="" hidden selected>--Select Category--</option>
                                                        <option value="category-1">category-1</option>
                                                        <option value="category-2">category-2</option>
                                                        <option value="category-3">category-3</option>
                                                    </select>
                                                </div>
                                                <div class="form_group col-sm-6">
                                                    <label class="form_label" for="due_date">Due Date</label>
                                                    <input type="date" name="date" id="due_date" class="form_input">
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="form_group col-sm-12">
                                                   <label class="form_label" for="hours_needed">Hours Needed</label>
                                                   <input class="form_input" id="time" onkeypress='return restrictAlphabets(event)' name="hours_needed" type="text" pattern="^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$" title="Enter a valid 24-hour time (HH:mm)" aria-invalid="true" aria-required="true" >
                                                </div>                                                
                                            </div>
                                            <div class="row">
                                                <div class="form_group col-sm-12"> 
                                                    <label for="attachments" class="form_label">Attach here</label>
                                                    <input class="form_input file" id="file_input" name="file" type="file">
                                                </div>                                                
                                            </div>
                                            <div class="row">
                                                <div class="form_group description col-sm-12"> 
                                                  <label for="description" class="form_label">Description</label>
                                                  <textarea class="form_control" name="description" name="description" id="description"></textarea>
                                                </div>                                                
                                            </div>
                                            <div class="button_div text-center">
                                                <!-- <button type="submit" class="primary_button">Submit</button> -->
                                                <input type="submit" class="btn btn-dark"  id="submit" name="submit" value="Login"></input>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- TICKETS PAGE HEADER -->
                    
                <!-- STATISTICS CARDS -->
                <div class="card_group padding">
                        <div class="card">
                            <div class="card_top mb-3">
                                <div class="card_top_content">
                                    New Tickets
                                </div>
                                <div class="card_top_percentage">
                                    <span class="card_right_number increment">+10%</span>
                                </div>
                            </div>
                            <div class="card_bottom">
                                <h3>112</h3>
                                <div class="bar_over">
                                    <div class="progress-bar  w-70" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card_top mb-3">
                                <div class="card_top_content">
                                    New Tickets
                                </div>
                                <div class="card_top_percentage">
                                    <span class="card_right_number decrement">+10%</span>
                                </div>
                            </div>
                            <div class="card_bottom">
                                <h3>112</h3>
                                <div class="bar_over">
                                    <div class="progress-bar  w-70" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card_top mb-3">
                                <div class="card_top_content">
                                    New Tickets
                                </div>
                                <div class="card_top_percentage">
                                    <span class="card_right_number decrement">+10%</span>
                                </div>
                            </div>
                            <div class="card_bottom">
                                <h3>112</h3>
                                <div class="bar_over">
                                    <div class="progress-bar  w-70" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card_top mb-3">
                                <div class="card_top_content">
                                    New Tickets
                                </div>
                                <div class="card_top_percentage">
                                    <span class="card_right_number increment">+10%</span>
                                </div>
                            </div>
                            <div class="card_bottom">
                                <h3>112</h3>
                                <div class="bar_over">
                                    <div class="progress-bar  w-70" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- STATISTICS CARDS -->

                <!-- DATA FILTERS  -->
                <div class="row filter_row padding">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 col-12">
                        <div class="input_block">
                            <input class="w-100" type="search" id="search_bar" placeholder="Ticked ID">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 col-12">
                        <div class="input_block">
                            <select class="w-100" name="assigned_by" id="assigned_by">
                                <option value="" selected >--Select--</option>
                                <option value="admin">Admin</option>
                                <option value="agent">Agent</option>
                                <option value="client">Client</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 col-12">
                        <div class="input_block">
                        <select class="w-100" name="priority" id="priority">
                                <option value="" selected >--Select--</option>
                                <option value="high">High</option>
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 col-12">
                        <div class="input_block">
                            <input class="w-100" type="date" id="date_search" name="search_by_date">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 col-12">
                        <div class="input_block">
                            <select class="w-100" name="category" id="category">
                                <option selected>--Select--</option>
                                <option value="option-1">1</option>
                                <option value="option-2">2</option>
                                <option value="option-3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 col-12">
                        <div class="input_block">
                            <button class="primary_button bright_button" type="submit" id="filter_search">Search</button>
                        </div>
                    </div>
                </div>
                

                <!--MAIN DATA TABLE -->
                <div class="table_row">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Ticket ID</th>
                                <th>Assigned Group</th>
                                <th>Assigned To</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Priority</th>
                                <th>Category</th>
                                <th>Due Date</th>
                                <th>Attachments</th>
                                <th>Time Allocated</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ticket ID</td>
                                <td>Assigned Group</td>
                                <td>Assigned To</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Priority</td>
                                <td>Category</td>
                                <td>Due Date</td>
                                <td>Attachments</td>
                                <td>Time Allocated</td>
                                <td>
                                    <button class="primary_button action_button  edit_button">Edit <i class="fa-thin fa fa-pencil" ></i></button>
                                </td>
                                <td>
                                    <button class="primary_button action_button  delete_button">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ticket ID</td>
                                <td>Assigned Group</td>
                                <td>Assigned To</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Priority</td>
                                <td>Category</td>
                                <td>Due Date</td>
                                <td>Attachments</td>
                                <td>Time Allocated</td>
                                <td>
                                    <button class="primary_button action_button  edit_button">Edit <i class="fa-thin fa fa-pencil" ></i></button>
                                </td>
                                <td>
                                    <button class="primary_button action_button  delete_button">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ticket ID</td>
                                <td>Assigned Group</td>
                                <td>Assigned To</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Priority</td>
                                <td>Category</td>
                                <td>Due Date</td>
                                <td>Attachments</td>
                                <td>Time Allocated</td>
                                <td>
                                    <button class="primary_button action_button  edit_button">Edit <i class="fa-thin fa fa-pencil" ></i></button>
                                </td>
                                <td>
                                    <button class="primary_button action_button  delete_button">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ticket ID</td>
                                <td>Assigned Group</td>
                                <td>Assigned To</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Priority</td>
                                <td>Category</td>
                                <td>Due Date</td>
                                <td>Attachments</td>
                                <td>Time Allocated</td>
                                <td>
                                    <button class="primary_button action_button  edit_button">Edit <i class="fa-thin fa fa-pencil" ></i></button>
                                </td>
                                <td>
                                    <button class="primary_button action_button  delete_button">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Ticket ID</td>
                                <td>Assigned Group</td>
                                <td>Assigned To</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Priority</td>
                                <td>Category</td>
                                <td>Due Date</td>
                                <td>Attachments</td>
                                <td>Time Allocated</td>                              
                                <td>
                                    <button class="primary_button action_button  edit_button">Edit <i class="fa-thin fa fa-pencil" ></i></button>
                                </td>
                                <td>
                                    <button class="primary_button action_button  delete_button">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Ticket ID</th>
                                <th>Assigned Group</th>
                                <th>Assigned To</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Priority</th>
                                <th>Category</th>
                                <th>Due Date</th>
                                <th>Attachments</th>
                                <th>Time Allocated</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>                    
                </div>
                <!--MAIN DATA TABLE ENDS -->

            </div>
        </div>
    </div>
</div>

<!-- SCRIPT LINKING -->


<?php
    include __DIR__ .'/../assets/js/common/global_js_cdn.php';
    ?>

<!-- DATA TABLE SCRIPT LINKING -->
<?php
    include __DIR__ .'/../assets/js/events/tickets/data_table_cdn_js.php';
?>
<!-- DATA TABLE SCRIPT LINKING -->
<!-- SCRIPT LINKING -->

<script>
   

</script>
</body>
</html>