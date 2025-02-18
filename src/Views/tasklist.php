<div>
    <h1>Tasks list</h1>
    <table>
        <thead>
            <th>id</th>
            <th>titre</th>
            <th>description</th>
            <th>status</th>
            <th>id user</th>
            <th>date creation</th>
        </thead>
        <?php foreach($data['tasks'] as $task) : ?>
            <tr>
                <td><?= $task['id']?></td>
                <td><?= $task['title']?></td>
                <td><?= $task['description']?></td>
                <td><?= $task['status']?></td>
                <td><?= $task['user_id']?></td>
                <td><?= $task['created_at']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>