<table>
    <tr>
        <th>username</th>
        <th>email</th>
        <th>rating</th>
        <th>role</th>
        <th>subscription</th>
        <th>created_at</th>
        <th>update</th>
        <th>ban</th>
        <th>delete</th>
    </tr> <!--ряд с ячейками заголовков-->

    <?php
    foreach($all_users as $value)
    {
        ?>
        <tr>
            <td><?=$value['username']?></td>
            <td><?=$value['email']?></td>
            <td><?=$value['rating']?></td>
            <td><?=$value['role']?></td>
            <td><?=$value['subscription']?></td>
            <td><?=$value['created_at']?></td>
            <td><button class="btn update-button"></button></td>
            <td><input type="checkbox" class="btn ban-button"></input></td>
            <td><button class="btn delete-button"></button></td>
        </tr> <!--ряд с ячейками тела таблицы-->
        <?php
    }
    ?>
</table>