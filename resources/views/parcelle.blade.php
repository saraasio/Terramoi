<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Parcelles du site {{ $num }}</title>
  
</head>
<body>

    <table>
        <thead>
            <tr>
                <th colspan="3">Parcelles du site {{ $num }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>P1</td>
                <td>40 m²</td>
                <td><a href="/parcelles/1"><button class="btn">voir</button></a></td>
            </tr>
            <tr>
                <td>P2</td>
                <td>30 m²</td>
                <td><a href="/parcelles/2"><button class="btn">voir</button></a></td>
            </tr>
            <tr>
                <td>P3</td>
                <td>100 m²</td>
                <td><a href="/parcelles/3"><button class="btn">voir</button></a></td>
            </tr>
        </tbody>
    </table>

    <br>
    <a href="/sites">← Retour aux sites</a>

</body>
</html>
