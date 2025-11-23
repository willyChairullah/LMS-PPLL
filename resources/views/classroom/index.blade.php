<!-- Modal Code -->
<div class="modal fade" id="modalCode" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Class Code</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" value="ABC123" readonly>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create Information -->
<div class="modal fade" id="modalCreateInfo" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Information</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <label class="form-label">Information</label>
                <textarea class="form-control" rows="4"></textarea>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-dark">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="mw-md py-4">

    <!-- Banner Class -->
    <div class="p-4 bg-light rounded border mb-3">
        <h1 class="fs-3 fw-bold mb-1">Nama Kelas</h1>
        <p class="text-muted">Deskripsi kelas akan ditampilkan di sini.</p>
    </div>

    <div class="row mt-3">

        <!-- Class Menu -->
        <div class="col-md-4 mb-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">Postingan</a>
                <a href="#" class="list-group-item list-group-item-action">Informasi</a>
                <a href="#" class="list-group-item list-group-item-action">Anggota</a>
                <a href="#" class="list-group-item list-group-item-action">Pengaturan</a>
            </div>
        </div>

        <div class="col-md-8">
            <div class="pt-2 mb-4 d-flex justify-content-between align-items-center">
                <h2 class="fs-5 fw-bold mt-2">Postingan</h2>

                <!-- Dropdown Post (Shown only if author) -->
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
                        Menu
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalCreateInfo">Tambah Postingan</a></li>
                    </ul>
                </div>
            </div>

            <!-- Posts -->
            <div class="d-flex flex-column gap-2">

                <!-- Post 1 -->
                <div class="card p-3 border">
                    <h5 class="fw-bold mb-1">Judul Postingan 1</h5>
                    <p class="text-muted mb-2">Isi postingan pertama. Konten apapun bisa ditempatkan di sini.</p>
                    <button class="btn btn-sm btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalEditPost1">Edit</button>
                </div>

                <!-- Modal Edit Post 1 -->
                <div class="modal fade" id="modalEditPost1" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Postingan</h5>
                                <button class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <textarea class="form-control" rows="4">Isi postingan pertama.</textarea>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button class="btn btn-dark">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="card p-3 border">
                    <h5 class="fw-bold mb-1">Judul Postingan 2</h5>
                    <p class="text-muted mb-2">Isi postingan kedua.</p>
                    <button class="btn btn-sm btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalEditPost2">Edit</button>
                </div>

                <!-- Modal Edit Post 2 -->
                <div class="modal fade" id="modalEditPost2" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Postingan</h5>
                                <button class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <textarea class="form-control" rows="4">Isi postingan kedua.</textarea>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button class="btn btn-dark">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end posts -->

        </div>
    </div>
</div>
