def identify_ai(description):
    desc = description.lower()

    if "specific" in desc or "limited" in desc or "task" in desc:
        return "Narrow AI"
    elif "human" in desc or "reasoning" in desc or "thinking" in desc:
        return "General AI"
    elif "beyond" in desc or "superhuman" in desc or "future" in desc:
        return "Super AI"
    else:
        return "Unknown AI Type"


# Example usage
print(identify_ai("AI designed for a specific task like playing chess"))
print(identify_ai("AI that can think and reason like a human"))
print(identify_ai("AI with superhuman intelligence beyond humans"))