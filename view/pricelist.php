<?php
$priceBase = file_get_contents("price.json");
$priceDict = json_decode($priceBase, true);
?>
<main id="main">
    <div class="container-padding bg-type2">
        <h2>Прейскурант цен на 2017 год: </h2><br>
        <table>
            <thead>
            <tr>
                <th>№ п/п</th>
                <th>Номер</th>
                <th>Период</th>
                <th>Стоимость проживания(за 1 человеа), грн.</th>
                <th>Описание номера</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $dateList = $priceDict['date'];
            $dateListLen = count($dateList);
            foreach ($priceDict['price'] as $price) {
                ?>
                <tr>
                <td rowspan="<?= $dateListLen ?>"><?= $price[0] ?></td>
                <td rowspan="<?= $dateListLen ?>"><?= $price[1] ?></td>
                <?php for ($i = 0; $i < $dateListLen; $i++) { ?>
                    <?php if ($i === 0) { ?>
                        <td><?= $dateList[$i] ?></td>
                        <td><?= $price[2][$i] ?></td>
                        <td rowspan="<?= $dateListLen ?>"><?= $price[3] ?></td>
                    <?php } else { ?>
                        <tr>
                        <td><?= $dateList[$i] ?></td>
                        <td><?= $price[2][$i] ?></td>
                    <?php } ?>
                    </tr>
                <?php } ?>
            <?php } ?>
            </tbody>
        </table>
    </div>
</main>