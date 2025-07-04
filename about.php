<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us - Knowledge Point</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .about-container {
      max-width: 900px;
      margin: 20px auto;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .about-image {
      flex: 1 1 300px;
    }

    .about-image img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .about-text {
      flex: 2 1 400px;
    }

    @media (max-width: 768px) {
      .about-container {
        flex-direction: column;
        text-align: center;
      }
    }
  </style>
</head>
<body>

<div class="about-container">
  <div class="about-image">
    <img src="assets/images/banner.jpeg" alt="About Knowledge Point">
  </div>
  <div class="about-text">
    <h2>About Knowledge Point</h2>
    <p>
      Knowledge Point is a  educational platform offering courses for Class 10 CBSE students.
      We provide high-quality study materials, downloadable notes, and subject-wise learning content
      for Mathematics, Science, English, and more.
    </p>
    <p>
      Our goal is to make education accessible, engaging, and interactive for every student.
    </p>
  </div>
</div>

</body>
</html>
