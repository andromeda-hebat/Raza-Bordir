<?php require_once __DIR__ . '/../../components/bs_modal/alert.php' ?>



<?php function ConfirmEditItem(string $title, string $url, string $item_name): void { ?>
<div class="modal" tabindex="-1" id="editModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= $title ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2>Perbarui <?= $item_name ?></h2>
                <form enctype="multipart/form-data">
                    <input type="hidden" name="product-id" id="input-item-id">
                    <label for="input-name">Nama produk</label>
                    <input type="text" name="name" id="input-name" class="form-control">
                    <label for="input-image">Foto produk</label>
                    <input type="file" name="image" id="input-image" class="form-control">
                    <input type="hidden" name="previous-image" id="input-previous-image">
                    <img class="my-4" src="" alt="Item image" style="height: 150px;" id="item-img-preview"><br>
                    <label for="input-description">Deskripsi produk</label>
                    <textarea id="input-description" name="description" class="form-control" style="resize: none;"></textarea>
                    <label for="input-price">Harga awal produk</label>
                    <input type="text" name="price" id="input-price" class="form-control">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button"
                    style="background-color: var(--ivory-cream-color)"
                    data-bs-dismiss="modal">Batal</button>
                <button id="btn-edit" type="button" class="btn btn-primary">Perbarui</button>
            </div>
        </div>
    </div>
</div>





<?php /////////////////////// ?>
<?php //-EXTERNAL COMPONENT-/ ?>
<?php /////////////////////// ?>

<?php Alert("info-success-bs-modal", "Berhasil!", "Sukses memperbarui data " . $item_name) ?>
<?php Alert("info-error-bs-modal", "Gagal!", "Gagal memperbarui data " . $item_name) ?>





<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#btn-edit').on('click', function(e) {
            const formData = new FormData();
            formData.append('product_id', $('#input-item-id').val());
            formData.append('name', $('#input-name').val());
            formData.append('image', $('#input-image')[0].files[0]);
            formData.append('previous-image', $('#previous-image').val());
            formData.append('description', $('#input-description').val());
            formData.append('price', $('#input-price').val());

            console.log(formData);
            $.ajax({
                url: '<?= $url ?>'+$('#input-item-id').val(),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#editModal').modal('hide');
                    $('#info-success-bs-modal').modal('show');
                    $('#info-success-bs-modal').on('hidden.bs.modal', function () {
                        location.reload();
                    });
                },
                error: (xhr, status, error) => {
                    $('#editModal').modal('hide');
                    $('#info-error-bs-modal').modal('show');
                }
            })
        });

        $('#editModal').on('show.bs.modal', function (event) {
            const selectedRow = $(event.relatedTarget).closest('tr');

            $('#input-item-id').val($(selectedRow).data('item-id'));
            $('#input-name').val(selectedRow.find('.product-name').text());
            $('#input-previous-image').val(selectedRow.find('.product-image').find('img').attr('src').replace('/static/img/', ''));
            $('#item-img-preview').attr('src', selectedRow.find('.product-image').find('img').attr('src'));
            $('#input-description').val(selectedRow.find('.product-description').text());
            $('#input-price').val(selectedRow.find('.product-price').text());
        });

        $('#input-image').change(function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#item-img-preview').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });

        $('#editModal').on('hidden.bs.modal', function () {
            $('#input-item-id').val('');
            $('#input-name').val('');
            $('#input-image').val('');
            $('#input-description').val('');
            $('#input-price').val('');
        });
    });
</script>

<?php } ?>
