<?php 

include("tridy.php");

$infikovani = new Covid();

?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit Styly -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css"/>
    <!-- UIkit Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>
    <title>Covid-19</title>
</head>
<body>

<table class="uk-table uk-table-divider">
    <thead>
        <tr>
            <th>Celkový počet nakažených</th>
            <th>Podle pohlaví můž/žena</th>
            <th>Průměrny věk</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $infikovani->celkem() ?></td>
            <td><?php echo $infikovani->pohlavi() ?></td>
            <td><?php echo $infikovani->vek() ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>