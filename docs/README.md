# UHASmida

UHAS-MIDA is an open-source software tool that calculates the red blood cell (RBC) concentration and blood volume during malaria in children determined using a stable isotope of chromium (53Cr as the label) during gas chromatography-mass spectrometry in selective ion monitoring (GC/MS-SIM) analysis. A key component involves the determination of the compositions of the most abundant naturally occuring isotopes of chromium (50Cr, 52Cr, 53Cr), and converting the proportions into a 3x3 matrix and its inverse. The inverse is then used to calculate the ‘corrected’ MS ion abundances. UHAS-MIDA supports the user to efficiently determine RBC concentration and fluid volume loss

# Installation guide
You can use XAMPP, WAMP, or MAMP, if you don't Apache and MySQL installed. <br />
:sparkle: Create a Database called uhas_mida. (NB: You can give it a name of your choice as well) <br />
:sparkle: Import uhas_mida.sql to create the needed tables.<br />
:sparkle: open connect.php: add your database in the password area if it is password protected. (NB: If the databse name is different enter that as the database name)<br />
:sparkle: If successfully connected, open a browser and enter localhost/foldername to launch and use<br />

# Documentation
