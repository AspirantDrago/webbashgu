<?php
    include "components/header.php";
    echo $_SESSION['email'];
?>
    <h1>
        <?php
            if(!isset($_SESSION['email'])) {
        ?>
    </h1>
    <h1 class="black">
        Регистрация
    </h1>
    <hr>
    <form id="regform" class="myform black"
          action="index.php" method="post">
        <label for="fname">Фамилия</label>
        <input type="text" name="fname" id="fname" placeholder="Иванов" required/>
        <br>
        <label for="sname">Имя</label>
        <input type="text" name="sname" id="sname" placeholder="Иван" required/>
        <br>
        <label for="email">Почта</label>
        <input type="email" name="email" id="email" placeholder="mail@mail.com" required/>
        <br>
        <label for="pass">Пароль</label>
        <input type="password" name="pass" id="pass" placeholder="****" required/>
        <br>
        <label for="pass2">Повторите пароль</label>
        <input type="password" name="pass2" id="pass2" placeholder="****" required/>
        <br>
        <input type="submit" value="Отправить">
    </form>
        <?php
            }else{
                ?>
                    <h1>Здравствуйте, <?php echo $_SESSION['fname'].' '.$_SESSION['sname']; ?>!</h1>
                <?
            };
        ?>
<?php
    include "components/footer.php";
?>