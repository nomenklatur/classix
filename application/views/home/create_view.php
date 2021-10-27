<div class="container">
    <h2>CREATE YOUR CLASS</h2>
    <div class="card card-login mx-auto mt-5 shadow p-3">
        <div class="card-body">
            <h5 class="text-center">Create Your Own Class</h5>
            <form action="<?= base_url('class_con/createClass'); ?>" method="post">
            <div class="form-group">
                <label for="name">Class Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" required>
                <small id="desc" class="form-text text-muted">Create your class name</small>
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <input type="text" class="form-control" id="desc" aria-describedby="emailHelp" name="desc">
                <small id="desc" class="form-text text-muted">Optional</small>
            </div>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>

</div>