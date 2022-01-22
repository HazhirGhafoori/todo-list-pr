<?php

include 'config.php';

$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

?>

<li>
    <span class="text"><?php echo $row['title']; ?></span>
    <i id="removeBtn" class="icon fa fa-trash" data-id="<?php echo $row['id']; ?>"></i>
</li>

<?php
    }
    echo '<div class="pending-text">شما ' . mysqli_num_rows($result) . ' تسک برای انجام دارید.</div>';
} else {
    echo "<li><span class='text'>  تسکی یافت نشد!</span></li>";
}

?>