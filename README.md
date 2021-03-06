# Lucky Draw Studio

Create online booking system on LAMP

## myDatabase methods

**public function** getDefaultTimeArray **()**
```
SELECT id, time FROM default_time;
```

**public function** fillTimeSlotTable **($date)**
```
INSERT INTO time_slots (date, time) VALUES (:date, :time);
```
**public function** getAllTimeSlots **()**
```
SELECT t.id, t.date, d.time FROM time_slots AS t JOIN default_time AS d ON t.time = d.id ORDER BY t.id;
 ```
**public function** getAllTimeSlotsFromToday **()**
```
SELECT t.id, t.date, d.time FROM time_slots AS t JOIN default_time AS d ON t.time = d.id WHERE t.date >= CURRENT_DATE() ORDER BY t.id;
 ```
 **public function** setReservation **($time_slot, $name, $tel)**
 ```
INSERT INTO reservations (name, phone, time_slot) VALUES (:name, :phone, :time_slot);
 ```
 
## Authors

* **Anton Iun** - *Initial work*  - [nah7c00](https://github.com/nah7c00)
