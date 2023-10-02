<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comming soon</title>

<style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.container {
  display: flex;
  row-gap: 10px;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  height: 100vh;
  width: 100%;
  overflow: hidden;
}
.container .image {
  position: absolute;
  height: 100%;
  width: 100%;
  object-fit: cover;
  z-index: -1;
}
body::after {
  position: absolute;
  content: "";
  top: 0;
  height: 100%;
  width: 100%;
  background: #000;
  z-index: -1;
  opacity: 0.2;
}
.container header {
  font-size: 60px;
  color: #fff;
  font-weight: 600;
  text-align: center;
}
.container p {
  font-size: 16px;
  font-weight: 400;
  color: #fff;
  max-width: 550px;
  text-align: center;
}
.container .time-content {
  display: flex;
  column-gap: 30px;
  align-items: center;
  margin: 2rem;
  border: 1px solid white;
  padding: 2rem 2.5rem;
  border-radius: 0.5rem;
  background: rgba(250, 250, 250, 0.2);
}
.time-content .time {
  display: flex;
  align-items: center;
  flex-direction: column;
}
.time .number {
  font-weight: 800;
  font-size: 80px;
  line-height: 1;
  color: #eee;
}
.time .text {
  text-transform: capitalize;
  color: #fff;
  font-weight: 600;
  font-size: 12px;
}
.email-content {
  display: flex;
  align-items: center;
  flex-direction: column;
  width: 100%;
}
.email-content p {
  font-size: 13px;
}
.input-box {
  display: flex;
  align-items: center;
  height: 40px;
  max-width: 360px;
  /* width: 100%; */
  margin-top: 20px;
  column-gap: 20px;
}
.input-box input,
.input-box a {
  height: 100%;
  outline: none;
  border: none;
  border: 1px solid #fff;
  border-radius: 4px;
  background-color: rgba(255, 255, 255, 0.2);
  font-weight: 400;
}
.input-box input {
  width: 100%;
  padding: 0 15px;
  color: #fff;
}
input::placeholder {
  color: #fff;
}
.input-box a {
  cursor: pointer;
  background-color: #eee;
  color: black;
  white-space: nowrap;
  padding: 8px 20px;
  transition: all 0.3s ease;
}
.input-box a:hover {
  background-color: #fff;
}

@media screen and (max-width: 480px) {
  .container header {
    font-size: 50px;
  }
}

</style>


</head>
<body>
<section class="container">
  <img src="img/background.jpg" alt="" class="image" />
  <header>Website Coming Soon</header>
  <p>
    We are excited to announce that we will be launching soon and can't wait to share our new platform with you.
  </p>
  <div class="time-content">
    <div class="time days">
      <span class="number"></span>
      <span class="text">days</span>
    </div>
    <div class="time hours">
      <span class="number"></span>
      <span class="text">hours</span>
    </div>
    <div class="time minutes">
      <span class="number"></span>
      <span class="text">minutes</span>
    </div>
    <div class="time seconds">
      <span class="number"></span>
      <span class="text">seconds</span>
    </div>
  </div>
  <div class="email-content">
    <!-- <p>Subscribe now to get the latest updates!</p> -->
    <div class="input-box">
      <!-- <input type="email" placeholder="Enter your email..." /> -->
      <a href="package.php">Register Now</a>
    </div>
  </div>
</section>
</body>

<script>

const seconds = document.querySelector(".seconds .number"),
  minutes = document.querySelector(".minutes .number"),
  hours = document.querySelector(".hours .number"),
  days = document.querySelector(".days .number");

let secValue = 11,
  minValue = 2,
  hourValue = 2,
  dayValue = 9;

const timeFunction = setInterval(() => {
  secValue--;

  if (secValue === 0) {
    minValue--;
    secValue = 60;
  }
  if (minValue === 0) {
    hourValue--;
    minValue = 60;
  }
  if (hourValue === 0) {
    dayValue--;
    hourValue = 24;
  }

  if (dayValue === 0) {
    clearInterval(timeFunction);
  }
  seconds.textContent = secValue < 10 ? `0${secValue}` : secValue;
  minutes.textContent = minValue < 10 ? `0${minValue}` : minValue;
  hours.textContent = hourValue < 10 ? `0${hourValue}` : hourValue;
  days.textContent = dayValue < 10 ? `0${dayValue}` : dayValue;
}, 1000); //1000ms = 1s


</script>
</html>