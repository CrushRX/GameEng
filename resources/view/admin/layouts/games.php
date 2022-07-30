<table>
    <tr>
        <th>name</th>
        <th>description</th>
        <th>rating</th>
        <th>logo</th>
        <th>created_at</th>
        <th>update</th>
        <th>delete</th>
    </tr> <!--ряд с ячейками заголовков-->

    <?php
    foreach($all_games as $value)
    {
        ?>
        <tr>
            <td><?=$value['name']?></td>
            <td><?=$value['description']?></td>
            <td><?=$value['rating']?></td>
            <td><?=$value['logo']?></td>
            <td><?=$value['created_at']?></td>
            <td><button class="btn update-button"></button></td>
            <td><button class="btn delete-button"></button></td>
        </tr> <!--ряд с ячейками тела таблицы-->
        <?php
    }
    ?>
</table>

<a href="#" class="js-open-modal add-button" data-modal="1">add game</a>

<div class="modal" data-modal="1">
    <!--   Svg иконка для закрытия окна  -->
    <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
    <p class="modal__title">Заголовок окна 1</p>
</div>