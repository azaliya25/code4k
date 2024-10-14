<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>разработка</title>
    <link rel="stylesheet" href="assets/st5.css">
</head>

<body>

    <div class="container">
        <h1>Выбор Печенья</h1>

        <form method="POST">
            <input type="text" name="cookie_type" placeholder="Введите тип печенья">
            <button type="submit">Выбрать печенье</button>
        </form>

        <?php

        class Cookie
        {
            private $type;
            private $availableTypes = ['chocolate', 'vanilla', 'oatmeal', 'peanut butter'];

            public function setType($type)
            {
                if (empty($type)) {
                    echo "<div class='message error'>Ошибка: Введите тип печенья.</div>";
                } elseif (in_array($type, $this->availableTypes)) {
                    $this->type = $type;
                    echo "<div class='message success'>Вы выбрали печенье: " . $this->type . ".</div>";
                } else {
                    echo "<div class='message error'>Ошибка: Недопустимый тип печенья. Выберите из: " . implode(', ', $this->availableTypes) . ".</div>";
                }
            }

            public function getType()
            {
                if ($this->type) {
                    return "<div class='message success'>Текущий тип печенья: " . $this->type . ".</div>";
                } else {
                    return "<div class='message error'>Тип печенья не установлен.</div>";
                }
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['cookie_type'])) {
            $selectedType = $_POST['cookie_type'];

            $cookie = new Cookie();
            $cookie->setType($selectedType);

            echo $cookie->getType();
        }

        ?>

        <div class="available">
            Доступные виды печенья: chocolate, vanilla, oatmeal, peanut butter.
        </div>
    </div>

</body>

</html>