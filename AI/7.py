# Mini Knowledge Base: Disease Diagnosis

def diagnose(symptoms):
    if "fever" in symptoms and "cough" in symptoms:
        return "Flu"
    elif "headache" in symptoms and "nausea" in symptoms:
        return "Migraine"
    elif "thirst" in symptoms and "urination" in symptoms:
        return "Diabetes"
    elif "chest pain" in symptoms and "breathlessness" in symptoms:
        return "Heart Disease"
    else:
        return "No diagnosis"

print("Enter symptoms (comma separated):")
symptoms = input().lower().split(",")
print("Possible Diagnosis:", diagnose([s.strip() for s in symptoms]))
