<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>практика 2</title>
    <link rel="stylesheet" href="assets/st2.css">
</head>

<body>
<div class="form-container">
        <div class="form-title">
            <h2>Регистрация</h2>
        </div>

        <?php

        if (isset($_POST['reg'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $userInfo = ['name' => "$name", 'email' => "$email", 'phone' => "$phone"];
            $result = validateForm($userInfo);
        }
        

        function validateForm($userInfo)
        {
            $errors = [
                '<p class="error-messages">Заполните поле ввода</p>',
                '<p class="error-messages">Имя должно состоять минимум из 3 символов</p>',
                '<p class="error-messages">Слишком короткое значение для почты</p>',
                '<p class="error-messages">Неправильный формат почты</p>',
                '<p class="error-messages">Телефон должен состоять из 11 цифр</p>',
            ];

            if (empty($userInfo['name'])) {
                echo $errors[0];
            } elseif (strlen($userInfo['name']) < 3) {
                echo $errors[1];
            }

            if (empty($userInfo['email'])) {
                echo $errors[0];
            } elseif (strlen($userInfo['email']) < 7) {
                echo $errors[2];
            } elseif (!filter_var($userInfo['email'], FILTER_VALIDATE_EMAIL)) {
                echo $errors[3];
            }

            if (empty($userInfo['phone'])) {
                echo $errors[0];
            } elseif (strlen($userInfo['phone']) != 11) {
                echo $errors[4];
            }

            if (!empty($errors)) {
                return ['success' => false, 'errors' => $errors];
            }

            return ['success' => true];

            if (!$result['success']) {
        
                foreach ($result['errors'] as $error) {
                    echo $error . '<br>';
                }
            } 
        }

        ?>

        <form name="reg" method="POST">
            <div class="form-group">
                <label for="name">Введите имя*</label>
                <input type="text" name="name" placeholder="Имя" value="<?= isset($name) ? $name : '' ?>">
            </div>

            <div class="form-group">
                <label for="email">Введите email*</label>
                <input type="text" name="email" placeholder="Email" value="<?= isset($email) ? $email : '' ?>">
            </div>

            <div class="form-group">
                <label for="phone">Введите номер телефона*</label>
                <input type="text" name="phone" placeholder="Номер телефона" value="<?= isset($phone) ? $phone : '' ?>">
            </div>

            <input type="submit" class="btn" name="reg" value="Отправить">
        </form>
    </div>
</body>

</html>