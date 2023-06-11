<?php session_start(); ?>
<?php require_once('../inc/connection.php'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">

    <!--Font_Awesome library importing-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>


    <div class="admin-panel-container">

        <div class="admin-panel-header">
            <h1>Elite Tailoring</h1>
        </div>

        <div class="admin-panel-content">
            <div class="admin-panel-dashboard">

                <div class="admin-dashboard-left-side">
                    <div class="admin-navigate-button">
                        <button id="addproducts">Add Products</button>
                    </div>
                    <div class="admin-navigate-button">
                        <button id="deleteproducts">Display Products</button>
                    </div>
                    <div class="admin-navigate-button">
                        <button id="neworders">New Orders</button>
                    </div>
                    <div class="admin-navigate-button">
                        <button id="newappointments">New Appointments</button>
                    </div>
                </div>

                <div class="admin-dashboard-right-side">
                    <div id="admin-add-products">
                        <h2>Add Products</h2>
                        <form action="../inc/addproduct.php" method="POST" enctype="multipart/form-data">
                            <div class="add-product-form-element">
                                <label for="">Product Name</label>
                                <input type="text" name="product_name" required>
                            </div>
                            <div class="add-product-form-element">
                                <label for="">Product Image</label>
                                <input type="file" name="imagfile" required>
                            </div>
                            <div class="add-product-form-element">
                                <label for="">Product Price</label>
                                <input type="text" name="product_price" required>
                            </div>
                            <div class="add-product-form-element">
                                <label for="">Product Quantity</label>
                                <input type="number" name="product_quantity" required>
                            </div>
                            <div class="add-product-form-element">
                                <label for="">Product Color(Color ID)</label>
                                <input type="number" name="product_color" required>
                            </div>
                            <div class="add-product-form-element">
                                <label for="">Product Size(Size ID)</label>
                                <input type="number" name="product_size" required>
                            </div>
                            <div class="add-product-form-element">
                                <input type="submit" value="Add Product" name="add-product-btn" id="add-product-btn">
                            </div>
                        </form>
                    </div>

                    <div id="admin-display-products">
                        <h2>Stock</h2>

                        <?php


                        $sql = "SELECT p.product_id, p.product_name, c.color, s.size, p.product_quantity
                                FROM product p
                                INNER JOIN colors c ON p.product_color = c.color_id
                                INNER JOIN sizes s ON p.product_size = s.size_id";
                        $result = mysqli_query($conn, $sql);

                        if ($result->num_rows > 0) {
                            echo "<table style='border-collapse: collapse;'>
                                    <tr>
                                        <th style='border: 1px solid black; padding: 8px;'>Product ID</th>
                                        <th style='border: 1px solid black; padding: 8px;'>Product Name</th>
                                        <th style='border: 1px solid black; padding: 8px;'>Color</th>
                                        <th style='border: 1px solid black; padding: 8px;'>Size</th>
                                        <th style='border: 1px solid black; padding: 8px;'>Quantity</th>
                                        <th style='border: 1px solid black; padding: 8px;'>Action</th>
                                    </tr>";

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $row["product_id"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $row["product_name"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $row["color"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $row["size"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $row["product_quantity"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'><a href='../inc/deleteproduct.php?product_id=" . $row["product_id"] . "'>Delete</a></td>
                                    </tr>";
                            }

                            echo "</table>";
                        } else {
                            echo "No products found.";
                        }

                        ?>



                    </div>

                    <div id="admin-display-orders">
                        <h2>Orders</h2>

                        <?php


                        $sql = "SELECT * FROM orders";
                        $result = mysqli_query($conn, $sql);

                        if ($result->num_rows > 0) {
                            echo "<table style='border-collapse: collapse;'>
                                    <tr>
                                        <th style='border: 1px solid black; padding: 8px;'>Order ID</th>
                                        <th style='border: 1px solid black; padding: 8px;'>Product ID</th>
                                        <th style='border: 1px solid black; padding: 8px;'>User ID</th>
                                        <th style='border: 1px solid black; padding: 8px;'>Order Type</th>
                                        <th style='border: 1px solid black; padding: 8px;'>Quantity</th>
                                    </tr>";

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $row["order_id"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $row["product_id"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $row["user_id"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $row["order_type"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $row["quantity"] . "</td>
                                        
                                    </tr>";
                            }

                            echo "</table>";
                        } else {
                            echo "No products found.";
                        }

                        ?>

                    </div>
                    <div id="admin-display-appointments">
                        <h2>Appointments</h2>

                        <?php


                        $query = "SELECT * FROM appointments";

                        $appointment_result = mysqli_query($conn, $query);

                        if ($appointment_result->num_rows > 0) {
                            echo "<table style='border-collapse: collapse;'>
                                    <tr>
                                        <th style='border: 1px solid black; padding: 8px;'>Appointment ID</th>
                                        <th style='border: 1px solid black; padding: 8px;'>User Id</th>
                                        <th style='border: 1px solid black; padding: 8px;'>Email</th>
                                        <th style='border: 1px solid black; padding: 8px;'>Contact Number</th>
                                        <th style='border: 1px solid black; padding: 8px;'>Date</th>
                                        <th style='border: 1px solid black; padding: 8px;'>Time</th>
                                        <th style='border: 1px solid black; padding: 8px;'>Action</th>
                                    </tr>";

                            while ($appointment = $appointment_result->fetch_assoc()) {
                                echo "<tr>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $appointment["appointment_id"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $appointment["user_id"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $appointment["email"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $appointment["contact_number"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $appointment["date"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'>" . $appointment["time"] . "</td>
                                        <td style='border: 1px solid black; padding: 8px;'><a href='../inc/deleteappointment.php?appointment_id=" . $appointment["appointment_id"] . "'>Delete</a></td>
                                    </tr>";
                            }

                            echo "</table>";
                        } else {
                            echo "No Appointments found.";
                        }

                        ?>

                    </div>

                </div>
            </div>



        </div>




        <script>
            let display_products = document.getElementById('admin-display-products');
            let display_orders = document.getElementById('admin-display-orders');
            let display_appointments = document.getElementById('admin-display-appointments');
            let display_add_products = document.getElementById('admin-add-products');

            display_products.style.display = "none";
            display_orders.style.display = "none";
            display_appointments.style.display = "none";

            document.getElementById('deleteproducts').addEventListener("click", () => {
                display_add_products.style.display = "none";
                display_orders.style.display = "none";
                display_appointments.style.display = "none";
                display_products.style.display = "block";
            });

            document.getElementById('addproducts').addEventListener("click", () => {
                display_orders.style.display = "none";
                display_appointments.style.display = "none";
                display_products.style.display = "none";
                display_add_products.style.display = "block";
            });

            document.getElementById('neworders').addEventListener("click", () => {
                display_appointments.style.display = "none";
                display_products.style.display = "none";
                display_add_products.style.display = "none";
                display_orders.style.display = "block";
            });

            document.getElementById('newappointments').addEventListener("click", () => {
                display_products.style.display = "none";
                display_add_products.style.display = "none";
                display_orders.style.display = "none";
                display_appointments.style.display = "block";
            })
        </script>


</body>

</html>