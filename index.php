<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H</title>
    <link rel="stylesheet" href="./stile.css">
</head>

<body>
    <?php
    require_once 'function.php';
    ?>



    <form action="">
        <select name="type" onchange="this.form.submit()">
            <option name="numb" value="null" selected disabled>Select your car type</option>
            <?php
            foreach ($res as $value) { ?>
                <option value="<?= $value['id'] ?>" <?php if ($_GET['type'] === $value['id']) { ?> selected <?php } ?>>
                    <?= $value['name'] ?>
                </option>
            <?php }; ?>
        </select>
    </form>

    <form action="">
        <select name="mark" onchange="this.form.submit()">
            <option name="numb" value="null" selected disabled>Select your car type</option>
            <?php
            foreach ($res_2 as $value_2) { ?>
                <option value="<?= $value_2['id'] ?>" <?php if (!empty($_GET['mark']) && $value_2['id'] === $_GET['mark']) { ?> selected <?php } ?>>
                    <?= $value_2['name'] ?>
                </option>
            <?php }; ?>
        </select>
        <input type="hidden" name="type" value="<?php echo $_GET['type'] ?>">
    </form>
    </select>
    </form>

    <form action="">
        <select name="models" onchange="this.form.submit()">
            <option name="numb" value="null" selected disabled>Select your car type</option>
            <?php
            foreach ($res_3 as $value_3) { ?>
                <option value="<?= $value_3['id'] ?>" <?php if (!empty($_GET['models']) && $value_3['id'] === $_GET['models']) { ?> selected <?php }; ?>>
                    <?= $value_3['models'] ?>
                </option>
            <?php }; ?>
        </select>
        <input type="hidden" name="type" value="<?php echo $_GET['type'] ?>">
        <input type="hidden" name="mark" value="<?php echo $_GET['mark'] ?>">

    </form>
    </select>
    </form>


</body>

</html>