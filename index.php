<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Practice PHP</title>
    <link rel="stylesheet" href="css/style.css" />
    <style>
        h1 {
            text-align: center;
        }
        .container {
            display: flex;
            flex-direction: column;
            background-color: aquamarine;
            padding: 2em;
            height: 100vh;
            width: 100vw;
        }
        table {
            background-color: orange;
            margin-top: 1rem;
            height: 20%;
            width: 100%;
            font-size: small;
        }
        .school {
            text-align: left;
            /* text-overflow: ellipsis;
            overflow: hidden; */
        }
        .address {
            text-align: left;
        }
        .flag {
            text-align: center
        }
        .t-header {
            background-color: lightyellow;
        }
        .t-data {
            background-color: lightgoldenrodyellow;
        }
        th, td {
            padding: 1rem;
        }
        .navigation {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
            gap: 1rem;
        }
        .btn {
            padding: 0.5rem;
            min-width: 4rem;
            font-weight: bold;
            background-color: #fa4;
            border-style: none;
        }
        .btn:hover {
            background-color: red;
            color: white;
        }
        .search-bar {
            padding: 0.5rem;
            width: 30%;
            border-style: none;
        }
    </style>
</head>
<body>
    <h1>School Directory</h1>
    <div class="container">
        <div class="search">
            <input type="text" name="search" class="search-bar">
            <input name="search-btn" type="submit" value="submit" class="btn">
        </div>
        <table>
            <tr class="t-header">
                <th class="school">School ID</th>
                <th class="school">School</th>
                <th class="address">Municipal Address</th>
                <th class="flag">Flag</th>
            </tr>
            <tr class="t-data">
                <td class="id">001</td>
                <td class="school">Aroroy National High School</td>
                <td class="address">Ambolong Aroroy Masbate</td>
                <td class="flag">Red</td>
            </tr>
            <tr class="t-data">
                <td class="id">001</td>
                <td class="school">Aroroy National High School</td>
                <td class="address">Ambolong Aroroy Masbate</td>
                <td class="flag">Red</td>
            </tr>
            <tr class="t-data">
                <td class="id">001</td>
                <td class="school">Aroroy National High School</td>
                <td class="address">Ambolong Aroroy Masbate</td>
                <td class="flag">Red</td>
            </tr>
            <tr class="t-data">
                <td class="id">001</td>
                <td class="school">Aroroy National High School</td>
                <td class="address">Ambolong Aroroy Masbate</td>
                <td class="flag">Red</td>
            </tr>
            <tr class="t-data">
                <td class="id">001</td>
                <td class="school">Aroroy National High School</td>
                <td class="address">Ambolong Aroroy Masbate</td>
                <td class="flag">Red</td>
            </tr>
            <tr class="t-data">
                <td class="id">001</td>
                <td class="school">Aroroy National High School</td>
                <td class="address">Ambolong Aroroy Masbate</td>
                <td class="flag">Red</td>
            </tr>
            <tr class="t-data">
                <td class="id">001</td>
                <td class="school">Aroroy National High School</td>
                <td class="address">Ambolong Aroroy Masbate</td>
                <td class="flag">Red</td>
            </tr>
            <tr class="t-data">
                <td class="id">001</td>
                <td class="school">Aroroy National High School</td>
                <td class="address">Ambolong Aroroy Masbate</td>
                <td class="flag">Red</td>
            </tr>
            <tr class="t-data">
                <td class="id">001</td>
                <td class="school">Aroroy National High School</td>
                <td class="address">Ambolong Aroroy Masbate</td>
                <td class="flag">Red</td>
            </tr>
            <tr class="t-data">
                <td class="id">001</td>
                <td class="school">Aroroy National High School</td>
                <td class="address">Ambolong Aroroy Masbate</td>
                <td class="flag">Red</td>
            </tr>
        </table>
        <div class="navigation">
            <button name="prev" class="btn">Previous</button>
            <button name="next" class="btn">Next</button>
        </div>
    </div>
</body>
</html>