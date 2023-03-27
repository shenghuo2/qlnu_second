import random
from secret import flag
from libnum import s2n
m = s2n(flag)

randoms = []
for _ in range(208):
    randoms.append(random.getrandbits(96))

cipher = (random.getrandbits(512)) ^ m
open("randoms.txt", "w").write("randoms = "+str(randoms))
open("randoms.txt", "a").write("\ncipher = "+str(cipher))