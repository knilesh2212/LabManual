states = {
    "Home": ["Bus Stop"],
    "Bus Stop": ["Home", "Station", "College"],
    "Station": ["Bus Stop"],
    "College": []
}

print("\nState-Space Representation of the Problem:\n")
for state in states:
    print(f"{state} → {states[state]}")