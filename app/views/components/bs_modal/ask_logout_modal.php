<?php function AskLogutModal(): void { ?>
    <div class="modal" tabindex="-1" id="modalConfirmationLogout">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger">Konfirmasi logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin untuk logout ?</p>
                </div>
                <form action="/logout" method="post" class="modal-footer">
                    <button type="submit" class="text-white px-4" style="background-color: #052C65;">Iya</button>
                    <button type="button" class="bg-white px-4" style="color: #052C65;" data-bs-dismiss="modal">Batal</button>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
