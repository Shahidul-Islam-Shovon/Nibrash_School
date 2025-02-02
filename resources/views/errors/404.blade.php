<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Noto+Sans+Bengali:wght@100..900&family=Noto+Serif+Bengali:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans Bengali', sans-serif;
          }
    </style>
</head>
<body>
    <div class="container text-center" style="margin-top: 100px;">
    <h1 style="font-size: 200px; font-weight: bold; color: red; font-family: 'Arial', sans-serif;">
        404 ! 
    </h1>
    <h2 style="color: #333; font-size: 28px; font-weight: bold;">পেজ পাওয়া যায়নি!</h2>
    <p style="color: #666; font-size: 18px;">দুঃখিত! আপনি যে পৃষ্ঠাটি খুঁজছেন তা খুঁজে পাওয়া যায়নি।</p>
    
    <a href="{{ route('front') }}" class="btn btn-danger" style="padding: 10px 20px; font-size: 18px; border-radius: 5px;">
        হোমে ফিরে যান
    </a>
</div>
</body>
</html>
