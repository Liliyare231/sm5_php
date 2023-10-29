<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sm5_php</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?
        class Cookie {
            private $type;

            public function setType($type) {
                $allowedTypes = ['Имбирное', 'Ореховое', 'Злаковое', 'Ванильное', 'Овсяное', 'Шоколадное'];

                if (in_array($type, $allowedTypes)) {
                    $this->type = $type;
                } else {
                    $this->type = '<span class="error">Такое печенье отсутствует</span>';
                }
            }

            public function getType() {
                return '<p>Вид печенья: ' . $this ->type . '</p>';
            }
        }

        $cookie = new Cookie();

        $cookie->setType('Домашнее');
        echo $cookie->getType();

        $cookie->setType('Имбирное');
        echo $cookie->getType();
    ?>
</body>

</html>