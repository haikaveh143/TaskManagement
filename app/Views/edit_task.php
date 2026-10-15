
<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>

    <h1>Edit Task</h1>

    <form action="<?= base_url('index.php/tasks/update/' . $task['id']) ?>" method="post">
        <?= csrf_field() ?>

        <label>Task Title:</label><br>
        <input type="text" name="title"
               value="<?= esc($task['title']) ?>" required>
        <br><br>

        <label>Task Date:</label><br>
        <input type="date" name="task_date"
               value="<?= esc($task['task_date']) ?>" required>
        <br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="pending"
                <?= $task['status'] == 'pending' ? 'selected' : '' ?>>
                Pending
            </option>

            <option value="completed"
                <?= $task['status'] == 'completed' ? 'selected' : '' ?>>
                Completed
            </option>
        </select>
        <br><br>

        <button type="submit">Update Task</button>
    </form>

    <br>
    <a href="<?= base_url('index.php/tasks') ?>">Back to Task List</a>

</body>
</html>
