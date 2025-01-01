<?php include('./partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>

        <br><br>

        <?php 
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if (isset($_SESSION['upload'])) {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        ?>

        <br><br>

        <!-- Add Category Form Starts -->
        <form action="" method="POST" enctype="./multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Category Title" required>
                    </td>
                </tr>

                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes 
                        <input type="radio" name="featured" value="No" checked> No 
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes 
                        <input type="radio" name="active" value="No" checked> No 
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>
            </table>

        </form>
        <!-- Add Category Form Ends -->

        <?php 
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $featured = isset($_POST['featured']) ? $_POST['featured'] : "No";
            $active = isset($_POST['active']) ? $_POST['active'] : "No";

            $image_name = "";
            if (isset($_FILES['image']['name']) && $_FILES['image']['error'] == 0) {
                $image_name = $_FILES['image']['name'];
                $ext = pathinfo($image_name, PATHINFO_EXTENSION);
                $image_name = "Food_Category_" . rand(000, 999) . '.' . $ext;

                $source_path = $_FILES['image']['tmp_name'];
                $destination_path = "../images/category/" . $image_name;

                if (!move_uploaded_file($source_path, $destination_path)) {
                    $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
                    header('location:'. SITEURL.'admin/add-category.php');
                    exit();
                }
            }

            $stmt = $conn->prepare("INSERT INTO tbl_category (title, image_name, featured, active) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $title, $image_name, $featured, $active);

            if ($stmt->execute()) {
                $_SESSION['add'] = "<div class='success'>Category Added Successfully.</div>";
                header('location:'.SITEURL . 'admin/manage-category.php');
            } else {
                $_SESSION['add'] = "<div class='error'>Failed to Add Category.</div>";
                header('location:'.SITEURL.'admin/add-category.php');
            }
            exit();
        }
        ?>

    </div>
</div>

<?php include('./partials/footer.php'); ?>
