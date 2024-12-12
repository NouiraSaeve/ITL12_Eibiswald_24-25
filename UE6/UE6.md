# Laboratoriumsübung UE (Vorlage)

---

__Schuljahr: 2024/25__

__Lehrgang: 2__

__Übungstag: 05.12.2024__

__Name: Säve Nouira__

__Klasse: 3a APC__

__Gruppe: C__


---

## Umsetzung

### Entfernen des Captchas + E-Mail - Verifizierung

### Captcha
Hierzu habe ich diverse Sachen auskommentiert in den Files ___index.php, RegistrationModel.php und RegisterController.php___. 
![pic1](images_for_md/changed_function.png)
![pic2](images_for_md/commented_out_function_call.png)
![pic3](images_for_md/check_commited_away.png)

Somit kann man erkennen, dass das Captcha entfernt wurde: 
![pic4](images_for_md/show_no_captcha.png)

---

#### E-Mail
Hierzu habe ich Stellen aus ___RegisterController.php, RegistrationModel.php und LoginModel.php___ auskommentiert. 
![pic5](images_for_md/send_verification_mail_commented_out.png)
![pic6](images_for_md/check_if_email_was_activated.png)

### Nur Useranlage durch Admins
Hierfür habe ich zuerst aus dem File ___header.php___ die Regestrier-Karte rausgenommen und diese zu dem Tab hinzugefügt, den nur Admins sehen.
![pic7](images_for_md/image.png)

Nun habe ich die Überprüfung bei dem Rendern der Seite entfernt:
![pic8](images_for_md/register_index.png)

Somit ist dieser Tab nur sichtbar, wenn man einen Account mit Level 7 (admin) benutzt:
![pic8](images_for_md/show_with_admin.png)

![pic9](images_for_md/show_no_admin.png)





