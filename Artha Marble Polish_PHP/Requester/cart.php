<?php
define('TITLE','Cart ');
define('PAGE', 'cart');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];
} else {
    echo "<script> location.href='RequesterLogin.php'; </script>";
}

// Function to calculate total price
function calculateTotal() {
    $total = 0;
    if(isset($_SESSION['cart'])){
        foreach ($_SESSION['cart'] as $item) {
            $total += $item['price'] * $item['quantity'];
        }
    }
    return $total;
}

// Handle adjusting quantity or removing items
if(isset($_POST['update_cart'])){
    $index = $_POST['index'];
    $action = $_POST['action'];

    if ($action === 'add') {
        $_SESSION['cart'][$index]['quantity']++;
    } elseif ($action === 'subtract') {
        $_SESSION['cart'][$index]['quantity']--;
        if ($_SESSION['cart'][$index]['quantity'] <= 0) {
            unset($_SESSION['cart'][$index]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
        }
    }
}
?>
<style>
    body {
        font-family: 'Baloo Bhai', sans-serif;
        margin: 0;
        padding: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid black;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .container {
        max-width: 800px;
        margin: auto;
        padding: 90px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    h1 {
        text-align: center;
    }

</style>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Artha Marble Polish</a>
</nav>
<div class="container text-center border-bottom">
    <h1><strong> Selected Services</strong></h1>
    <table>
        <thead>
            <tr>
                <th>Sr. No</th>
                <th>Item</th>
                <th>Price per sqft (INR)</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($_SESSION['cart'])){
                foreach ($_SESSION['cart'] as $key => $item) {
                    echo "<tr>";
                    echo "<td>" . ($key + 1) . "</td>";
                    echo "<td>" . $item['item'] . "</td>";
                    echo "<td>₹" . $item['price'] . "</td>";
                    echo "<td>" . $item['quantity'] . "</td>";
                    echo "<td>₹" . ($item['price'] * $item['quantity']) . "</td>";
                    echo "<td>
                            <form method='post'>
                                <input type='hidden' name='index' value='$key'>
                                <input type='hidden' name='action' value='add'>
                                <button type='submit' name='update_cart' class='btn btn-primary'>+</button>
                            </form>
                            <form method='post'>
                                <input type='hidden' name='index' value='$key'>
                                <input type='hidden' name='action' value='subtract'>
                                <button type='submit' name='update_cart' class='btn btn-danger'>-</button>
                            </form>
                          </td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
    <h3>Total Price: ₹<?php echo calculateTotal(); ?></h3>
</div>
<?php
include('includes/footer.php'); 
?>
