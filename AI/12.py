# Number guessing game where AI guesses the user's number

print("Think of a number between 1 and 100 and I will try to guess it.")

low = 1
high = 100
feedback = ""

while feedback != "correct":
    guess = (low + high) // 2
    print(f"My guess is: {guess}")
    feedback = input("Is it 'higher', 'lower', or 'correct'? ").lower()
    
    if feedback == "higher":
        low = guess + 1
    elif feedback == "lower":
        high = guess - 1

print(f"Yay! I guessed your number: {guess}")