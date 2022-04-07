<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zöld Föld</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

        <!-- scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ url('js/ajax.js') }}"></script>
        <script src="{{ url('js/script.js') }}"></script>
        <script src="{{ url('js/tevekenyseg.js') }}"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <main>
            <form>
                <fieldset>
                    <legend>Mit tettél ma a földért?</legend>
                    <select name="" id="">
                        <option value="" id=""></option>
                    </select>
                    <select name="" id="">
                        <option value="" id=""></option>
                    </select>
                    <input type="submit" value="Küld">
                </fieldset>
            </form>



            <table id="tevekenyseg_lista">
                <tr>
                    <th>Osztály</th>
                    <th>Tevékenység</th>
                    <th>Pont</th>
                    <th>Státusz</th>
                </tr>
                <tr id="sablon_tevekenyseg">
                    <td id="osztaly">asd</td>
                    <td id="tevekenyseg">dsa</td>
                    <td id="pont">1</td>
                    <td id="allapot">ads</td>
                </tr>
            </table>
        </main>
    </body>
</html>
