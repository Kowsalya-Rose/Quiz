<?php
include 'dbcon.php';
include 'q1.html';
include 'startquiz.php';
$mark++;
echo "<style>
      .button1 { background-color:GreenYellow;} </style>";
echo"<script>
            var timer = setTimeout(function() {
            window.location='q3.html'
        }, 3000)";
echo "<dialog open>'$mark'</dialog>";      
?>