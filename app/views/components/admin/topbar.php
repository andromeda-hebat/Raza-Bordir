<?php

function Topbar(): string
{
    return <<<HTML
    <div id="topbar" class="navbar d-flex justify-content-between pt-3 pb-3 position-fixed" style="width: 84%; height: 10vh; background-color: #FFFF ; z-index: 1000;">
        <div class="ps-3">
            <div class="">
                <svg width="25" height="25" viewBox="0 0 41 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="41" height="44" fill="#D9D9D9" />
                </svg>

            </div>
        </div>
        <div class="pe-3 d-flex align-items-center">
            <h6 class="my-0 me-3">Admin</h6>
            <img src="/assets/img/admin.jpg" alt="" style="width: 5vh;">
        </div>
    </div>
    HTML;
}
