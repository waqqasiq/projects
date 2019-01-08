#include <Wire.h>
#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27, 2, 1, 0, 4, 5, 6, 7, 3, POSITIVE);

#define measurePin A3
#define powerPin 12
#define echoPin 5
#define trigPin 6
#define pumpPin 2
#define buzzerPin 13

int sonarDistanceVal;
int sonarTimeVal;
String str_dustDensity = "";
bool pumpHasBeenTurnedOn;

unsigned int samplingTime = 280;
unsigned int deltaTime = 40;
unsigned int sleepTime = 9680;

float voMeasured = 0;
float calcVoltage = 0;
float dustDensity = 0;

void setup() {
  Serial.begin(9600);
  lcd.begin(16, 2);
  lcd.backlight();
  pinMode(pumpPin, OUTPUT);
  pinMode(echoPin, INPUT);
  pinMode(trigPin, OUTPUT);
  pinMode(powerPin, OUTPUT);
  pinMode(buzzerPin, OUTPUT);
}

void loop() {
  pumpHasBeenTurnedOn = false;
  dustDensity = calculateDustDensity();
  if ( dustDensity < 0)
  {
    dustDensity = 0.00;
  }

  str_dustDensity = "Dust Density:" + (String)dustDensity;
  displayOnLCD(str_dustDensity, 0, 50);
  sonarDistanceVal = calculateSonarDistance();

  if (dustDensity > 400) {
    tone(buzzerPin, 1000);
    Serial.println("*****************DUST DENSITY GREATER THAN 400********************");
    displayOnLCD("HAZARDOUS!", 1, 300);
    if (sonarDistanceVal > 30) {
      Serial.println("*****************SONAR DISTANCE GREATER THAN 30cm********************");
      lcd.clear();
      displayOnLCD("Sprinkler On!", 0, 0);
      displayOnLCD("Step Aside.", 1, 0);
      sprinkleWater(2000);
      pumpHasBeenTurnedOn = true;
    }
    noTone(buzzerPin);
  }
  if (!pumpHasBeenTurnedOn)
  {
    delay(500);
  }
  lcd.clear();
}

int calculateDustDensity()
{
  digitalWrite(powerPin, LOW);
  delayMicroseconds(samplingTime);
  voMeasured = analogRead(measurePin);
  delayMicroseconds(deltaTime);
  digitalWrite(powerPin, HIGH);
  delayMicroseconds(sleepTime);
  calcVoltage = voMeasured * (5.0 / 1024);
  dustDensity = (0.17 * calcVoltage - 0.1) * 1000;

  //Serial.print("Raw Signal Value (0-1023): ");
  //Serial.println(voMeasured);
  //Serial.print("Voltage: ");
  //Serial.println(calcVoltage);
  Serial.print("Dust Density: ");
  Serial.println(dustDensity);
  Serial.println();
  return (int)dustDensity;
}

int calculateSonarDistance()
{
  digitalWrite(trigPin, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
  sonarTimeVal = pulseIn(echoPin, HIGH);
  sonarDistanceVal = (sonarTimeVal * .0343) / 2;

  Serial.print("Sonar Reading: ");
  Serial.print(sonarDistanceVal);
  Serial.println("cm");
  return (int)sonarDistanceVal;
}
void sprinkleWater(int pumpOnTime)
{
  digitalWrite(pumpPin, HIGH);
  delay(pumpOnTime);
  digitalWrite(pumpPin, LOW);
}

void displayOnLCD(String message, int row, int displayTime) //0 = first row, 1 = second
{
  lcd.setCursor(0, row);
  lcd.print(message);
  delay(displayTime);
}