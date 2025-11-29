<x-layout>
    <div class="mw-md py-4">
        <form action="" method="post" enctype="multipart/form-data" id="edit-material-form">

            <div class="card p-4 mb-3">
                <div class="mb-3">
                    <label class="form-label">Judul tugas</label>
                    <input type="text" name="title" value="" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tenggat</label>
                    <input type="date" name="due" value="" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Petunjuk</label>
                    <textarea class="form-control" name="content" rows="4" placeholder="Petunjuk pengerjaan.."></textarea>
                </div>
            </div>

            <div class="card p-4 mb-3">
                <label class="form-label">Lampiran Lama</label>

                <div id="existing-files" class="mb-3">
                    <!-- Tetap mempertahankan komponen -->
                    <x-card-file file="" deleted="true" />
                </div>

                <hr>

                <div id="file-preview" class="mt-3"></div>

                <div class="mb-3">
                    <label class="form-label">Tambah Lampiran</label>
                    <input type="file" name="files[]" multiple class="form-control" id="file-input">
                </div>
            </div>

            <div class="w-100 d-flex justify-content-end">
                <button class="btn btn-dark mt-3">Update</button>
            </div>
        </form>
    </div>

    <script src="preview.js"></script>

    <script>
        document.querySelectorAll('.delete-file-btn').forEach(btn => {
            btn.addEventListener('click', async function() {
                const fileDiv = this.closest('[data-id]');
                const fileId = fileDiv.dataset.id;

                if (!confirm("Yakin hapus file ini?")) return;

                // URL kosong karena route Blade dihapus
                const url = "";

                const res = await fetch(url, {
                    method: 'DELETE',
                    headers: {}
                });

                if (res.ok) fileDiv.remove();
            });
        });
    </script>
</x-layout>
