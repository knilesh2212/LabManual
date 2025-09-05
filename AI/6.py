def f(x):
    return -x**2 + 4*x   # Function: -x² + 4x

def hill_climb(start, step_size=0.1, max_iterations=100):
    current = start
    for _ in range(max_iterations):
        # Check neighbors
        left = current - step_size
        right = current + step_size
        
        # Evaluate neighbors
        if f(left) > f(current):
            current = left
        elif f(right) > f(current):
            current = right
        else:
            break   # No improvement → peak reached
    return current, f(current)

# Run algorithm
peak_x, peak_y = hill_climb(start=0)
print("Peak found at x =", peak_x, "with value f(x) =", peak_y)