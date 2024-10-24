<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head> <title>Sales Commission</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php
    
include("index.html");?>

<?php 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $month = $_POST["month"];
    $sales_amount = floatval($_POST["sales_amount"]);

    // Calculate commission based on sales amount
    if ($sales_amount >= 1 && $sales_amount <= 2000) {
        $commission_rate = 0.03;
    } elseif ($sales_amount <= 5000) {
        $commission_rate = 0.04;
    } elseif ($sales_amount <= 7000) {
        $commission_rate = 0.07;
    } else {
        $commission_rate = 0.10;
    }

    $commission = $sales_amount * $commission_rate;

    // Display the results
    echo "<h2>Sales Commission</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Month: $month</p>";
    echo "<p>Sales Amount: RM " . number_format($sales_amount, 2) . "</p>";
    echo "<p>Sales Commission: RM " . number_format($commission, 2) . "</p>";
} else {
    echo "<p>Error: This script should be accessed via a form submission.</p>";
}
?>