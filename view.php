<?php
$conn = new mysqli("localhost", "root", "", "student_db");
$students = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student View</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6 bg-[url('bg.avif')] bg-cover">

    <div class="max-w-6xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="flex justify-between items-center bg-gray-800 text-white px-6 py-4">
            <h2 class="text-xl font-bold">Student Records</h2>
            <a href="form.html" class="bg-indigo-500 px-4 py-1 rounded hover:bg-indigo-600">Home</a>
        </div>
        <table class="min-w-full table-auto text-sm text-left text-gray-600">
            <thead class="bg-gray-700 text-white">
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Register No</th>
                    <th class="px-4 py-2">Date of Birth</th>
                    <th class="px-4 py-2">Course</th>
                    <th class="px-4 py-2">Gender</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php while ($row = $students->fetch_assoc()): ?>
                <tr>
                    <td class="px-4 py-2"><?= $row['id'] ?></td>
                    <td class="px-4 py-2"><?= $row['name'] ?></td>
                    <td class="px-4 py-2"><?= $row['reg'] ?></td>
                    <td class="px-4 py-2"><?= $row['dob'] ?></td>
                    <td class="px-4 py-2"><?= $row['course'] ?></td>
                    <td class="px-4 py-2"><?= $row['gender'] ?></td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="edit.php?id=<?= $row['id'] ?>" class="bg-yellow-400 px-3 py-1 rounded text-white hover:bg-yellow-500">Edit</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')" class="bg-red-500 px-3 py-1 rounded text-white hover:bg-red-600">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
