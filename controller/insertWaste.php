<div class="insertWaste" style="text-align: center;
        color: #594f4f;
        align-items: center;
        font-family: 'Press Start 2P';
        font-size: 30px;">
    Insert Chemical Waste
</div>
<br>
<form method="POST" ,action="main.php" style="text-align: center;">
    <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
    Name: <input type="text" name="Name"> <br /><br />
    ID: <input type="text" name="ID"> <br /><br />
    Description: <input type="text" name="Description"> <br /><br />
    Admin ID: <input type="text" name="AdminID"> <br /><br />
    Date: <input type="text" name="Date"> <br /><br />

    <input type="submit" value="insertWaste" name="insertWaste"></p>
</form>



<?php
if (isset($_POST['insertWaste'])) {
    addToDB(
        "Chemical_Waste_Dispose",
        $_POST['ID'],
        $_POST['Name'],
        $_POST['Description'],
        $_POST['AdminID'],
        $_POST['Date'],
        null,
    );
}



?>