<?php

$MAX_ROWS = 4; // ใช้ 4 แถวสำหรับดาว (*)
$NUM_ROWS = 3; // ใช้ 3 แถวสำหรับตัวเลข (1, 2, 3)
$NUM_COLS = 4; // ใช้ 4 หลักสำหรับตัวเลข (1111)

// ใช้ <pre> เพื่อรักษารูปแบบช่องไฟของผลลัพธ์จาก Loop
echo "<pre>";

echo "<h2>1. การใช้ลูปเพิ่มดาวทีละแถว (*********)</h2>";

echo "--- ใช้ Loop while ---\n";
$i = 1;
while ($i <= $MAX_ROWS) {
    $j = 1;
    while ($j <= $i) {
        echo "*";
        $j++;
    }
    echo "\n";
    $i++;
}

echo "\n--- ใช้ Loop do-while ---\n";
$i = 1;
do {
    $j = 1;
    do {
        echo "*";
        $j++;
    } while ($j <= $i);
    echo "\n";
    $i++;
} while ($i <= $MAX_ROWS);

echo "\n--- ใช้ Loop for ---\n";
for ($i = 1; $i <= $MAX_ROWS; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}


echo "\n<h2>2. การใช้ลูปปาดตัวเลขซ้ำกัน(123123)</h2>";

echo "--- ใช้ Loop while ---\n";
$i = 1;
while ($i <= $NUM_ROWS) {
    $j = 1;
    while ($j <= $NUM_COLS) {
        echo $i;
        $j++;
    }
    echo "\n";
    $i++;
}

echo "\n--- ใช้ Loop do-while ---\n";
$i = 1;
do {
    $j = 1;
    do {
        echo $i;
        $j++;
    } while ($j <= $NUM_COLS);
    echo "\n";
    $i++;
} while ($i <= $NUM_ROWS);

echo "\n--- ใช้ Loop for ---\n";
for ($i = 1; $i <= $NUM_ROWS; $i++) {
    for ($j = 1; $j <= $NUM_COLS; $j++) {
        echo $i;
    }
    echo "\n";
}

echo "\n<h2>3. การใช้ลูปแบบขั้นบันได</h2>";

echo "--- ใช้ Loop while ---\n";
$i = 1;
while ($i <= $NUM_ROWS) {
    $j = 1;
    while ($j <= $i) {
        echo $i . " ";
        $j++;
    }
    echo "\n";
    $i++;
}

echo "\n--- ใช้ Loop do-while ---\n";
$i = 1;
do {
    $j = 1;
    do {
        echo $i . " ";
        $j++;
    } while ($j <= $i);
    echo "\n";
    $i++;
} while ($i <= $NUM_ROWS);

echo "\n--- ใช้ Loop for ---\n";
for ($i = 1; $i <= $NUM_ROWS; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }
    echo "\n";
}

echo "\n<h2>4. กรอบล้อมดาวและตัวเลข(*123* *123*)</h2>";

echo "--- ใช้ Loop while ---\n";

$k = 0; while ($k < $NUM_COLS + 2) { echo "*"; $k++; } echo "\n";

$i = 1;
while ($i <= $NUM_ROWS) {
    echo "*"; 
    $j = 1;
    while ($j <= $NUM_COLS) {
        echo $i;
        $j++;
    }
    echo "*\n";
    $i++;
}

$k = 0; while ($k < $NUM_COLS + 2) { echo "*"; $k++; } echo "\n";


echo "\n--- ใช้ Loop do-while ---\n";
$k = 0; do { echo "*"; $k++; } while ($k < $NUM_COLS + 2); echo "\n";

$i = 1;
do {
    echo "*"; 
    $j = 1;
    do {
        echo $i;
        $j++;
    } while ($j <= $NUM_COLS);
    echo "*\n";
    $i++;
} while ($i <= $NUM_ROWS);

$k = 0; do { echo "*"; $k++; } while ($k < $NUM_COLS + 2); echo "\n";


echo "\n--- ใช้ Loop for ---\n";

for ($k = 0; $k < $NUM_COLS + 2; $k++) { echo "*"; } echo "\n";

for ($i = 1; $i <= $NUM_ROWS; $i++) {
    echo "*"; 
    for ($j = 1; $j <= $NUM_COLS; $j++) {
        echo $i;
    }
    echo "*\n";
}

for ($k = 0; $k < $NUM_COLS + 2; $k++) { echo "*"; } echo "\n";

echo "\n<h2>5. ตัวเลขกลับด้าน</h2>";

echo "--- ใช้ Loop while ---\n";
$i = $NUM_ROWS; // เริ่มจาก 3
while ($i >= 1) {
    $j = 1;
    while ($j <= $i) {
        echo $i . " ";
        $j++;
    }
    echo "\n";
    $i--;
}

echo "\n--- ใช้ Loop do-while ---\n";
$i = $NUM_ROWS; //เริ่มจาก3
do {
    $j = 1;
    do {
        echo $i . " ";
        $j++;
    } while ($j <= $i);
    echo "\n";
    $i--;
} while ($i >= 1);

echo "\n--- ใช้ Loop for ---\n";
for ($i = $NUM_ROWS; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }
    echo "\n";
}

echo "</pre>";
?>