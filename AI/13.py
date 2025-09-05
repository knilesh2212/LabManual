# Rule-based system to advise about umbrella

weather = input("Enter the weather (rainy, sunny, cloudy): ").lower()

if weather == "rainy":
    print("Carry an umbrella.")
elif weather == "sunny":
    print("No umbrella needed. Wear sunglasses!")
elif weather == "cloudy":
    print("It might rain. Keep an umbrella handy.")
else:
    print("Weather not recognized. Be prepared for anything!")