import random

# Initialize board
board = [" " for _ in range(9)]

def print_board():
    print(f"{board[0]} | {board[1]} | {board[2]}")
    print("--+---+--")
    print(f"{board[3]} | {board[4]} | {board[5]}")
    print("--+---+--")
    print(f"{board[6]} | {board[7]} | {board[8]}")

def check_winner(player):
    win_combinations = [
        [0,1,2], [3,4,5], [6,7,8], # rows
        [0,3,6], [1,4,7], [2,5,8], # columns
        [0,4,8], [2,4,6]           # diagonals
    ]
    for combo in win_combinations:
        if all(board[i] == player for i in combo):
            return True
    return False

def ai_move():
    empty_cells = [i for i, x in enumerate(board) if x == " "]
    return random.choice(empty_cells)

# Game loop
for turn in range(9):
    print_board()
    if turn % 2 == 0:
        move = int(input("Player X, enter position (0-8): "))
    else:
        move = ai_move()
        print(f"AI O chooses position {move}")
    if board[move] == " ":
        board[move] = "X" if turn % 2 == 0 else "O"
    if check_winner("X"):
        print_board()
        print("Player X wins!")
        break
    elif check_winner("O"):
        print_board()
        print("AI O wins!")
        break
else:
    print_board()
    print("It's a tie!")
