    <section class="container py-5">
        <h1>Add New Tasks</h1>
        <form method="post" action="<?php echo base_url();?>newtask">
        <div class="container mt-5 card">
            <h1>Task Details</h1>
            <p>Please enter the details of the task you want to add.</p>
            <form>
                <div class="row mb-3">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="desc" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="textarea" class="form-control" name="desc">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="date" class="col-sm-2 col-form-label">Due Date</label>
                    <div class="col-sm-10">
                      <input type="datetime-local" class="form-control" id="date" name="date">
                    </div>
                  </div>
                <div class="d-grid gap-2 py-2">
                <button type="submit" class="btn btn-primary">Add Task</button>
                </div>
        </form>
              </form>


    </section>