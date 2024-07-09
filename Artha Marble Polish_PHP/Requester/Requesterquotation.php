<?php
define('TITLE', 'Quotation');
define('PAGE', 'Requesterquotation');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='RequesterLogin.php'; </script>";
}

// Initialize cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Handle adding items to cart
if(isset($_POST['add_to_cart'])){
    $item = $_POST['item'];
    $price = $_POST['price'];
    $_SESSION['cart'][] = array('item' => $item, 'price' => $price, 'quantity' => 1);
}
?>
<style>
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
        max-width: 1100px;
        margin: auto;
        padding: 30px;
    }

    h1 {
        text-align: center;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Artha Marble Polish</a>
</nav>
<div class="container">
    <h1>Quotation</h1>
    <p><h5>&#9679; Our quotation includes prices for various marble polishing services to help you achieve the perfect finish for your space.</h5></p>
    <table>
        <thead>
            <tr>
                <th>Sr. No</th>
                <th>Item</th>
                <th>Description</th>
                <th>Price per sqft (INR)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $items = array(
                array("Marble Flooring", "Marble flooring polishing enhances the appearance and durability of marble floors through grinding and polishing processes.", 60),
                array("Mirror Polishing","Mirror polishing is a finishing process that creates a highly reflective surface, similar to a mirror, by smoothing and buffing the material to a high gloss.", 60),
                array("Skirting", "Skirting is a decorative architectural feature that covers the joint between the wall and the floor, providing a finished look to a room.", 60),
                array("Wall Marble Dado", "Wall marble dado is a decorative application of marble on the lower part of a wall, serving both aesthetic and protective functions.", 70),
                array("Frame Patta", " Refers to a border or frame pattern created on marble surfaces during the polishing process, adding decorative detail.", 65),
                array("Dhar Polishing", "Refers to a continuous or flowing motion used when applying polish or buffing a surface to achieve a smooth and uniform finish.", 60),
                array("Moulding", "Refers to the process of shaping and finishing marble edges or profiles to create decorative or functional details.", 50),
                array("Pata", "Refers to a type of polishing pad or abrasive tool used for achieving a smooth finish on marble surfaces.", 40)
            );

            foreach ($items as $key => $item) {
                echo "<tr>";
                echo "<td>" . ($key + 1) . "</td>";
                echo "<td>" . $item[0] . "</td>";
                echo "<td>" . $item[1] . "</td>";
                echo "<td>₹" . $item[2] . "</td>";
                echo "<td><form method='post'><input type='hidden' name='item' value='" . $item[0] . "'><input type='hidden' name='price' value='" . $item[2] . "'><button type='submit' name='add_to_cart' class='btn btn-primary'>Add</button></form></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p><a href="cart.php" class="btn btn-primary">View Quotation</a></p>
    <p><h5> &#9679; Please note that prices may vary for other services not listed here, as they depend on the specific services chosen from this quotation.</h5></p>
    <p><h5>&#9679; Contact us for customized quotations and further details.</h5></p>
</div>
<?php
include('includes/footer.php'); 
?>