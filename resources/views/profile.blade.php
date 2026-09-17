<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #fff0f3; 
        }

        .profile-card {
            background-color: #ffffff;
            width: 320px;
            padding: 30px 25px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(225, 112, 137, 0.15);
            text-align: center;
            border: 1px solid #ffe3e8;
        }

        .avatar-container {
            width: 90px;
            height: 90px;
            margin: 0 auto 20px;
            background-color: #ffe6eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .avatar-container svg {
            width: 45px;
            height: 45px;
            fill: #e84a5f; 
        }

        .profile-info {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .info-item {
            background-color: #fff5f7;
            color: #8a2b3b;
            padding: 12px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 0.3px;
            border: 1px solid #ffd0d8;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="avatar-container">
            <svg viewBox="0 0 24 24">
                <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
            </svg>
        </div>

        <div class="profile-info">
            <div class="info-item">{{ $nama }}</div>
            <div class="info-item">Kelas {{ $kelas }}</div>
            <div class="info-item">{{ $npm }}</div>
        </div>
    </div>

</body>
</html>     