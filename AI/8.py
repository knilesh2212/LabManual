# Known facts
facts = ["It is raining", "I have an umbrella"]

# Rules
rules = {
    "I will get wet": ["It is raining", "I don't have an umbrella"],
    "I will stay dry": ["It is raining", "I have an umbrella"]
}

# Forward Reasoning
print("Forward Reasoning:")
for conclusion, conditions in rules.items():
    if all(condition in facts for condition in conditions):
        print(conclusion)

# Backward Reasoning
goal = "I will stay dry"
print("\nBackward Reasoning:")
if goal in rules:
    print("To achieve '{}', check if these facts are true: {}".format(goal, ", ".join(rules[goal])))