<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2023 &copy; Maulana</p>
        </div>
        <div class="float-end">
            <p>
                Created with
                <span class="text-danger"><i class="bi bi-heart"></i></span> by
                <a href="#">D3TI01</a>
            </p>
        </div>
    </div>
</footer>
</div>
</div>
<script src="<?= base_url('/assets/') ?>js/app.js"></script>
<script src="<?= base_url('/assets/') ?>js/bootstrap.js"></script>
<script src="<?= base_url('/assets/') ?>extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="<?= base_url('/assets/') ?>js/pages/simple-datatables.js"></script>
<script src="<?= base_url('/assets/') ?>extensions/jquery/jquery.min.js"></script>
<script src="<?= base_url('/assets/') ?>extensions/sweetalert2/sweetalert2.all.min.js"></script>
<script>
    const flashData = $('.flash-data').data('flashdata');
    if (flashData) {
        Swal.fire({
            title: 'Berhasil',
            text: flashData,
            icon: 'success'
        });
    }

    $('.tombol-hapus').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data akan dihapus secara permanen",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })
    });
</script>
</body>

</html>