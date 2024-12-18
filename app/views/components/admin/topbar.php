<?php

function Topbar(): string
{
    return <<<HTML
    <div id="topbar" class="navbar d-flex justify-content-end pt-3 pb-3 px-4 position-fixed" style="width: 83%; height: 10vh; background-color: #FAF9F5 ; z-index: 1000;">
        <div class="pe-3 d-flex align-items-center">
            <h6 class="my-0 me-3">Admin</h6>
            <img src="/assets/img/admin.jpg" alt="" style="width: 5vh;">
        </div>
    </div>
    HTML;
}
