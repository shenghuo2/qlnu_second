import random
import signal

def ran():
    return random.randint(999,99999)
def add():
    question = f"{ran()} + {ran()} = "

    print(question)
    answer = eval(question[:-2])
    
    calc = input()
    if calc == str(answer):
        print("Correct.")
    else:
        print("Wrong.")
        exit(0)

def sub():
    question = f"{ran()} - {ran()} = "

    print(question)
    answer = eval(question[:-2])
    
    calc = input()
    if calc == str(answer):
        print("Correct.")
    else:
        print("Wrong.")
        exit(0)

def mul():
    question = f"{ran()} * {ran()} = "

    print(question)
    answer = eval(question[:-2])
    
    calc = input()
    if calc == str(answer):
        print("Correct.")
    else:
        print("Wrong.")
        exit(0)

def div():
    question = f"{ran()} / {ran()} = "

    print(question)
    answer = eval(question[:-2])
    
    calc = input()
    if calc == str(answer):
        print("Correct.")
    else:
        print("Wrong.")
        exit(0)

def mod():
    question = f"{ran()} % {ran()} = "

    print(question)
    answer = eval(question[:-2])
    
    calc = input()
    if calc == str(answer):
        print("Correct.")
    else:
        print("Wrong.")
        exit(0)

def expo():
    question = f"{ran()} ** {random.randint(10,99)} = "

    print(question)
    answer = eval(question[:-2])
    
    calc = input()
    if calc == str(answer):
        print("Correct.")
    else:
        print("Wrong.")
        exit(0)

def xor():
    question = f"{ran()} ^ {ran()} = "

    print(question)
    answer = eval(question[:-2])
    
    calc = input()
    if calc == str(answer):
        print("Correct.")
    else:
        print("Wrong.")
        exit(0)


def AND():
    question = f"{ran()} & {ran()} = "

    print(question)
    answer = eval(question[:-2])
    
    calc = input()
    if calc == str(answer):
        print("Correct.")
    else:
        print("Wrong.")
        exit(0)

print("Welcome to the calculate challenge. Please try to solve 300 Question in 600 seconds.")
input("Press Enter to start...")
signal.alarm(600)

for i in range(300):
    print("Round: "+str(i+1))
    random.choice([add,sub,mul,div,mod,expo,xor,AND])()


flag = open('/flag').read()
print("Congratulations on passing the challenge. This is your flag: " + str(flag))

