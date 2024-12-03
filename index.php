<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays</title>
    </head>
    <body>
        <h1>Arrays</h1>

        <div>
            <h2>Declarando Arrays</h2>

            <div>
                <?php
                    $frutas = ['laranja', 'abacaxi', 'melancia'];

                    print_r($frutas);
                ?>
            </div>

            <div style="margin-top: 20px">
                <?php
                    $maisFrutas = ['banana', 'pera', 'abacate'];
                    print_r($maisFrutas);
                ?>
            </div>

            <div style="margin-top: 20px">
                <?php
                    // Outros tipos de chaves
                    $array = [
                        1 => 'Este é o número 1',
                        'nome' => 'Roberto',
                        false => 'Nada por aqui',
                    ];

                    print_r($array);
                ?>
            </div>

            <div style="margin-top: 50px">
                <?php
                    // Array de Array
                    $users = [
                        [
                            'name' => 'John Doe',
                            'email' => 'john.doe@xpto.com'
                        ],
                        [
                            'name' => 'Marilia Doe',
                            'email' => 'marilia.doe@xpto.com'
                        ]
                    ];

                    print_r($users);
                ?>
            </div>
        </div>

        <div style="margin-top: 50px">
            <div>
                <h2>Acessando dados no Array</h2>
                <?php
                    $frutas = ['maçã', 'banana', 'melancia'];
                ?>

                <ul>
                    <li><?= $frutas[0] ?></li>
                    <li><?= $frutas[1] ?></li>
                    <li><?= $frutas[2] ?></li>
                </ul>
            </div>

            <div>
                <h2>Acessando dados no Array com Foreach</h2>
                <?php $frutas = ['pera', 'uva', 'abacate']; ?>
                <ul>
                    <?php foreach ($frutas as $key => $fruta) : ?>
                        <li><?= $key . ': ' . $fruta ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            

            <div>
                <h2>Acessando Dados no Array com String</h2>
                <?php
                    $users = [
                        [
                            'name' => 'John Doe',
                            'email' => 'john.doe@xpto.com'
                        ],
                        [
                            'name' => 'Maria Doe',
                            'email' => 'maria.doe@xpto.com'
                        ]
                    ];
                ?>
                <ul>
                    <?php foreach ($users as $user) : ?>
                        <li><?= $user['name'] ?> (<?= $user['email'] ?>)</li>
                    <?php endforeach; ?>

                    <?php foreach ($users as $user) : ?>
                        <li>
                            <?php foreach ($user as $data): ?>
                                <?= $data ?>
                            <?php endforeach; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div style="margin-top: 50px">
                <h2>Adicionando dados no Array</h2>

                <div>
                    <?php
                        $frutas = ['damasco', 'pitomba', 'limão'];
                        print_r($frutas);

                        $frutas[] = 'laranja';
                        print_r($frutas);
                    ?>
                </div>

                <div style="margin-top: 20px">
                    <?php
                        $frutas = ['damasco', 'pitomba', 'limão'];
                        print_r($frutas);

                        array_push($frutas, 'laranja', 'abacaxi', 'pera');
                        print_r($frutas);
                    ?>
                </div>

                <div style="margin-top: 20px">
                    <?php
                        $user = ['name' => 'Roberto'];
                        print_r($user);

                        $user['email'] = 'john.doe@xpto.com';
                        print_r($user)
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>