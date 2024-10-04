<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>практика 1</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="num1">
        <h2>Задание 1</h2>

        <div class="d1">
            <?
            $students = ["Иванов", "Петров", "Сидоров", "Кузнецов", "Смирнов", "Морозов", "Васильев", "Федоров", "Попов", "Михайлов"];
            echo "<p> Список студентов: </p>" . implode(", ", $students) . "\n";
            ?>
        </div>

        <div class="d2">
            <?
            $student_count = count($students);
            echo "<p>Количество студентов: </p> $student_count\n";
            ?>
        </div>

        <div class="d3">
            <?
            if (in_array("Сидоров", $students)) {
                echo "Студент 'Сидоров' присутствует в списке.\n";
            } else {
                echo "Студента 'Сидоров' нет в списке.\n";
            }
            ?>
        </div>

        <div class="d4">
            <?
            $expelled = array_pop($students);
            echo "<p> Отчисленный студент: </p> $expelled\n";
            ?>
        </div>

        <div class="d5">
            <?
            echo "<p> Новый список студентов: </p>" . implode(", ", $students) . "\n";
            ?>
        </div>

    </div>

    <div class="num2">
        <h2>Задание 2</h2>

        <?php

        $clubs = [
            "Спортивный" => "Сидоров",
            "Художественный" => "Емелина",
            "Музыкальный" => "Иванова",
            "Литературный" => "Петров",
            "Биологический" => "Антонова"
        ];

        asort($clubs);

        echo "<p>Список кружков и фамилий</p>";
        echo "<ul>";
        foreach ($clubs as $club => $surname) {
            echo "<li>$club - $surname</li>";
        }
        echo "</ul>";
        ?>

    </div>


    <div class="num3">
        <h2>Задание 3</h2>

        <?php
        $student = [
            'name' => 'Азалия',
            'surname' => 'Кадыева',
            'group' => '425ВЕБ',
            'hobbies' => ['маникюр', 'рисование'],
            'socials' => ['Instagram' => '@kadyeva_azaliya', 'Tg' => '@kaaazal']
        ]
            ?>
        <h3>Мои данные</h3>
        <p>Мое имя: <?php echo $student['name'] ?></p>
        <p>Моя фамилия: <?php echo $student['surname'] ?></p>
        <p>Моя группа: <?php echo $student['group'] ?></p>
        <p>Мои хобби: <?php echo $student['hobbies'][0] . '<br>', $student['hobbies'][1] ?></p>
        <p>Мои соцсети: <?php echo $student['socials']['Instagram'] . '<br>', $student['socials']['Tg'] ?>
        </p>

    </div>
</body>

</html>