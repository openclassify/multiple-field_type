<?php

return [
    'related'    => [
        'label'        => 'Связанный поток',
        'instructions' => 'Укажите связанные записи потока для отображения в раскрывающемся списке.',
    ],
    'mode'       => [
        'label'  => 'Режим ввода',
        'option' => [
            'tags'       => 'Теги',
            'lookup'     => 'Уважать',
            'checkboxes' => 'Флажки',
        ],
    ],
    'min'        => [
        'label'        => 'Минимальный выбор',
        'instructions' => 'Укажите минимальное количество разрешенных вариантов выбора.',
    ],
    'max'        => [
        'label'        => 'Максимальный выбор',
        'instructions' => 'Укажите максимальное количество разрешенных вариантов выбора.',
    ],
    'title_name' => [
        'label'        => 'Поле заголовка',
        'placeholder'  => 'имя',
        'instructions' => 'Укажите <strong>слизняка</strong> поле для отображения для выбора параметров выпадающего / поиска.<br>Вы можете указать заголовки, которые можно анализировать, например, <strong>{entry.first_name} {entry.last_name}</strong><br>Столбец заголовков связанного потока будет использоваться по умолчанию.',
    ],
];
