# Forms

> The form is made with HTML language and PHP is used to validate the data.
> There are two methods to send the data: GET and POST.
>> * The GET method sends the data through the URL, so it is not recommended to send sensitive data.
>> * The POST method sends the data through the HTTP header, so it is more secure.

### Form to upload files
> * Method: POST
> * enctype: multipart/form-data
>   * ``` <input type="file" name="file"> ```

### PHP processing

> * ``` $_FILES ``` is a super global variable that contains the information of the files sent through the form.
> * ``` is_uploaded_file() ``` checks if the file was uploaded through HTTP POST.
> * ``` move_uploaded_file() ``` moves the file from the temporary location to the desired location.
> * ``` file_exists() ``` checks if the file exists.
> * ``` unlink() ``` deletes the file.
