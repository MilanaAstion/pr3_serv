<div class="container">
    <form action="" method="POST">
        <button class="logout" type="submit" name="action" value="logout">Вихід</button>
        <br>
        <label for="">Ім'я</label>
        <input type="text" name="name">
        <br>
        <label for="">Прізвище</label>
        <input type="text" name="surname">
        <br>
        <label for="">Вік</label>
        <input type="number" name="age">
        <br>
        <button class="submit">Додати</button>
        <br>

        <?php echo $message; ?>
    </form>
    <?php if($_COOKIE['students']){?>
        <table>
            <thead>
                <tr>
                    <th>Ім'я</th>
                    <th>Прізвище</th>
                    <th>Вік</th>
                </tr>
            </thead>
            <?php foreach(unserialize($_COOKIE['students']) as $s){?>
                <tr>
                    <td><?php echo $s['name'];  ?></td>
                    <td><?php echo $s['surname'];  ?></td>
                    <td><?php echo $s['age'];  ?></td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
</div>