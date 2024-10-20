<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>{$page}</title>
            <link rel="stylesheet" href="{BASE_URL}css\style.css">
        </head>
        <body>
            <header class="navbar">
                <h1 class="page">{$page}</h1>
                <ul>
                    <li><a href='{BASE_URL}home'>Hogar</a></li>
                    <li><a href='{BASE_URL}categories'>Categorías</a></li>
                    <li><a href='{BASE_URL}products'>Productos</a></li>
                    {if isset($username)}
                        <li><a href='{BASE_URL}about'>Sobre nosotres</a></li>
                        <li><a href='{BASE_URL}logout'>Abandonar Sesión {$username}</a></li>
                    {else}
                        <li><a href='{BASE_URL}about'>Sobre nosotres</a></li>
                        <li><a href='{BASE_URL}login'>Iniciar Sesión</a></li>
                    {/if}
                </ul>
            </header>