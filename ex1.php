<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลแนะนำตัวนักศึกษา - นายธนวัฒน์</title>
    <style>
        body {
            font-family: 'Tahoma', sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .container {
            width: 80%;
            max-width: 900px;
            margin: 30px auto;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .profile-container {
            text-align: center;
            margin-bottom: 25px;
        }
        .profile-img {
            width: 180px; 
            height: 180px;
            object-fit: cover; 
            border-radius: 50%;
            border: 5px solid #007bff; 
            box-shadow: 0 4px 10px rgba(0,0,0,0.2); 
        }
        h2 {
            color: #28a745;
            margin-top: 30px;
            text-align: left;
            padding-left: 10px;
            border-left: 5px solid #28a745;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #dee2e6;
        }
        th {
            background-color: #e9ecef;
            color: #495057;
            width: 30%;
        }
        .introduction {
            background-color: #fff3cd;
            border-left: 5px solid #ffc107;
            padding: 15px;
            margin-top: 20px;
            text-align: center;
            font-style: italic;
            font-size: 1.1em;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">

        <h1>ข้อมูลแนะนำตัวนักศึกษา</h1>

        <?php

            $profile_image = "Profile.jpg";

            $university = "มหาวิทยาลัยราชภัฏอุดรธานี";
            $faculty = "คณะวิทยาศาสตร์";
            $major = "สาขาเทคโนโลยีสารสนเทศ";
            
            $student_name = "นายธนวัฒน์ วงษาเนาว์";
            $student_id = "67040233131";
            $current_year = 2;
            
            $part_time_job = "ผู้ช่วยดูแลระบบเครือข่ายของมหาวิทยาลัย";
            
            $hobbies = "เล่นเกม, เล่นบาสเกตบอล, Gen โค้ดเล่น";
            $favorites = "ชาบูหมูกระทะ, แมว, หมา , หมูกรอบ";

            $email = "Mashiroff23@gmail.com";
            $phone = "083-853-0495";
            $github_link = "https://mashirohub.github.io/";
            
            $introduction_text = "สวัสดีครับ ผมชื่อ นายธนวัฒน์ วงษาเนาว์ ปัจจุบันเรียนชั้นปีที่ $current_year คณะวิทยาศาสตร์ สาขาเทคโนโลยีสารสนเทศ ผมมีความสนใจในการเขียนโค้ดและพร้อมที่จะนำความรู้ด้าน IT มาใช้ในการปฏิบัติงานครับ";
            
        ?>

        <div class="profile-container">
            <img src="<?php echo $profile_image; ?>" alt="รูปโปรไฟล์ของ <?php echo $student_name; ?>" class="profile-img">
        </div>
        <h2>📍 ข้อมูลสถาบันการศึกษา</h2>
        <table>
            <tr>
                <th>มหาวิทยาลัย</th>
                <td><?php echo $university; ?></td>
            </tr>
            <tr>
                <th>คณะ</th>
                <td><?php echo $faculty; ?></td>
            </tr>
            <tr>
                <th>สาขา</th>
                <td><?php echo $major; ?></td>
            </tr>
        </table>

        <h2>👤 ข้อมูลนักศึกษา</h2>
        <table>
            <tr>
                <th>ชื่อ-นามสกุล</th>
                <td><?php echo $student_name; ?></td>
            </tr>
            <tr>
                <th>รหัสนักศึกษา</th>
                <td><?php echo $student_id; ?></td>
            </tr>
            <tr>
                <th>ชั้นปีที่</th>
                <td><?php echo $current_year; ?></td>
            </tr>
        </table>

        <h2>🎨 งานอดิเรกและสิ่งที่ชอบ</h2>
        <table>
            <tr>
                <th>งานอดิเรก</th>
                <td><?php echo $hobbies; ?></td>
            </tr>
            <tr>
                <th>สิ่งที่ชอบ</th>
                <td><?php echo $favorites; ?></td>
            </tr>
        </table>

        <h2>📞 ช่องทางการติดต่อ</h2>
        <table>
            <tr>
                <th>อีเมล</th>
                <td><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></td>
            </tr>
            <tr>
                <th>โทรศัพท์</th>
                <td><?php echo $phone; ?></td>
            </tr>
            <tr>
                <th>Github / ผลงาน</th>
                <td><a href="<?php echo $github_link; ?>" target="_blank"><?php echo $github_link; ?></a></td>
            </tr>
        </table>


    </div>

</body>
</html>