Created a website using HTML, PHP and MySQL that allows someone to update fictional doctors, hospitals, patients and treats tables.  


The tasks a user can complete on the website:

List all the doctor's first name and last name in alphabetical order by last name OR by first name. 
Decide if the doctors name (either first or last) should be in ascending or descending order.   
Once the list of doctors is displayed, the user can select one of the doctors to display all of their information including the name of the hospital that the doctor works at. 

List all the doctors (first name, last name, specialty and license date) who were licensed before a given date. Allow the user to enter the date.

Enter a new doctor. The user is able to enter all the information including which hospital the doctor works at. Forces the user to pick a hospital as that cannot be left empty. Also, makes sure that the user can't insert a doctor with a doctor license number that already exists.

Delete an existing doctor. Let the user know if the user tries to delete a doctor who is treating patients and let the user change their mind if he/she decides not to delete the doctor.  If the user does delete the doctor, make sure you do a cascading delete for the treats table.  

Update a hospital's name. 

List all the hospital names and the first name and last name of the head doctor of each hospital and their start date in alphabetical order by hospital name.

Select a patient (by entering the OHIP number) and then output all that patient's first and last name and the doctors (first and last name) who treat that patient. Gives an error message if the user enters an OHIP number that doesn't exist.

Assign a doctor to treat a patient (show the patients name when the user does this) or stop a doctor from treating a patient. 

Output the first and last name of any doctor who has no patients. 
