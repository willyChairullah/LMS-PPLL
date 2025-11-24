<div class="mw-md">
    <div class="card p-4">
        <form method="POST" action="https://www.youtube.com/watch?v=B3xz7HTy7d8">
            <input type="hidden" name="_token" value="[CSRF_TOKEN_STATIS]">
            <input type="hidden" name="_method" value="PUT">

            <div class="mb-3">
                <label class="form-label" for="class-name">Nama Kelas</label>
                <input type="text" value="Pemrograman Web Lanjut (2025)" name="name" id="class-name" class="form-control">
                </div>

            <div class="mb-3">
                <label class="form-label" for="class-description">Deskripsi Kelas</label>
                <textarea class="form-control" name="description" id="class-description" rows="4">Materi mencakup framework Laravel, penggunaan API, dan pengembangan aplikasi berbasis web modern. Kelas ini fokus pada praktik langsung.</textarea>
                </div>

            <button type="submit" class="btn btn-dark mt-2">
                Update
            </button>
        </form>
    </div>

    <form action="https://www.youtube.com/watch?v=nexxBKAvzXs" class="d-flex justify-content-end">
        <button class="btn btn-outline-dark mt-2" type="button" onclick="alert('Ini adalah tombol Delete Class statis.')">
            Delete Class
        </button>
    </form>
</div>