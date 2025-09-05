import random

# Function to simulate coin toss
def coin_toss():
    return random.choice(["Heads", "Tails"])

print("Press Enter to toss the coin (type 'q' to quit):")
while True:
    user_input = input()
    if user_input.lower() == 'q':
        break
    print("Coin Toss:", coin_toss())
