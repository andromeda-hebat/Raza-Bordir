<?php require_once __DIR__ . '/../../components/bs_modal/alert.php' ?>



<?php ////////////////////// ?>
<?php ///////--HTML--/////// ?>
<?php ////////////////////// ?>

<main class="min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col">
            <form action="/login" method="post" class="card p-5" id="login-form">
                <h1 class="text-center">Login</h1>
                <label for="username">Nama pengguna</label>
                <input type="text" name="username" id="username" placeholder="Masukkan nama pengguna anda">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan password">
                <input type="submit" value="Masuk" id="submit-form-input" class="button mt-4">
            </form>
        </div>
    </div>
</main>





<?php ////////////////////// ?>
<?php //--BOOTSTRAP MODAL--/ ?>
<?php ////////////////////// ?>

<?php Alert("auth-fail-bs-modal", "Gagal login!", "Username dan password tidak sesuai! Mohon coba lagi!") ?>




<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(() => {
        $('#login-form').on('submit', function (e) {
            e.preventDefault();

            const data = new FormData($(this)[0]);

            $.ajax({
                url: '/login',
                type: 'POST',
                data: data,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.redirect) {
                        window.location.href = response.redirect;
                    }
                },
                error: (xhr, status, error) => {
                    $('#auth-fail-bs-modal').modal('show');
                }
            });
        })
    });
</script>
