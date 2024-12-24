<?php function PembayaranModal(): void { ?>
    <div class="modal" tabindex="-1" id="paymentModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger">Pilih Opsi Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-3">Silakan pilih metode pembayaran berikut:</p>
                    <div class="list-group">
                        <!-- Bank Transfer -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Transfer Bank</h6>
                            </div>
                            <small class="text-muted">Mandiri, BCA, BNI, BRI</small>
                        </a>

                        <!-- E-Wallet -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">E-Wallet</h6>
                            </div>
                            <small class="text-muted">Gopay, OVO, Dana, ShopeePay</small>
                        </a>

                        <!-- Credit Card -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Kartu Kredit/Debit</h6>
                            </div>
                            <small class="text-muted">Visa, MasterCard</small>
                        </a>

                        <!-- QRIS -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">QRIS</h6>
                            </div>
                            <small class="text-muted">Dukungan pembayaran berbasis QR</small>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="text-black" style="background-color: var(--ivory-cream-color);" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
