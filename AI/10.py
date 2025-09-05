# Program to detect biased or fair AI output
text = input("Enter sample AI output: ").lower()

biased_words = ["he", "she", "man", "woman", "male", "female", "girls", "boys"]

if any(word in text for word in biased_words):
    print("The output may contain bias.")
else:
    print("The output seems fair.")