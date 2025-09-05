def chatbot():
    print("ChatBot: Hi! Type 'bye' to exit.")
    while True:
        user_input = input("You: ").lower()

        if "hello" in user_input or "hi" in user_input:
            print("ChatBot: Hi there!")
        elif "your name" in user_input:
            print("ChatBot: I'm ChatBot.")
        elif "how are you" in user_input:
            print("ChatBot: I'm good!")
        elif "help" in user_input:
            print("ChatBot: How can I help?")
        elif "bye" in user_input:
            print("ChatBot: Bye! Have a nice day.")
            break
        else:
            print("ChatBot: I don't understand.")

# Run chatbot
chatbot()