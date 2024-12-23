<?php function Alert(string $id, string $title, string $message): void { ?>
<div class="modal" tabindex="-1" id="<?= $id ?>">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger"><?= $title ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><?= $message ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="text-black" style="background-color: var(--ivory-cream-color);"
                    data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>
