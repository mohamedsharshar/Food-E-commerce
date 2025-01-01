<?php include('./partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>

        <?php 
            // Check if the session for 'add' is set and display the message
            if (isset($_SESSION['add'])) {
                echo $_SESSION['add']; // Display session message
                unset($_SESSION['add']); // Remove the session message
            }
        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Name" required>
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username" required>
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Your Password" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>

<?php include('./partials/footer.php'); ?>

<?php 
    // Process the form data and save it to the database
    if (isset($_POST['submit'])) {
        // Button clicked

        // 1. Get the data from the form
        $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = md5($_POST['password']); // Encrypt the password using MD5

        // 2. SQL Query to insert the data into the database
        $sql = "INSERT INTO tbl_admin SET 
            full_name = '$full_name',
            username = '$username',
            password = '$password'";

        // 3. Execute the query
        $res = mysqli_query($conn, $sql);

        // 4. Check if the query executed successfully
        if ($res == true) {
            // Data inserted successfully
            $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
            // Redirect to Manage Admin page
            header("location: ./manage-admin.php");
            exit;
        } else {
            // Failed to insert data
            $_SESSION['add'] = "<div class='error'>Failed to Add Admin.</div>";
            // Redirect to Add Admin page
            header("location: ./add-admin.php");
            exit;
        }
    }
?>
