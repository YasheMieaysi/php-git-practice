<?php

require_once 'Student.php';

$student = new Student("Алексей Алексеев", "ИС-30", 4.5);
echo $student->showInfo();