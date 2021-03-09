<?php $__env->startSection('content'); ?>
<div class="container-xxxl">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('vehicle registration')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    

                        <body>
 

                    <!--edit Modal -->
                    <div class="modal fade" id="Postmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                            <form id="editform">
                                <div class="modal-body">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('PUT')); ?>

                                    <input type="hidden" name="id" id="id">
                                    <div class="form-group">
                                        <label>name</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label>type</label>
                                        <input type="text" class="form-control" name="type" id="type">
                                    </div>
                                    <div class="form-group">
                                        <label>manufacture</label>
                                        <input type="text" class="form-control" name="manufacture" id="manufacture">
                                    </div>
                                    <div class="form-group">
                                        <label>purchase</label>
                                        <input type="date" class="form-control" name="purchase" id="purchase">
                                    </div>
                            
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>                   
                    </body>
                    <!-- End of edit modal -->
                    <body>
                    <!--delete Modal -->
                    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                            <form id="deleteform">
                                <div class="modal-body">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('delete')); ?>

                                    <input type="hidden" name="id" id="deleteid">
                                    <p>are you sure want to delete?</P>
                            
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>                   
                    </body>
                    <!-- End of delete modal -->
                                        <div class="row">
                    <div class="column" column-gap: 40px;>
                    
                                        <h1>Registered Vehicles</h1>

                    <table border="1">
                        <tr>
                            <td>Sr.no</td>
                            <td>vehicle name</td>
                            <td>vehicle type</td>
                            <td>year of manufacture</td>
                            <td>date of purchase</td>
                            <td>created_at</td>
                            <td>updated_at</td>
                            <td>EDIT</td>
                            <td>DELETE</td>
                        </tr>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($post['id']); ?></td>
                            <td><?php echo e($post['name']); ?></td>
                            <td><?php echo e($post['type']); ?></td>
                            <td><?php echo e($post['manufacture']); ?></td>
                            <td><?php echo e($post['purchase']); ?></td>
                            <td><?php echo e($post['created_at']); ?></td>
                            <td><?php echo e($post['updated_at']); ?></td>
                            <td>
                                <a href="#" class="btn btn-success editbtn">EDIT</a>
                            </td>
                            <td>
                                <a href=<?php echo e("homeee/".$post['id']); ?>  class="btn btn-danger deletebtn">DELETE</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table><br><br>

                    </div><br><br>
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>


                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.0/umd/popper.min.js" integrity="sha512-uxtUCZ+gIIpqJVZe/0IgmHq5yqW+2gzo3zsSqRXSlUBEM2IYxxnuyg7+i7j9SCv1R74/Zixdx0v8OiyShPWbkQ==" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>




                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
                        <script>
                            $(document).ready(function() {  
                            
                            $('.editbtn').on('click', function() {
                                $('#Postmodal').modal('show');

                                    $tr = $(this).closest('tr');

                                    var data = $tr.children("td").map(function() {
                                        return $(this).text();
                                    }).get();

                                    console.log(data);
                                    
                                    $('#id').val(data[0]);
                                    $('#name').val(data[1]);
                                    $('#type').val(data[2]);
                                    $('#manufacture').val(data[3]);
                                    $('#purchase').val(data[4]);
                                    
                                    
                                });

                                $('#editform').on('submit', function(e){
                                    e.preventDefault();

                                    var id = $('#id').val();

                                    $.ajax({
                                        type: "PUT",
                                        url: "/homee/"+id,
                                        data: $('#editform').serialize(),
                                        success: function (response) {
                                            console.log(response);
                                            $('#Postmodal').modal('hide');
                                            
                                            location.reload();
                                        },
                                        error: function(error) {
                                            console.log(error);
                                        }
                                    }); 
                                });           
                            });
                        
                        </script>


                    <!-- <script>
                        
                            
                                $('.deletebtn').on('click', function() {
                                $('#deletemodal').modal('show');

                                    $tr = $(this).closest('tr');

                                    var data = $tr.children("td").map(function() {
                                        return $(this).text();
                                    }).get();

                                    console.log(data);
                                    
                                    $('#deleteid').val(data[0]);
                                
                                    
                                    
                                });

                                $('#deleteform').on('submit', function(e){
                                    e.preventDefault();

                                    var id = $('#deleteid').val();

                                    $.ajax({
                                        type: "delete",
                                        url: "/homeee/"+id,
                                        data: $('#deleteform').serialize(),
                                        success: function (response) {
                                            console.log(response);
                                            $('#deletemodal').modal('hide');
                                            
                                            location.reload();
                                        },
                                        error: function(error) {
                                            console.log(error);
                                        }
                                    }); 
                                });           
                            
                        
                        </script> -->
                    <div class="column" column-gap: 40px;>
                    <h1>Add vehicle</h1>
                    <form action="home" method="POST">
                        <?php echo csrf_field(); ?>  
                        Vehicle Name:<input type="text" name="name" placeholder="enter name"><br><br>
                        Vehicle Type: <input type="text" name="type" placeholder="type e.g car,bus,bike"><br><br>
                        <!--<select name="cars">
                    <option value="Car">Car</option>
                    <option value="Bus">Bus</option>
                    <option value="Bike">Bike</option>
                    <option value="Truck">Truck</option>
                    </select><br><br>-->
                        Year of manufacture:<input type="text" name="manufacture" placeholder="year of manufacture"><br><br>
                        Date of purchase:<input type="date" name="purchase" placeholder="date of purchase"><br><br>
                    <button type='submit'>Add data</button>
                    </form></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vehicle1\resources\views/home.blade.php ENDPATH**/ ?>