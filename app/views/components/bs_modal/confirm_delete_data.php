<?php require_once __DIR__ . '/../../components/bs_modal/alert.php' ?>



<?php function ConfirmDeleteData(string $title, string $url, string $item_name): void { ?>
<div class="modal" tabindex="-1" id="deleteModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= $title ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Apakah anda yakin ingin menghapus data ini ?</h6>
            </div>
            <div class="modal-footer">
                <button type="button"
                    style="background-color: var(--ivory-cream-color)"
                    data-bs-dismiss="modal">Batal</button>
                <button id="btn-delete" type="button" class="btn btn-danger" data-target-item-id="" data-target-item-image="">Hapus</button>
            </div>
        </div>
    </div>
</div>





<?php /////////////////////// ?>
<?php //-EXTERNAL COMPONENT-/ ?>
<?php /////////////////////// ?>

<?php Alert("info-success-bs-modal", "Berhasil!", "Sukses hapus data " . $item_name) ?>
<?php Alert("info-error-bs-modal", "Gagal!", "Gagal menghapus data " . $item_name) ?>





<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        let targetId = null;
        let image = null;

        $('#btn-delete').on('click', function(e) {
            $.ajax({
                url: '<?= $url ?>',
                type: 'DELETE',
                data: JSON.stringify({
                    id: targetId,
                    image: image
                }),
                processData: false,
                contentType: 'application/json',
                success: function (response) {
                    $('#deleteModal').modal('hide');
                    $('#info-success-bs-modal').modal('show');
                    $('#info-success-bs-modal').on('hidden.bs.modal', function () {
                        location.reload();
                    });
                },
                error: (xhr, status, error) => {
                    $('#deleteModal').modal('hide');
                    $('#info-error-bs-modal').modal('show');
                }
            })
        });

        $('#deleteModal').on('show.bs.modal', function (event) {
            const button = $(event.relatedTarget);
            targetId = button.data('item-id');
            image = button.data('item-image');
        });

        $('#deleteModal').on('hidden.bs.modal', function () {
            $('#btn-delete').attr('data-target-id-delete', '');
        });
    });
</script>

<?php } ?>
