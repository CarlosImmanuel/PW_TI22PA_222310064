<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
                body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f9;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        header .title {
            font-size: 1.2em;
            margin: 10px 0 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px 0;
        }

        section {
            padding: 60px 0;
        }

        .contact {
            background-color: white;
            margin: 20px 0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        footer p {
            margin: 0;
        }

    </style>
</head>
<body>
    <header>
        <div class="container">
            <img src="<?php echo e(asset('../images/MiawAug.png')); ?>" alt="Profile Photo" class="profile-photo">
            <h1><?php echo e($profile['name']); ?></h1>
            <p class="title"><?php echo e($profile['bio']); ?></p>
        </div>
    </header>

    <section class="contact">
        <div class="container">
            <h2>Biodata</h2>
            <p>Gender: <?php echo e($profile['gender']); ?></p>
            <p>Umur: <?php echo e($profile['umur']); ?></p>
            <p>Alamat: <?php echo e($profile['alamat']); ?></p>
            <p>Email: <?php echo e($profile['email']); ?></p>
            <p>Telepon: <?php echo e($profile['phone']); ?></p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 <?php echo e($profile['name']); ?>. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
<?php /**PATH D:\222310064_ProjectPW\Tugas-5\resources\views/profile.blade.php ENDPATH**/ ?>