<?php
include 'db.php';

// Fetch note from the database
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM notes WHERE id = $id");
$note = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Note</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Note</h2>

        <!-- Form to edit a note -->
        <form action="update_note.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $note['id']; ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $note['title']; ?>" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" required><?php echo $note['content']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Note</button>
        </form>
    </div>

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
