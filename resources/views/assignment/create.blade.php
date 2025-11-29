<x-layout>
    <div class="mw-md py-4">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="card p-4">
                <div class="mb-3">
                    <label class="form-label">Judul tugas</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tenggat</label>
                    <input type="date" name="due" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Petunjuk</label>
                    <textarea class="form-control" name="content" rows="4" placeholder="Petunjuk pengerjaan.."></textarea>
                </div>
            </div>

            <div class="card p-4 mt-3">
                <div class="mb-3">
                    <label class="form-label">Lampiran</label>
                    <input type="file" name="files[]" multiple class="form-control" id="file-input">
                </div>

                <div id="file-preview" class="mt-3">
                    <!-- Preview file muncul di sini -->
                    <div class="d-flex align-items-center justify-content-between border rounded p-3 bg-white shadow-none mb-2">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-file fs-5 text-danger me-3"></i>
                            <div>
                                <p class="fs-vs fw-bold mb-0">example.pdf</p>
                                <small class="fs-vs text-muted">pdf • 1.2MB</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 d-flex justify-content-end">
                <button class="btn btn-dark mt-3">Assign</button>
            </div>
        </form>
    </div>

    <script src="preview.js"></script>
</x-layout>
