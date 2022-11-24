<?php
// 7. Parašykite programą, kuri sugeneruotų ornamentą: https://iili.io/H3J974e.png . 
// Ornamentas turi būti sugeneruotas naudojant HTML ir PHP. 
echo PHP_EOL . '7 užduotis' . PHP_EOL;

?>
<html>
<body>
    <table>
        <tbody>
            <?php for ($row = 0; $row < 7; $row++) { ?>
                <tr>
                    <?php for ($column = 0; $column < 7; $column++) {
                        $displayColor = 'beige';
                        if ($column === $row || ($column + $row == 6)) {
                            $displayColor = 'rosybrown';
                        }
                    ?>
                        <td style="width: 70px; height: 70px; text-align:center; background-color: <?= $displayColor; ?>; border: solid 1px #000000"></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>