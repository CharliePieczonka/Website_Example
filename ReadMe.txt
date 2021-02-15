The description of the assignment for my databases course is found below.


Using the database you created for assignment 2,CSS, HTML, PHP and MySQL (and JavaScript if you want, but you won't have to use JavaScript), create a website  that allows someone to update the doctors, hospitals, patients and treats tables.  Here are the tasks a user must be able to complete:


List all the doctor's first name and last name in alphabetical order by last name OR by first name (let them choose which one they want to sort on with a radio button). Also allow the user to decide if the doctors name (either first or last) should be in ascending or descending order (maybe give them a radio button to click on for the order).   Once the list of doctors is displayed, allow the user to select one of the doctors and then display all of this doctor's information including the name of the hospital that the doctor works at. 

List all the doctors (first name, last name, specialty and license date) who were licensed before a given date. Allow the user to enter the date.

Allow the user to enter a new doctor. The user should be able to enter all the information include which hospital the doctor works at.  Every new doctor MUST be assigned to a hospital. Make sure you force the user to pick a  hospital.  Also, make sure that the user cant insert a doctor with a doctor license number that already exists.

Allow the user to delete an existing doctor. Let the user know if the user tries to delete a doctor who is treating patients and let the user change their mind if he/she decides not to delete the doctor.  If the user does delete the doctor, make sure you do a cascading delete for the treats table.  

Allow the user to update a hospital's name. 

List all the hospital names and the first name and last name of the head doctor of each hospital and the doctor's start date as head,  in alphabetical order by hospital name.

Allow the user to select a patient (by entering the OHIP number) and then output all that patient's first and last name and the doctors (first and last name) who treat that patient. Given an error message if the user enters an OHIP number that doesn't exist.

Allow the user to assign a doctor to treat a patient (show the patients name when the user does this) or stop a doctor from treating a patient. 
Output the first and last name of any doctor who has no patients. 


It is a good habit to disconnect from a database once you have finished using it, make sure you program disconnects from the database. 

Remember that PHP can get large and cluttered, your application will be marked partly on your structure, comments and modularity, don't put everything in one file, try using PHP includes and functions and  separate files to break up the PHP code.
