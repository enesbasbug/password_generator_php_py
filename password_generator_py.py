import time
import os
import string
import random

class RandomPasswordGenerator:
    def __init__(self, interval):
        self.interval = interval
        self.password_file = os.path.join(os.path.dirname(__file__), 'passwords.txt')

    # may have other methods ...
    def generateAndSavePassword(self):
        characters = string.digits + string.ascii_letters
        password = ''.join(random.choice(characters) for i in range(12))

        with open(self.password_file, 'a') as file:
            file.write(password + '\n')

    def start(self):
        while True:
            self.generateAndSavePassword()
            time.sleep(self.interval)


if __name__ == "__main__":
    password_generator = RandomPasswordGenerator(20) # Create an instance
    password_generator.start() # Star
