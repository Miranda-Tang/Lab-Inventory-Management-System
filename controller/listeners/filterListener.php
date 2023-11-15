<?php
//Lab, Vendor, Waste, and Member categories don't have filters
if (
    isset($_POST['labTag']) || isset($_POST['insertLab'])
    || isset($_POST['vendorTag']) || isset($_POST['insertVendor'])
    || isset($_POST['vendorClick'])
    || isset($_POST['wasteTag']) || isset($_POST['insertWaste'])
    || isset($_POST['memberTag']) || isset($_POST['insertMembers'])
    || isset($_POST['updateMember']) || isset($_POST['currentStockClick'])
) {
    echo '<div></div>';
    // Currentstock Catagory
} elseif (
    isset($_POST['currentStockTag']) || isset($_POST['insertCurrentStock'])
    || isset($_POST['currentStockFilter'])
) {
    include('../controller/CurrentStock.php');
    // Purchase Category
} elseif (
    isset($_POST['purchaseTag']) || isset($_POST['insertPurchase'])
    || isset($_POST['purchaseFilter'])
) {
    include('../controller/Purchase.php');
}
