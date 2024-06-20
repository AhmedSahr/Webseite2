import RPi.GPIO as GPIO
import time

servoPIN = 18
GPIO.setmode(GPIO.BCM)
GPIO.setup(servoPIN, GPIO.OUT)

p = GPIO.PWM(servoPIN, 50) # GPIO 17 for PWM with 50Hz
p.start(0) # Initialization

#for i in range(5):
p.ChangeDutyCycle(5.5)
time.sleep(1)
p.ChangeDutyCycle(10)
time.sleep(1)

p.stop()
   
   

 
