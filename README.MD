# ACXSS CODE TEST
Welcome to the ACXSS CODE TEST. Your main task here is to create a small endpoint that will read from a JSON file and return a JSON object to the frontend to populate the table UI. In addition, the application should be able to handle a small search on users' names and update the table UI based on the results. Keep in mind that we are just looking for EXACT matches. Please, follow the instructions to properly set up your project. If you have any questions, feel free to let us know.

## Set up:
	-> Install a free version of MAMP to be able to run a local Apache server if you do not have it on your system already.
	-> Once install, update the "Document root" folder to point to the ACXSS_TEST folder on your local machine. You can do so by going to Preferences > Document root > Choose...
	-> Make sure you are running an Apache Web server and PHP 7.4.21 version and click start
	-> Go to http://localhost:8888/

## Fun Part (Backend):
	-> Inside the PHPAPI folder you will find a awesomeApi.php file. This file is set to return an object back to the frontend with the payload data. Your task here is to use the function in place to read the data from the data.json file and send it back to the frontend to populate the table.
	-> In addition, the endpoint should be able to take and input to perform a keyword search on "names". This search should return only exact matches to make things simple.

## Fun Part 2 (Frontend):
	-> Fetch the data from the backend and populate the table
	-> Inside the index.html on line 60, you will find a sample row commented. This is for you to create as many rows as you need to populate the table with the same syntax.
	-> Feel free to use or modify the ajax sample inside the test.js file to make the request to the backend.
	-> Lastly, use JQuery to manipulate the DOM and listen for input changes on the search input to perform a keyword search. Update the table based on the results. (You can use onChange listener on the id="mySearchBar").


## Don't forget:
	-> Have FUN :)
