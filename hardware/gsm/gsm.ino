#include <Wire.h> 
#include <LiquidCrystal_I2C.h>
#include <SoftwareSerial.h>
SoftwareSerial sim(3,1);
#define MQ2pin (A0)
LiquidCrystal_I2C lcd(0x27,20,4);
int _timeout;
String _buffer;
String number = "0788750979";
void setup() {
  Serial.begin(9600);
  sim.begin(9600);
  _buffer.reserve(50);
  delay(1000);
}

void loop() {
    sendsms();
    delay(10000);
}
void sendsms(){
  sim.println("AT+CMGF=1");
  delay(200);
  sim.println("AT+CMGS=\"" + number + "\"\r");
  delay(200);
  String SMS = "Hello, new egg detected please check";
  sim.println(SMS);
  delay(100);
  sim.println((char)26);
  delay(200);
  _buffer = _readSerial();
  delay(2000);
  delay(2000);
  }
String _readSerial() {
_timeout = 0;
while (!sim.available() && _timeout < 12000 )
{
delay(13);
_timeout++;
}
if (sim.available()) {
return sim.readString();
}
}
