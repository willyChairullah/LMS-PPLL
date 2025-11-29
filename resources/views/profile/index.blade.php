<h4 class="fw-bold fs-5 mb-5">Edit your profile</h4>

<form action="#" method="POST" enctype="multipart/form-data">

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control" value="FirstName">
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control" value="LastName">
        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="email@example.com">
        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label">Photo Profile</label>
            <input type="file" name="photo" id="photoInput" class="form-control">
        </div>
    </div>

    <div class="mt-3 d-flex justify-content-between">
        <button class="btn btn-dark">Save Changes</button>
        <a class="fs-vs" href="#">Update Password?</a>
    </div>
</form>

<script>
    document.getElementById('photoInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (!file) return;

        const imgURL = URL.createObjectURL(file);
        document.getElementById('photoPreview').src = imgURL;
    });
</script>
