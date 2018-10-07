Hello all,


For our coding challenge, using Laravel please create a registration page with just name, email and password as fields.
Submit the form using ajax to an API endpoint /api/register. The only validation will be unique emails.
If successful it must return a JSON formatted response with success = true and a user token (JWT based if possible) else it will return success=false
and the error message.


	Sample response if registration is successful:
	{
	   success: true,
	   token: xxxxxxxxxxxxxxxx    
	}

	Sample response if registration is unsuccessful:
	{
	   success: false,
	   message:  'Duplicate email'
	}


You may use any Javascript framework but Vue would be the preference.
Please setup a Repo in Github and send to us the link by Monday noon.

Bonus : Create an auto-generated API documentation for the endpoint /api/register

Good Luck