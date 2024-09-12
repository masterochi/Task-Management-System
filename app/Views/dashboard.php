<section>
    <header class="bg-primary text-black text-center py-5 bg-white">
        <div>
            <h1 class="text-center">Welcome to Task Management System</h1>
            <div class="container">
            <p class="lead">Manage your tasks effectively and efficiently</p>
            <a href="newtask" class="btn btn-primary">Add New Task</a>
            </div>
        </div>
    </header>
</section>

<section>
        <div class="container">
        <h1>Your Tasks</h1>
    <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Due Date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
                    <?php 
                     $id = 1;
                    foreach ($tasks as $task): 
                       
                        ?>
                        <tr>
                            <td><?=$id?></td>
                            <td><?= $task['title'] ?></td>
                            <td><?= $task['description'] ?></td>

                            <td><?=$task['due_date']?></td>
                            <td><?php echo $status[$task['status']]; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>update/<?= $task['id'] ?>" class="btn btn-warning btn-sm">Update</a>
                                <a href="<?php echo base_url();?>delete/<?= $task['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php $id++;
                 endforeach; ?>
                </tbody>
      </table>
      </div>
</section>