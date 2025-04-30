<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Stopwatch - PRODIGY INFOTECH</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #4e73df, #2e63b0);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      color: white;
      overflow: hidden;
    }

    .stopwatch-container {
      background: rgba(0, 0, 0, 0.8);
      padding: 40px;
      border-radius: 30px;
      text-align: center;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
      width: 400px;
      animation: fadeIn 0.8s ease-out;
    }

    @keyframes fadeIn {
      0% { opacity: 0; transform: scale(0.8); }
      100% { opacity: 1; transform: scale(1); }
    }

    .stopwatch-time {
      font-size: 3.5rem;
      font-weight: bold;
      margin-bottom: 20px;
      letter-spacing: 2px;
      color: #00c9a7;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    }

    .stopwatch-time span {
      margin: 0 10px;
    }

    .controls {
      display: flex;
      justify-content: space-around;
      gap: 20px;
      margin-top: 30px;
    }

    .controls button {
      background-color: #00c9a7;
      border: none;
      padding: 15px 25px;
      font-size: 1.2rem;
      color: white;
      border-radius: 10px;
      cursor: pointer;
      transition: transform 0.2s, background-color 0.3s ease;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    .controls button:hover {
      background-color: #009f82;
      transform: scale(1.1);
    }

    .controls button:disabled {
      background-color: #b1b1b1;
      cursor: not-allowed;
      box-shadow: none;
    }

    .lap-times {
      margin-top: 30px;
      text-align: left;
      max-height: 180px;
      overflow-y: auto;
      padding: 10px;
      background-color: rgba(0, 0, 0, 0.6);
      border-radius: 8px;
      box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .lap-times p {
      background: #333;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 10px;
      font-size: 1rem;
      color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .lap-times p:hover {
      background-color: #444;
    }

    @media (max-width: 768px) {
      .stopwatch-container {
        width: 280px;
      }

      .stopwatch-time {
        font-size: 2.5rem;
      }

      .controls button {
        padding: 12px 20px;
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

  <div class="stopwatch-container">
    <div class="stopwatch-time" id="time">
      <span id="hours">00</span>:<span id="minutes">00</span>:<span id="seconds">00</span>
    </div>
    <div class="controls">
      <button id="startStopBtn" onclick="startStop()">Start</button>
      <button id="resetBtn" onclick="reset()" disabled>Reset</button>
      <button id="lapBtn" onclick="recordLap()" disabled>Lap</button>
    </div>
    <div class="lap-times" id="lapTimes">
      <!-- Lap times will appear here -->
    </div>
  </div>

  <script>
    let timer;
    let isRunning = false;
    let hours = 0;
    let minutes = 0;
    let seconds = 0;
    let lapCounter = 1;

    // Update the stopwatch display
    function updateTime() {
      document.getElementById('hours').textContent = formatTime(hours);
      document.getElementById('minutes').textContent = formatTime(minutes);
      document.getElementById('seconds').textContent = formatTime(seconds);
    }

    // Format time with leading zero
    function formatTime(unit) {
      return unit < 10 ? `0${unit}` : unit;
    }

    // Start or stop the stopwatch
    function startStop() {
      if (isRunning) {
        clearInterval(timer);
        document.getElementById('startStopBtn').textContent = 'Start';
        document.getElementById('resetBtn').disabled = false;
        document.getElementById('lapBtn').disabled = true;
      } else {
        timer = setInterval(() => {
          seconds++;
          if (seconds === 60) {
            seconds = 0;
            minutes++;
          }
          if (minutes === 60) {
            minutes = 0;
            hours++;
          }
          updateTime();
        }, 1000);
        document.getElementById('startStopBtn').textContent = 'Stop';
        document.getElementById('lapBtn').disabled = false;
      }
      isRunning = !isRunning;
    }

    // Reset the stopwatch
    function reset() {
      clearInterval(timer);
      hours = 0;
      minutes = 0;
      seconds = 0;
      lapCounter = 1;
      updateTime();
      document.getElementById('startStopBtn').textContent = 'Start';
      document.getElementById('resetBtn').disabled = true;
      document.getElementById('lapBtn').disabled = true;
      document.getElementById('lapTimes').innerHTML = '';
      isRunning = false;
    }

    // Record lap time
    function recordLap() {
      const lapTime = document.createElement('p');
      lapTime.textContent = `Lap ${lapCounter++}: ${formatTime(hours)}:${formatTime(minutes)}:${formatTime(seconds)}`;
      document.getElementById('lapTimes').appendChild(lapTime);
    }
  </script>

</body>
</html>
