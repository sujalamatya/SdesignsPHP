<?php
$conn = new mysqli("localhost:3307", "root", "", "sujdesign");
if ($conn->connect_error) {
    die($conn->connect_error);
}
