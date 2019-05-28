# web-based-vehicle
control a dc motors attached to RPi from webpage
Code to control DC motors from webpage connected to RPi via L293D

PROCEDURE to use the code:
https://www.raspberrypi.org/documentation/remote-access/web-server/apache.md use the following instructions to download and establish an apache web server in RPi and also follow the additional instructions to download PHP.  2.After finishing the above procedures open the terminal in your Raspberry Pi and do the following,
(1) type cd  /  (2)type cd var/www/html   (3)REPLACE the existing index.html(or .php) with the new index.php in the repository and exit    (4)type hostname -I to know your IP address  (5) type the same IP address in your web browser a webpage will be created to control the motors

for hardware setup refer https://www.electronicshub.org/controlling-a-dc-motor-with-raspberry-pi/ 
NOTE: use the GPIO given in the code or change the code accordingly.
