<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: "Alegreya Sans SC", serif;
        }

        :root {
            --ivory-cream-color: #EAE1D0;
        }

        main {
            background-color: #FAF9F6;
        }

        .button {
            background-color: #EAE1D0;
            border: 1px solid black;
            color: black;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .product-card {
                aspect-ratio: 1/1;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                max-height: 400px;
                min-height: 150px;
                width: 100%;
                overflow: hidden;
            }

            @media (max-width: 768px) {
                .product-card {
                    max-height: 300px;
                }
            }

            @media (max-width: 576px) {
                .product-card {
                    max-height: 250px;
                }
            }

            .product-img {
                object-position: center;
                width: 100%;
                height: auto;
                max-width: 100%;
            }

            .price-tag {
                font-size: 0.75rem;
            }
    </style>
</head>

<body>