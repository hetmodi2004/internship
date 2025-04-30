<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tic-Tac-Toe Game</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f0f0;
      margin: 0;
    }

    .game-container {
      text-align: center;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .status {
      font-size: 1.5rem;
      margin-bottom: 20px;
    }

    .board {
      display: grid;
      grid-template-columns: repeat(3, 100px);
      grid-template-rows: repeat(3, 100px);
      gap: 10px;
      justify-content: center;
      margin: 0 auto;
    }

    .cell {
      width: 100px;
      height: 100px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 2rem;
      background-color: #fafafa;
      border: 2px solid #ccc;
      cursor: pointer;
      border-radius: 8px;
    }

    .cell:hover {
      background-color: #e0e0e0;
    }

    .cell.taken {
      pointer-events: none;
    }

    .reset-btn {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 1rem;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .reset-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="game-container">
    <div class="status" id="status">Player 1's turn (X)</div>
    <div class="board">
      <div class="cell" data-cell-index="0"></div>
      <div class="cell" data-cell-index="1"></div>
      <div class="cell" data-cell-index="2"></div>
      <div class="cell" data-cell-index="3"></div>
      <div class="cell" data-cell-index="4"></div>
      <div class="cell" data-cell-index="5"></div>
      <div class="cell" data-cell-index="6"></div>
      <div class="cell" data-cell-index="7"></div>
      <div class="cell" data-cell-index="8"></div>
    </div>
    <button class="reset-btn" id="resetBtn">Reset Game</button>
  </div>

  <script>
    const cells = document.querySelectorAll('.cell');
    const statusDisplay = document.getElementById('status');
    const resetButton = document.getElementById('resetBtn');
    let currentPlayer = 'X';
    let gameActive = true;

    const winningCombinations = [
      [0, 1, 2],
      [3, 4, 5],
      [6, 7, 8],
      [0, 3, 6],
      [1, 4, 7],
      [2, 5, 8],
      [0, 4, 8],
      [2, 4, 6],
    ];

    // Function to handle a cell click
    function handleCellClick(event) {
      const clickedCell = event.target;
      const cellIndex = clickedCell.getAttribute('data-cell-index');

      if (!gameActive || clickedCell.classList.contains('taken')) {
        return;
      }

      clickedCell.textContent = currentPlayer;
      clickedCell.classList.add('taken');
      checkWin();
      switchPlayer();
    }

    // Switch player turn
    function switchPlayer() {
      currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
      statusDisplay.textContent = `Player ${currentPlayer === 'X' ? '1' : '2'}'s turn (${currentPlayer})`;
    }

    // Check if there's a winner or tie
    function checkWin() {
      for (const combination of winningCombinations) {
        const [a, b, c] = combination;
        if (cells[a].textContent && cells[a].textContent === cells[b].textContent && cells[a].textContent === cells[c].textContent) {
          gameActive = false;
          statusDisplay.textContent = `Player ${currentPlayer === 'X' ? '1' : '2'} wins! Congratulations!`;
          return;
        }
      }

      if (Array.from(cells).every(cell => cell.textContent !== '')) {
        gameActive = false;
        statusDisplay.textContent = "It's a tie! No winner this time.";
      }
    }

    // Reset the game
    function resetGame() {
      gameActive = true;
      currentPlayer = 'X';
      statusDisplay.textContent = `Player 1's turn (X)`;
      cells.forEach(cell => {
        cell.textContent = '';
        cell.classList.remove('taken');
      });
    }

    // Event listeners for cell clicks and reset button
    cells.forEach(cell => {
      cell.addEventListener('click', handleCellClick);
    });
    resetButton.addEventListener('click', resetGame);
  </script>

</body>
</html>
