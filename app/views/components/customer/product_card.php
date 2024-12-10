<?php

function ProductCard(string $name, string $img, string $price): string
{
    $name_slug = str_replace(' ', '-', strtolower($name));
    return <<<HTML
    <div class="col">
        <div class="product-card">
            <img src="$img" alt="Produk bordir" class="product-img">
        </div>
        <p class="mb-0 fw-bold">$name</p>
        <p class="price-tag mt-0">Mulai dari <span>$price</span></p>
        <a href="/produk/detail/$name_slug" class="button mt-3 mb-4 p-1 text-decoration-none">Lihat detail produk</a>
    </div>
    HTML;
}

function ProductCardV2(string $name, string $img): string
{
    return <<<HTML
    <div class="product-option col text-decoration-none text-black" data-name="$name">
        <div class="product-card">
            <img src="$img" alt="Produk bordir" class="product-img">
        </div>
        <p>$name</p>
    </div>
    HTML;
}
