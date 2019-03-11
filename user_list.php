<?php
/**
 * Created by PhpStorm.
 * User: Aleksandr
 * Date: 11.03.2019
 * Time: 15:56
 */
include "components/header.php";
?>
<?php
    //print_r(getUserList());
?>
<table id="user_list">
    <thead>Список пользователей</thead>
    <tbody>
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Номер телефона</th>
            <th>e-mail</th>
            <th>Дата рождения</th>
            <th>Дата регистрации</th>
        </tr>
        <?php
            foreach (getUserList() as $row) {
                ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[6]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[7]; ?></td>
                    <td><?php echo $row[8]; ?></td>
                </tr>
                <?php
            }
        ?>
    </tbody>
</table>



<?php
include "components/footer.php";
?>